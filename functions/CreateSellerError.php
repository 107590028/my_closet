<?php  
if (isset($_POST['createSeller'])) {
    if(empty($_POST['description'])) {
        $description = 'NULL';
        }

    else{
        $description = $_POST['description'];
        }

    // INSERT member
    $sql = "INSERT INTO member(Email, Password, User_name, Phone) 
                VALUES('"
                  .$_SESSION['create_member_info']['Email']."', '"
                  .$_SESSION['create_member_info']['Password']."', '"
                  .$_SESSION['create_member_info']['uName']."', '"
                  .$_SESSION['create_member_info']['phone']."')";

    $result = mysqli_query($conn, $sql);

    $sql = "SELECT ID FROM member WHERE Email = '".$_SESSION['create_member_info']['Email']."'";
    $result = mysqli_query($conn, $sql);
    $id = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $id = $id[0]['ID'];    

    $sql = "INSERT INTO seller(SellerID, Description) VALUES('"
           .$id."', '"
           .$description."')";

    $result = mysqli_query($conn, $sql);
    header("Location: index.php");
    }
?>