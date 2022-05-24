<?php include('connect.php'); ?>

<?php
$productError = array("pName" => "", "price" => "", "stock" => "", "description" => "", "img" => "");

if(isset($_POST['add-product-done'])){
    $pName = $_POST['pName'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $description = $_POST['product-description'];

    if(!empty($_POST['pName'])){
        $pName = $_POST['pName'];
        }

    else{
        $productError['pName'] = "請輸入商品名稱";
        }

    if(!empty($_POST['price'])){
        $price = $_POST['price'];
        
        }

    else{
        $productError['price'] = "請輸入商品價格";
        }

    if(!empty($_POST['stock'])){
        $stock = $_POST['stock'];
        }

    else{        
        $productError['stock'] = "請輸入商品數量";
        }

    if(!empty($_POST['product-description'])){
        $description = $_POST['product-description'];
        }

    else{
        $productError['description'] = "請輸入商品描述";
        }

    if(isset($_FILES['file'])){
        if($_FILES['file']['error'] != 0){
            $productError['img'] = "照片檔錯誤";
            }

        else{
            $file = $_FILES['file'];
            $tmp_name = $file['tmp_name'];
            $img_name = time().$file['name'];

            $path = 'images/'.$img_name;
            $_SESSION['path'] = $path;
            move_uploaded_file($tmp_name, $path);
            }        
        }

    if($productError['pName'] == '' &&
       $productError['price'] == '' &&
       $productError['stock'] == '' &&
       $productError['description'] == '' &&
       $productError['img'] == ''){
        $sellerID = $_SESSION['ID'];
        $Launch = date("Y-m-d");

        $sql = "INSERT INTO product(SellerID, ProductName, Description, Price, Image_path, Stock,
               LaunchDate)  VALUES ('"
               .$sellerID."', '"
               .$pName."', '"
               .$description."', '"
               .$price."', '"
               .$_SESSION['path']."', '"
               .$stock."', '"
               .$Launch."')";

        $result = mysqli_query($conn, $sql);
        }
    }
?>