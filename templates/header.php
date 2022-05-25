<?php 
session_start(); 

if(empty($_SESSION['identity'])){
    $_SESSION['identity'] = 'guest';
    }

if(isset($_POST['logout'])){
    session_destroy();
    header('Location: index.php');
    }
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
    <link href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_mFfbovqgm520d484aIh6RsV2SXRGOrrPebIPLZVSSwVIKNNqstBX3E25mbH9tR_tFhk&usqp=CAU" rel="shortcut icon">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C&Z</title>
</head>
<body>
    <?php if($_SESSION['identity'] == 'Customer'){?>
        <!-- <div class="container"> -->
        <header class="title_bar">
            <div class="top">
                <a class="logo_MyCloset" style="color:black;text-decoration:none" href="index.php">C&Z</a><!--跳轉頁面 首頁-->
                <div class="logoutBtn">
                    <form method = "post">
                        <input type = "submit" class = "Logout_TEXT" name = "logout" value = "登出">
                    </form> <!--跳轉頁面 登出-->
                </div>
            </div>
                
            <nav class="option_box">
                <div class="table">
                <div><a href="index.php" style="color:#edf2c5;text-decoration:none" class="Home">首頁</a></div>
                <div><a href="MSMS.php" style="color:#edf2c5;text-decoration:none" class="Home">我的檔案</a></div>
                <div><a href="index.php" style="color:#edf2c5;text-decoration:none" class="Home">客服中心</a></div>
                </div>
        
                <div class="wrap">
                <!--跳轉頁面 購物車-->
                <div class="cart"><a href="#"><img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/empty-shopping-cart-1431173-1208877.png"style="display:block"width="25px" height="25px" ></a></div>
                <div class="search">
                    <input class="search-bar" type="text" name="search" id="search" placeholder="搜尋">
                    <button class="search-btn"><img src="https://cdn.iconscout.com/icon/free/png-256/search-1399-475061.png"style="display:block;color:#edf2c5" width="20px" height="20px" ></button>
                    <!--跳轉頁面 搜尋結果-->
                </div>
                </div>
            </nav>
        </header>
    <?php }elseif($_SESSION['identity'] == 'Seller'){ ?>
        <header class="title_bar">
            <div class="top">
                <a class="logo_MyCloset" style="color:black;text-decoration:none" href="index.php">C&Z</a><!--跳轉頁面 首頁-->
                <div class="logoutBtn">
                    <form method = "post">
                        <input type = "submit" class = "Logout_TEXT" name = "logout" value = "登出">
                    </form> <!--跳轉頁面 登出-->
                </div>
            </div>
                
            <nav class="option_box">
                <div class="table">
                    <div><a href="STMS.php" style="color:#edf2c5;text-decoration:none" class="Home">我的商品</a></div>
                    <div><a href="SEMS.php" style="color:#edf2c5;text-decoration:none" class="Home">商家檔案</a></div>
                </div>
            </nav>
        </header>
    <?php } ?>