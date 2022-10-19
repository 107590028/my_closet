<?php 
$CreateError = array("Email" => "", "Password" => "", "uName" => "", "phone" => "", "identity" => "");

if(isset($_POST['next'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $uName = $_POST['uName'];
    $phone = $_POST['phone'];
    

    if(!empty($_POST['identity'])){
        $identity = $_POST['identity'];    
        }

    else{
        $CreateError['identity'] = "Please choose your identity";
        }

    $sql = "SELECT * FROM member WHERE Email = '".$email."'";
    $result = mysqli_query($conn, $sql);
    $email_exist = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if(empty($email)){
        $CreateError['Email'] = "請輸入電子信箱";
        }

    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $CreateError['Email'] = "無效的電子信箱";
        }    

    elseif($email_exist){
        $CreateError['Email'] = "此電子信箱已被使用";
        }

    if(empty($password)){
        $CreateError['Password'] = "請輸入密碼";
        }

    $sql = "SELECT * FROM member WHERE User_name = '".$uName."'";
    $result = mysqli_query($conn, $sql);
    $user_exist = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if(empty($uName)){
        $CreateError['uName'] = "請輸入你的電子信箱";
        }    

    elseif($user_exist){
        $CreateError['uName'] = "此使用者名稱已被使用";
        }

    $sql = "SELECT * FROM member WHERE Phone = '".$phone."'";
    $result = mysqli_query($conn, $sql);
    $phone_exist = mysqli_fetch_all($result, MYSQLI_ASSOC);    

    if(empty($phone)){
        $CreateError['phone'] = "請輸入手機號碼";
        }

    elseif($phone_exist){
        $CreateError['phone'] = "此手機號碼已被使用";
        }
    }
?>