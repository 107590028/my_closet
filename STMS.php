<?php 
include('templates/header.php');
include('functions/addProductError.php');

$sql = "SELECT * FROM product WHERE SellerID = '".$_SESSION['ID']."'";
$result = mysqli_query($conn, $sql);
$products = mysqli_fetch_all($result);
?>

<body>
<?php if(isset($_POST['add-product'])){ 

    include("addProduct.php");

    }elseif(isset($_POST['add-product-done']) && 
            $productError['pName'] != '' &&
            $productError['price'] != '' &&
            $productError['stock'] != '' &&
            $productError['description'] != '' &&
            $productError['img'] != ''){
        include("addProduct.php");

    }else{?>

      
    <div class="container ">
        <form class="col-md-3 mt-3 " method = "post">
            <div style="top: 30px;">
                <input class = "btn btn-dark seller-card-color" type = "submit" name = "add-product" value = "+">    
            </div>
        </form>
        <div class="row">
        <?php foreach ($products as $product) {?>
            <form class="col-md-3 mt-3 " method="post">
            <div class="card seller-card-color ">
                <img class="rounded d-block" src = "<?php echo $product[5]; ?>">

                <div class="card-body text-center">
                    <p class="card-text" style="font-size:14px"><?php echo $product[2]; ?></p>
                </div>
                <div class="card-footer text-center text-dark ">
                    <div class="">
                        <a class = "btn btn-dark seller-card-color btn-border-green" href = "editProduct.php?id=<?php echo $product[0]; ?>">
                            編輯
                        </a>
                    </div>
                </div>
            </div>
            </form>
        <?php  } ?>  
        </div>
    </div>        
<?php   } ?>
