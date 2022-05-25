<?php 
  session_start(); 

  if(empty($_SESSION['identity'])){
      $_SESSION['identity'] = 'guest';
  }

  if(isset($_POST['logout'])){
      session_destroy();
      header('Location: index.php');
  }
 
  $sql = "SELECT * FROM product WHERE 1";
  $result = mysqli_query($conn, $sql);
  $products = mysqli_fetch_all($result);
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="styleSheets/product.css">
    <link href="images/C&Z128.ico" rel="shortcut icon">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C&Z</title>
  </head>
  <body>
    <?php if($_SESSION['identity'] == 'guest'){?>
      <div>
        <header class="title_bar">
            <div class="top">
              <a class="logo_MyCloset" style="color:black;text-decoration:none" href="index.php">C&Z</a><!--跳轉頁面 首頁-->
                <div class="icon">
                    <a class="LOGIN_TEXT" style="color:white;text-decoration:none" href="MSDS.php">登入</a> <!--跳轉頁面 登入-->
                </div>  
            </div>
            
          <nav class="option_box">
            <div class="table">
              <div><a href="index.php" style="color:#edf2c5;text-decoration:none" class="Home">首頁</a></div>
              <div><a href="index.php" style="color:#edf2c5;text-decoration:none" class="Home">客服中心</a></div>
            </div>
      
            <div class="wrap">
              <div class="search">
                <input class="search-bar" type="text" name="search" id="search" placeholder="搜尋">
                <button class="search-btn"><img src="https://cdn.iconscout.com/icon/free/png-256/search-1399-475061.png"style="display:block;color:#edf2c5" width="20px" height="20px" ></button>
                <!--跳轉頁面 搜尋結果-->
              </div>
            </div>
          </nav>
        </header>

        <div class="container">
          <div class="row">
            <?php foreach ($products as $product) {?>
              <form class="col-md-3 mt-3" method="post">
                <div class="card">
                    <img class="rounded d-block" src = "<?php echo $product[5]; ?>">

                    <div class="card-body text-center">
                      <p class="card-text" style="font-size:14px"><?php echo $product[2]; ?></p>
                    </div>
                    <div class="card-footer text-center text-dark">
                      <?php echo "$"?><?php echo $product[4]; ?>
                    </div>
                </div>
              </form>
            <?php  } ?>  
          </div>
        </div>
        
      </div>
        
        
    <?php }elseif($_SESSION['identity'] == 'Customer'){ ?>
      <div>
        <header>
          <div class="top">
            <a class="logo_MyCloset" style="color:black;text-decoration:none" href="index.php">C&Z</a>
              <div class="icon">
              <form method = "post">
                <input type = "submit" style="color:white;text-decoration:none" class = "Logout_TEXT" name = "logout" value = "登出">
              </form>
              </div>
          </div>
            
          <nav class="option_box">
            <div class="table">
              <div><a href="index.php" style="color:#edf2c5;text-decoration:none" class="Home">首頁</a></div>
              <div><a href="MSMS.php" style="color:#edf2c5;text-decoration:none" class="Home">我的檔案</a></div>
              <div><a href="index.php" style="color:#edf2c5;text-decoration:none" class="Home">客服中心</a></div>
            </div>
      
            <div class="wrap">
              <!--跳轉頁面 購物車-->
              <div class="cart"><a href="#"><img src="images\cart.png"style="display:block"width="25px" height="25px" ></a></div>
              <div class="search">
                <input class="search-bar" type="text" name="search" id="search" placeholder="搜尋">
                <button class="search-btn"><img src="https://cdn.iconscout.com/icon/free/png-256/search-1399-475061.png"style="display:block;color:#edf2c5" width="20px" height="20px" ></button>
                <!--跳轉頁面 搜尋結果-->
              </div>
            </div>
          </nav>
        </header>

        <div class="container">
          <div class="row">
            <?php foreach ($products as $product) {?>
              <form class="col-md-3 mt-3" method="post">
                <div class="card">
                    <img class="rounded d-block" src = "<?php echo $product[5]; ?>">

                    <div class="card-body text-center">
                      <p class="card-text" style="font-size:14px"><?php echo $product[2]; ?></p>
                    </div>
                    <div class="card-footer text-center text-dark">
                      <?php echo "$"?><?php echo $product[4]; ?>
                      <button type="button" class="btn btn-outline-warning btn-green">加入購物車</button>
                    </div>
                </div>
              </form>
            <?php  } ?>  
          </div>
        </div>
      </div>
        
    <?php }elseif($_SESSION['identity'] == 'Seller'){ ?>
      <div>

        <header class="title_bar">
          <div class="top">
            <a class="logo_MyCloset" style="color:black;text-decoration:none" href="index.php">C&Z</a><!--跳轉頁面 首頁-->
            <div class="icon">
              <form method = "post">
                <input type = "submit" style="color:white;text-decoration:none" class = "Logout_TEXT" name = "logout" value = "登出">
              </form> <!--跳轉頁面 登出-->
              </div>
          </div>
            
          <nav class="option_box"></nav>
        </header>
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="card seller-card-color seller-card-padding">
                <div class="card-body text-center">
                  <h5 class="card-title" style="font-size:35px;font-family:Microsoft JhengHei;">我的商品</h5>
                  <a href="STMS.php" class="btn btn btn-outline-dark mt-5">查看</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card seller-card-color seller-card-padding">
                <div class="card-body text-center">
                  <h5 class="card-title" style="font-size:35px;font-family:Microsoft JhengHei;">商家檔案</h5>
                  <a href="SEMS.php" class="btn btn btn-outline-dark mt-5">查看</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    <footer class="text-center text-lg-start bg-light text-muted mt-3 ">
        <div class="text-center p-4" style="background-color: #000000;color:#edf2c5">
        © 2022 Copyright C&Z / Design by Terra
      </div>
    </footer>
  </body>
  
</html>