<?php 
include('functions/connect.php');
include('templates/header.php');

 ?>

<?php 
$id = $_REQUEST['id'];

$sql = "SELECT * FROM product WHERE ProductID = '".$id."'";
$result = mysqli_query($conn, $sql);
$product_info = mysqli_fetch_all($result);

$pName = $product_info[0][2];
$description = $product_info[0][3];
$price = $product_info[0][4];
$path = $product_info[0][5];
$stock = $product_info[0][6];
include('functions/editProductError.php');
 ?>
<style>
    a:hover{text-decoration:none;color:#000000;}
    a:visited{text-decoration:none;color:#000000;}
    a:link{color:#000000;}
</style>
<script type="text/javascript">
    function preview() {
        frame.src=URL.createObjectURL(event.target.files[0]);
        }
</script>

<form method="post" enctype="multipart/form-data">
    <div class="upper-add-product-pad">
        <a class = "cancel-text" href="STMS.php">X</a>
        <div class="add-product-text-0">編輯商品</div>

        <label class="error-text" style="top: 50px; left:310px;">
            <?php echo $EditProductError['img']; ?>
        </label>

        <div class="img-block" style="top: 15px; left: 310px;">
            <img class = "img-block" src = "<?php echo $path; ?>" id = "frame">
                <label class="add-img-plus" style="top:-190px; left: 20px; opacity: 0;">
                    <input type = "file" name = "file" onchange = "preview()" style = "opacity: 0;">
                </label>
            </img>
        </div>        

        <input class="add-product-text-input" type="text" name = "pName" placeholder = "商品名稱" style="top: -130px;" value="<?php echo $pName; ?>"></input>
        <label class="error-text" style="top: 120px; left:40px;">
            <?php echo $EditProductError['pName']; ?>
        </label>

        <input class="add-product-text-input" type="text" name = "price" placeholder = "價格" style="top:-100px;" value="<?php echo $price; ?>"></input>
        <label class="error-text" style="top: 180px; left:40px;">
            <?php echo $EditProductError['price']; ?>
        </label>

        <input class="add-product-text-input" type="text" name = "stock" placeholder = "目前庫存" style="top:-70px;" value="<?php echo $stock; ?>"></input>
        <label class="error-text" style="top: 235px; left:40px;">
            <?php echo $EditProductError['stock']; ?>
        </label>

        <input class="add-pproduct-description" placeholder="商品描述" style="top:-50px;" name="product-description" value="<?php echo $description; ?>"><?php echo $EditProductError['description']; ?></input>
            <?php echo $EditProductError['description']; ?>
        
        <div class="lower-add-product-btn" style="top: -15px;">
            <input class="upper-add-product-btn add-product-text-1" name="edit-product-done" type = "submit" value = "編輯完成"></input>
        </div>
    </div>
</form>