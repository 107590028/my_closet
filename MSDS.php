<?php 
session_start();
include('functions/connect.php');
include('functions/loginError.php');
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
    <title>登入MyCloset</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="home.css">
      <link href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_mFfbovqgm520d484aIh6RsV2SXRGOrrPebIPLZVSSwVIKNNqstBX3E25mbH9tR_tFhk&usqp=CAU" rel="shortcut icon">
</head>
<body>
    <a class = "header-title" href = "index.php">MyCloset</a>

    <div class="login-pad lower-login-pad" style = "top: 100px;">
        <form method = "post" class = "login-pad upper-login-pad" style="top: -10px;">
            <div class="login-text-1 font" style = "top: 30px; left: 60px;">
                Login
            </div>

            <div class="login-text-2 font" style = "top: -5px; left: 165px;">
                to MyCloset
            </div>

            <input type = "text" name="email" class="text-input" style ="top: 120px;" placeholder="電子信箱"></input>

            <label class="error-text font" style="top: 150px; left: 75px;">
                <?php echo $LoginError['Email']; ?>
            </label>

            <input type = "password" name="password" class="text-input" style ="top: 200px;" placeholder="密碼"></input>

            <label class="error-text" style="top: 230px; left: 75px;">
                <?php echo $LoginError['Password']; ?>
            </label>

            <div class = "login-btn lower-login-btn font" style="top: 200px;">
                <input type = "submit" name = "Login" class = "login-btn upper-login-btn login-btn-text" style="top:-7px;" value = "Login">
            </div>

            <div class="create-text-0 font" style="top: 220px; bottom: 12px;left:125px;">還沒有帳號?<a href = "create-1.php" class = "create-text-1 font"> 註冊一個</a></div>
            
        </form>
    </div>

</body>
</html>