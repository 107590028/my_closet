<?php 
session_start();
include('functions/CreateCustomerError.php');
include('functions/CreateSellerError.php');
 ?>

<style type="text/css">
    <?php
        include('styleSheets/blocks.css');
        include('styleSheets/color.css');
        include('styleSheets/text.css');
        include('styleSheets/input.css');
    ?>
</style>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="styleSheets/product.css">
    <link href="images/C&Z128.ico" rel="shortcut icon">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C&Z</title>
</head>
<body>
    <a class = "header-title" style="color:black;text-decoration:none" href = "index.php">C&Z</a>

    <div class="create-pad-2 lower-create-pad" style = "top: 50px;">
        <form class="create-pad-2 upper-create-pad" style="top: -10px;" method="post">
            <div class="login-text-1" style="top: 45px; left: 35px;">
                最後一步
            </div>

            <!-- <div class="login-text-2" style="top: -5px; left: 160px;">
                more step
            </div> -->

            <?php if($_SESSION['create_member_info']['identity'] == 'Customer'){
                    include('functions/createCustomer.php');
                }elseif($_SESSION['create_member_info']['identity'] == 'Seller'){
                    include('functions/createSeller.php');
                }?>


        </form>
    </div>
</body>
</html>