<?php 

 ?>

 <script type="text/javascript">
    function preview() {
        frame.src=URL.createObjectURL(event.target.files[0]);
        }
</script>

<form method="post" enctype="multipart/form-data">
    <div class="upper-add-product-pad">
        <input class = "cancel-text" type = "submit" name = "cancel" value = "X"></input>
        <div class="add-product-text-0">新增商品</div>

        <label class="error-text" style="top: 50px; left:310px;">
            <?php echo $productError['img']; ?>
        </label>

        <div class="img-block" style="top: 15px; left: 310px;">
            <img class = "img-block" src = "" id = "frame">
                <label class="add-img-plus" style="top:-190px; left: 20px; opacity: 0;">+
                    <input type = "file" name = "file" onchange = "preview()" style = "opacity: 0;">
                </label>
            </img>
        </div>        

        <input class="add-product-text-input" type="text" name = "pName" placeholder = "商品名稱" style="top: -130px;"></input>
        <label class="error-text" style="top: 120px; left:40px;">
            <?php echo $productError['pName']; ?>
        </label>

        <input class="add-product-text-input" type="text" name = "price" placeholder = "價格" style="top:-100px;"></input>
        <label class="error-text" style="top: 180px; left:40px;">
            <?php echo $productError['price']; ?>
        </label>

        <input class="add-product-text-input" type="text" name = "stock" placeholder = "庫存" style="top:-70px;"></input>
        <label class="error-text" style="top: 235px; left:40px;">
            <?php echo $productError['stock']; ?>
        </label>

        <textarea class="add-pproduct-description" placeholder="商品描述" style="top:-50px;" name="product-description"></textarea>
        <label class="error-text" style="top: 400px; left:40px;">
            <?php echo $productError['price']; ?>
        </label>

        <div class="lower-add-product-btn" style="top: -15px;">
            <input class="upper-add-product-btn add-product-text-1" name="add-product-done" type = "submit" value = "新增完成"></input>
        </div>
    </div>
</form>