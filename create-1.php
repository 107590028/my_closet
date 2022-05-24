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
    <link href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_mFfbovqgm520d484aIh6RsV2SXRGOrrPebIPLZVSSwVIKNNqstBX3E25mbH9tR_tFhk&usqp=CAU" rel="shortcut icon">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCloset</title>
</head>
<body>
    <a class = "header-title" href = "index.php">MyCloset</a>

    <div class="create-pad lower-create-pad" style = "top: 50px;">
        <form class="create-pad upper-create-pad" style="top: -10px;" method="post">
            <div class="login-text-1" style="top: 30px; left: 40px;">
                Create
            </div>

            <div class="login-text-2" style="top: -20px; left: 170px;">
                your account
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

            <label class="identity-text-0" style="top: 230px; left: 75px;">你是?</label>

            <label class="error-text" style="top: 420px; left:75px;">
                <?php echo $CreateError['identity']; ?>
            </label>

            <input type="radio" class="radio-input" name = "identity" value = "Customer" style="top: 370px; left: 70px;"></input>

            <label class="identity-text-1" style="top: 300px; left: 15px;">買家</label>

            <input type="radio" class="radio-input" name = "identity" value = "Seller" style="top: 370px; left: 200px;"></input>

            <label class="identity-text-1" style="top: 300px; left: 85px;">商家</label>

            <div class = "login-btn lower-login-btn" style="top: 350px;">
                <input type = "submit" name = "next" class = "next-btn upper-next-btn next-btn-text" style="top:-7px;" value = "下一步">
            </div>

            <div class="create-text-0 font" style="top: 220px; bottom: 12px;left:125px;">已經有帳號?<a href = "MSDS.php" class = "create-text-1 font"> 登入</a></div>
        </form>
    </div>

</body>
</html>