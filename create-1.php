<?php 
include('functions/connect.php');
include('functions/CreateErrors.php');

if(isset($_POST['next']) &&
    empty($CreateError['Email']) &&
    empty($CreateError['phone']) &&
    empty($CreateError['uName']) &&
    empty($CreateError['Password']) &&
    empty($CreateError['identity'])){

    session_start();
    $_SESSION['create_member_info'] = array("Email" => $_POST['email'], 
                                            "Password" => $_POST['password'],
                                            "uName" => $_POST['uName'],
                                            "phone" => $_POST['phone'],
                                            "identity" => $_POST['identity']
                                            );
    
    header("Location: create-2.php");
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
    <link rel="stylesheet" href="styleSheets/product.css">
    <link href="images/C&Z128.ico" rel="shortcut icon">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C&Z</title>
</head>
<body>
    <div>
        <a class = "header-title" style="color:black;text-decoration:none" href = "index.php">C&Z</a>
    </div>
    <div class="create-pad lower-create-pad" style = "top: 50px;">
        <form class="create-pad " style="top: -10px;" method="post">
            <div class="login-text-1" style="top: 30px; left: 40px;">
                註冊
            </div>

            <input type = "text" name="email" class="text-input" style ="top: 100px;" placeholder="電子信箱"></input>

            <label class="error-text" style="top: 130px; left:75px;">
                <?php echo $CreateError['Email']; ?>
            </label>

            <input type = "password" name="password" class="text-input" style ="top: 165px;" placeholder="密碼"></input>

            <label class="error-text" style="top: 195px; left:75px;">
                <?php echo $CreateError['Password']; ?>
            </label>

            <input type = "text" name="uName" class="text-input" style ="top: 230px;" placeholder="使用者名稱"></input>

            <label class="error-text" style="top: 260px; left:75px;">
                <?php echo $CreateError['uName']; ?>
            </label>

            <input type = "text" name="phone" class="text-input" style ="top: 295px;" placeholder="手機號碼"></input>

            <label class="error-text" style="top: 325px; left:75px;">
                <?php echo $CreateError['phone']; ?>
            </label>

            <label class="identity-text-0" style="top: 296px; left: 80px;">你是？</label>

            <label class="error-text" style="top: 432px; left:110px;">
                <?php echo $CreateError['identity']; ?>
            </label>

            
            <input type="radio" class="radio-input" name = "identity" value = "Customer" style="top: 394px; left: 133px;"></input>

            <label class="identity-text-1" style="top: 315px; left: 78px;">買家</label>

            <input type="radio" class="radio-input" name = "identity" value = "Seller" style="top: 394px; left: 225px;"></input>

            <label class="identity-text-1" style="top: 315px; left: 136px;">商家</label>

            <div class = "login-btn lower-login-btn" style="top: 420px;">
                <input type = "submit" name = "next" class = "next-btn upper-next-btn next-btn-text" style="top:-18px;" value = "下一步">
            </div>
            
            <div class="create-text-0 font" style="top: 330px; bottom: 12px;left:138px;">已經有帳號？<a href = "MSDS.php" class = "create-text-1 font"> 登入</a></div>
        </form>
    </div>

</body>
</html>