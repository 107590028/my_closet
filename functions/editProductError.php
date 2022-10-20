<?php 
include('connect.php'); 
?>

<?php
$EditProductError = array("pName" => "", "price" => "", "stock" => "", "description" => "", "img" => "");

if(isset($_POST['edit-product-done'])){
    $_FILES['file'];
    $pName = $_POST['pName'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $description = $_POST['product-description'];

    if(!empty($_POST['pName'])){
        $pName = $_POST['pName'];
        }

    else{
        $EditProductError['pName'] = "請輸入商品名稱";
        }

    if(!empty($_POST['price'])){
        $price = $_POST['price'];
        
        }

    else{
        $EditProductError['price'] = "請輸入商品價格";
        }

    if(!empty($_POST['stock'])){
        $stock = $_POST['stock'];
        }

    else{        
        $EditProductError['stock'] = "請輸入商品數量";
        }

    if(!empty($_POST['product-description'])){
        $description = $_POST['product-description'];
        }

    else{
        $EditProductError['description'] = "請輸入商品描述";
        }

    if(!isset($_FILES['file'])){
        $new_path = $path;
        echo "old";
        }

    else{
            if($_FILES['file']['error'] == 2 || $_FILES['file']['error'] == 1){
                $EditProductError['img'] = "檔案尺寸錯誤";
            }
            else if($_FILES['file']['error'] == 3){
                $EditProductError['img'] = "上傳失敗";
            }
            else if($_FILES['file']['error'] == 4){
                $new_path = $path;
            }
            else{
                $file = $_FILES['file'];
                $tmp_name = $file['tmp_name'];
                $new_path = 'images/'.$file['name'];
                move_uploaded_file($tmp_name, $file['name']);
            }
        }

    if($EditProductError['pName'] == '' &&
       $EditProductError['price'] == '' &&
       $EditProductError['stock'] == '' &&
       $EditProductError['description'] == '' &&
       $EditProductError['img'] == ''){
        $sql = "UPDATE product SET ProductName ='"
               .$pName."', Description = '"
               .$description."', Price = '"
               .$price."', Image_path = '"
               .$new_path."', Stock = '"
               .$stock."' WHERE ProductID = '".$id."'";

        $result = mysqli_query($conn, $sql);
        }
    }
?>