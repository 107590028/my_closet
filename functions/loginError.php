<?php 
$LoginError = array("Email" => "", "Password" => "");

if(isset($_POST['Login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM member WHERE Email = '".$email."'";
    $result = mysqli_query($conn, $sql);
    $email_exist = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if(empty($email)){
        $LoginError['Email'] = "請輸入密碼";
        }

    elseif(!$email_exist){
        $LoginError['Email'] = "此電子信箱不存在";
        }

    $sql = "SELECT Password FROM member WHERE Email = '".$email."'";
    $result = mysqli_query($conn, $sql);
    $correct_password = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if($correct_password){
        $correct_password = $correct_password[0]['Password']; 
        }

    if(empty($password)){
        $LoginError['Password'] = "請輸入密碼";
        }

    elseif($password != $correct_password){
        $LoginError['Password'] = "密碼錯誤";
        }

    if(empty($LoginError['Email']) &&
       empty($LoginError['Password'])){
        $sql = "SELECT CustomerID FROM customer WHERE CustomerID = 
                (SELECT ID FROM member WHERE Email ='".$email."')";
        $result = mysqli_query($conn, $sql);
        $CustomerID = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
        if($CustomerID){
            $CustomerID = $CustomerID[0]['CustomerID'];
            $_SESSION['identity'] = 'Customer';

            $_SESSION['ID'] = $CustomerID;
            }

        $sql = "SELECT SellerID FROM seller WHERE SellerID = 
                (SELECT ID FROM member WHERE Email ='".$email."')";
        $result = mysqli_query($conn, $sql);
        $sellerID = mysqli_fetch_all($result, MYSQLI_ASSOC);

        if($sellerID){
            $sellerID = $sellerID[0]['SellerID'];
            $_SESSION['identity'] = 'Seller';

            $_SESSION['ID'] = $sellerID;
            }        
        
        header("Location: index.php");
        }
    }
?>