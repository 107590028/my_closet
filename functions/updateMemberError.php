<?php 
include('connect.php');
$updateError = '';

if(isset($_POST['edit-email-done'])){
    if(empty($_POST['new-email'])){
        $updateError = "請輸入電子信箱";
        }

    else{
        $sql = "SELECT * FROM member WHERE Email = '".$_POST['new-email']."'";
        $result = mysqli_query($conn, $sql);
        $email_exist = mysqli_fetch_all($result, MYSQLI_ASSOC);

        if($email_exist){
            $updateError = "此電子信箱已被使用";
            }

        elseif(!filter_var($_POST['new-email'], FILTER_VALIDATE_EMAIL)) {
            $updateError = "無效的格式";
            }

        else{
            $sql = "UPDATE member SET Email = '".$_POST['new-email']."' WHERE ID = '".$_SESSION['ID']."'";

            $result = mysqli_query($conn, $sql);
            }    
        }

    
    }

if(isset($_POST['edit-password-done'])){
    if(empty($_POST['new-password'])){
        $updateError = '請輸入密碼';
        }


    else{
        $sql = "UPDATE member SET Password = '".$_POST['new-password']."' WHERE ID = '".$_SESSION['ID']."'";

        $result = mysqli_query($conn, $sql);
        }
    }

if(isset($_POST['edit-phone-done'])){
    if(empty($_POST['new-phone'])){
        $updateError = "請輸入手機號碼";
        }

    else{
        $sql = "SELECT * FROM member WHERE Phone = '".$_POST['new-phone']."'";
        $result = mysqli_query($conn, $sql);
        $phone_exist = mysqli_fetch_all($result, MYSQLI_ASSOC);

        if($phone_exist){
            $updateError = "此手機號碼已被使用";
            }

        else{
            $sql = "UPDATE member 
                    SET Phone = '".$_POST['new-phone']."' WHERE ID = '".$_SESSION['ID']."'";
            $result = mysqli_query($conn, $sql);
            }
        }
    }

if(isset($_POST['edit-desc-done'])){
    if(empty($_POST['new-description'])){
        $updateError = "請輸入描述";
        }

    else{
        $sql = "UPDATE seller
                SET Description = '".$_POST['new-description']."' WHERE SellerID = '".$_SESSION['ID']."'";

        $result = mysqli_query($conn, $sql);
        }
    }

if(isset($_POST['edit-address-done'])){
    if(empty($_POST['new-address'])){
        $updateError = "請輸入地址";
        }

    else{
        $sql = "UPDATE customer
                SET Address ='".$_POST['new-address']."' WHERE CustomerID = '".$_SESSION['ID']."'";
        
        $result = mysqli_query($conn, $sql);

        }
    }
?>