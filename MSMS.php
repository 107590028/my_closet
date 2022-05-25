<?php 
include('templates/header.php');
include('functions/updateMemberError.php');

$sql = "SELECT * FROM member WHERE ID = '".$_SESSION['ID']."'";
$result = mysqli_query($conn, $sql);
$info = mysqli_fetch_all($result, MYSQLI_ASSOC);

// print_r($info);
$uName = $info[0]['User_name'];
$email = $info[0]['Email'];
$password = $info[0]['Password'];
$phone = $info[0]['Phone'];

$sql = "SELECT Address FROM customer WHERE CustomerID = '".$_SESSION['ID']."'";
$result = mysqli_query($conn, $sql);
$info = mysqli_fetch_all($result, MYSQLI_ASSOC);

$address = $info[0]['Address'];
?>

<div class = "lower-info  font">
    <div class = "upper-info customer-upper-info">
        <div class = "info-text" style="top: 40px;">
            <?php echo "使用者名稱"; ?>
        </div>

        <div class="info-text" style="top: 40px; left:300px;">
            <?php echo $uName; ?>
        </div>

        <div class = "info-text" style="top: 100px;">
            <?php echo "電子信箱"; ?>
        </div>

        <div class = "info-text" style="top: 160px;">
            <?php echo "密碼"; ?>
        </div>

        <div class = "info-text" style="top: 220px;">
            <?php echo "手機號碼"; ?>
        </div>

        <div class = "info-text" style="top: 280px;">
            <?php echo "宅配地址"; ?>
        </div>

    <form method = "post">
        <div class="edit-info-btn" style = "top: 100px; left:650px;">
            <?php if(isset($_POST['edit-email-done'])){ ?>
                <div class = "info-text" style="left:-350px;">
                    <?php echo $email; ?>
                </div>

                <div class="error-text" style="left: -350px; top: 40px;">
                    <?php echo $updateError; ?>
                </div>

                <input class="edit-info-btn upper-edit-info-btn edit-btn-text" type = "submit" name = "edit-email" value="編輯">
            <?php }elseif(isset($_POST['edit-email'])){ ?>
                <input class="edit-info-text-input info-text" type="text" name="new-email" style="left:-350px;"></input>

                <input class="edit-info-btn upper-edit-info-btn edit-btn-text" type = "submit" name = "edit-email-done" value="完成">
            <?php }else{ ?>
                <div class = "info-text" style="left:-350px;">
                    <?php echo $email; ?>
                </div>

                <input class="edit-info-btn upper-edit-info-btn edit-btn-text" type = "submit" name = "edit-email" value="編輯">
            <?php } ?>
        </div>

        <!-- password -->

        <div class="edit-info-btn font" style = "top: 160px; left:650px;">
            <?php if(isset($_POST['edit-password-done'])){ ?>
                <div class = "info-text" style="left:-350px;">
                    <?php echo $password; ?>
                </div>
                <div class="error-text" style="left: -350px; top: 35px;">
                    <?php echo $updateError; ?>
                </div>

                <input class="edit-info-btn upper-edit-info-btn edit-btn-text" type = "submit" name = "edit-password" value="編輯">
            <?php }elseif(isset($_POST['edit-password'])){ ?>
                <input class="edit-info-text-input info-text" type="text" name="new-password" style="left:-350px;"></input>

                <input class="edit-info-btn upper-edit-info-btn edit-btn-text" type = "submit" name = "edit-password-done" value="完成">
            <?php }else{ ?>
                <div class = "info-text" style="left:-350px;">
                    <?php echo $password; ?>
                </div>

                <input class="edit-info-btn upper-edit-info-btn edit-btn-text" type = "submit" name = "edit-password" value="編輯">
            <?php } ?>
        </div>

        <!-- phone -->

        <div class="edit-info-btn font" style = "top: 220px; left:650px;">
            <?php if(isset($_POST['edit-phone-done'])){ ?>
                <div class = "info-text" style="left:-350px;">
                    <?php echo $phone; ?>
                </div>

                <div class="error-text" style="left: -350px; top: 35px;">
                    <?php echo $updateError; ?>
                </div>

                <input class="edit-info-btn upper-edit-info-btn edit-btn-text" type = "submit" name = "edit-phone" value="編輯">
            <?php }elseif(isset($_POST['edit-phone'])){ ?>
                <input class="edit-info-text-input info-text" type="text" name="new-phone" style="left:-350px;"></input>

                <input class="edit-info-btn upper-edit-info-btn edit-btn-text" type = "submit" name = "edit-phone-done" value = "完成">
            <?php }else{ ?>
                <div class = "info-text" style="left:-350px;">
                    <?php echo $phone; ?>
                </div>

                <input class="edit-info-btn upper-edit-info-btn edit-btn-text" type = "submit" name = "edit-phone" value = "編輯">
            <?php } ?>
        </div>
        
        <!-- address -->

        <div class="edit-info-btn font" style = "top: 280px; left:650px;">
            <?php if(isset($_POST['edit-address-done'])){ ?>
                <div class = "info-text" style="left:-350px;">
                    <?php echo $address; ?>
                </div>

                <div class="error-text" style="left: -350px; top: 35px;">
                    <?php echo $updateError; ?>
                </div>

                <input class="edit-info-btn upper-edit-info-btn edit-btn-text" type = "submit" name = "edit-address" value="編輯">
            <?php }elseif(isset($_POST['edit-address'])){ ?>
                <input class="edit-info-text-input info-text" type="text" name="new-address" style="left:-350px;"></input>

                <input class="edit-info-btn upper-edit-info-btn edit-btn-text" type = "submit" name = "edit-address-done" value = "完成">
            <?php }else{ ?>
                <div class = "info-text" style="left:-350px;">
                    <?php echo $address; ?>
                </div>

                <input class="edit-info-btn upper-edit-info-btn edit-btn-text" type = "submit" name = "edit-address" value = "編輯">
            <?php } ?>
        </div>
    </form>
</div>