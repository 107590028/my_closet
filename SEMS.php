<?php 
include('templates/header.php');
include('functions/updateMemberError.php');

$sql = "SELECT * FROM member WHERE ID = '".$_SESSION['ID']."'";
$result = mysqli_query($conn, $sql);
$info = mysqli_fetch_all($result, MYSQLI_ASSOC);

$uName = $info[0]['User_name'];
$email = $info[0]['Email'];
$password = $info[0]['Password'];
$phone = $info[0]['Phone'];

$sql = "SELECT Description FROM seller WHERE SellerID = '".$_SESSION['ID']."'";
$result = mysqli_query($conn, $sql);
$info = mysqli_fetch_all($result, MYSQLI_ASSOC);

$description = $info[0]['Description'];
?>

<div class = "lower-info seller-lower-info">
    <div class = "seller-upper-info">
        <div class = "Seller-Info-text" style="top: 40px;">
            <?php echo "使用者名稱"; ?>
        </div>

        <div class="Seller-Info-text" style="top: 40px; left:300px;">
            <?php echo $uName; ?>
        </div>

        <div class = "Seller-Info-text" style="top: 100px;">
            <?php echo "電子信箱"; ?>
        </div>

        <div class = "Seller-Info-text" style="top: 160px;">
            <?php echo "密碼"; ?>
        </div>

        <div class = "Seller-Info-text" style="top: 220px;">
            <?php echo "手機號碼"; ?>
        </div>

        <div class = "Seller-Info-text" style="top: 280px;">
            <?php echo "描述"; ?>
        </div>

    <form method = "post">
        <div class="edit-info-btn lower-edit-seller" style = "top: 100px; left:650px;">
            <?php if(isset($_POST['edit-email-done'])){ ?>
                <div class = "info-text" style="left:-350px;">
                    <?php echo $email; ?>
                </div>

                <div class="error-text" style="left: -350px; top: 40px;">
                    <?php echo $updateError; ?>
                </div>

                <input class="edit-info-btn upper-edit-seller edit-btn-text " type = "submit" name = "edit-email" value="編輯">
            <?php }elseif(isset($_POST['edit-email'])){ ?>
                <input class="edit-info-text-input Seller-Info-text" type="text" name="new-email" style="left:-350px;"></input>

                <input class="edit-info-btn upper-edit-seller edit-btn-text" type = "submit" name = "edit-email-done" value="完成">
            <?php }else{ ?>
                <div class = "Seller-Info-text" style="left:-350px;">
                    <?php echo $email; ?>
                </div>

                <input class="edit-info-btn upper-edit-seller edit-btn-text" type = "submit" name = "edit-email" value="編輯">
            <?php } ?>
        </div>

        <!-- password -->

        <div class="edit-info-btn lower-edit-seller" style = "top: 160px; left:650px;">
            <?php if(isset($_POST['edit-password-done'])){ ?>
                <div class = "Seller-Info-text" style="left:-350px;">
                    <?php echo $password; ?>
                </div>
                <div class="error-text" style="left: -350px; top: 35px;">
                    <?php echo $updateError; ?>
                </div>

                <input class="edit-info-btn upper-edit-seller edit-btn-text" type = "submit" name = "edit-password" value="編輯">
            <?php }elseif(isset($_POST['edit-password'])){ ?>
                <input class="edit-info-text-input info-text" type="text" name="new-password" style="left:-350px;"></input>

                <input class="edit-info-btn upper-edit-seller edit-btn-text" type = "submit" name = "edit-password-done" value="完成">
            <?php }else{ ?>
                <div class = "Seller-Info-text" style="left:-350px;">
                    <?php echo $password; ?>
                </div>

                <input class="edit-info-btn upper-edit-seller edit-btn-text" type = "submit" name = "edit-password" value="編輯">
            <?php } ?>
        </div>

        <!-- phone -->

        <div class="edit-info-btn lower-edit-seller" style = "top: 220px; left:650px;">
            <?php if(isset($_POST['edit-phone-done'])){ ?>
                <div class = "Seller-Info-text" style="left:-350px;">
                    <?php echo $phone; ?>
                </div>

                <div class="error-text" style="left: -350px; top: 35px;">
                    <?php echo $updateError; ?>
                </div>

                <input class="edit-info-btn upper-edit-seller edit-btn-text" type = "submit" name = "edit-phone" value="編輯">
            <?php }elseif(isset($_POST['edit-phone'])){ ?>
                <input class="edit-info-text-input info-text" type="text" name="new-phone" style="left:-350px;"></input>

                <input class="edit-info-btn upper-edit-seller edit-btn-text" type = "submit" name = "edit-phone-done" value = "完成">
            <?php }else{ ?>
                <div class = "Seller-Info-text" style="left:-350px;">
                    <?php echo $phone; ?>
                </div>

                <input class="edit-info-btn upper-edit-seller edit-btn-text" type = "submit" name = "edit-phone" value = "編輯">
            <?php } ?>
        </div>
        
        <!-- description -->

        <div class="edit-info-btn lower-edit-seller" style = "top: 280px; left:650px;">
            <?php if(isset($_POST['edit-desc-done'])){ ?>
                <div class = "Seller-Info-text" style="left:-350px;">
                    <?php echo $description; ?>
                </div>
                <div class="error-text" style="left: -350px; top: 35px;">
                    <?php echo $updateError; ?>
                </div>

                <input class="edit-info-btn upper-edit-seller edit-btn-text" type = "submit" name = "edit-desc" value="編輯">
            <?php }elseif(isset($_POST['edit-desc'])){ ?>
                <textarea class="edit-description" name="new-description" style=" left:-350px;top: -5px;">
                    
                </textarea>

                <input class="edit-info-btn upper-edit-seller edit-btn-text" type = "submit" name = "edit-desc-done" value="完成">
            <?php }else{ ?>
                <div class = "Seller-Info-text" style="left:-350px;">
                    <?php echo $description; ?>
                </div>

                <input class="edit-info-btn upper-edit-seller edit-btn-text" type = "submit" name = "edit-desc" value="編輯">
            <?php } ?>
        </div>
    </form>
</div>