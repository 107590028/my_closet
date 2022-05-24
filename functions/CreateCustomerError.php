<?php 
include('connect.php');



$createCustomerError = array("Sex" => "", "Birthday" => "");

$today = date('Y-m-d');

if(isset($_POST['createCustomer'])){
    if(empty($_POST['sex'])){
        $createCustomerError['Sex'] = "Please choose your gender";
        }

    if(empty($_POST['birthday'])){
        $createCustomerError['Birthday'] = "Please enter your birthday";
        }

    elseif($_POST['birthday'] > $today){
        $createCustomerError['Birthday'] = "The birthday you entered is invalid";
        }
    
    if($createCustomerError['Sex'] == "" &&
       $createCustomerError['Birthday'] == ""){ 

        echo "";
        // (1) insert member

        $sql = "INSERT INTO member(Email, Password, User_name, Phone) 
                VALUES('"
                  .$_SESSION['create_member_info']['Email']."', '"
                  .$_SESSION['create_member_info']['Password']."', '"
                  .$_SESSION['create_member_info']['uName']."', '"
                  .$_SESSION['create_member_info']['phone']."')";

        $result = mysqli_query($conn, $sql);       

        // (2) insert customer
        // 2-1 id

        $sql = "SELECT ID FROM member WHERE Email = '".$_SESSION['create_member_info']['Email']."'";
        $result = mysqli_query($conn, $sql);
        $id = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // echo $_SESSION['create_member_info']['Email'].'<br>';
        $id = $id[0]['ID'];

        $sex = $_POST['sex'];
        $address = $_POST['address'];
        $birthday = $_POST['birthday'];

        $sql = "INSERT INTO customer(CustomerID, Sex, Address, Birthday) 
                VALUES('"
                .$id."', '"
                .$sex."', '"
                .$address."', '"
                .$birthday."')";
                }

        $result = mysqli_query($conn, $sql);

        header("Location: index.php");
        }
?>