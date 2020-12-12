<?php
error_reporting(E_ERROR);

    include ("include/connect.php");
    include ("include/header.php");
    if(isset($_GET["submit"]))
    $maloai = $_GET['timkiem'];
    $maloai = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $maloai);
    if($maloai ==''){
      echo '<script language="javascript">';
            echo 'alert("Không được nhập kí tự đặt biệt hay bỏ trống")';
            echo '</script>';
            echo '<script type="text/javascript">
           window.location = "http://localhost/DoAn_TH-TLWeb/index.php"
      </script>';
    }
    else{
      $sql="select * from game  where tengame like'%$maloai%' ";
    $tam = $pdo->query($sql);
    $data = $tam->fetchAll();
    }
    
        //var_dump($maloai);
?>
<link rel="stylesheet" href="style/index.css">
<link rel="stylesheet" href="style/top_menu.css">
</head>
<body>
<?php
      include ("include/top_menu.php")
    ?>
      <hr>
      <div class="container">
        <div class="row">
          <div class="content"">
            <div class="title">
                <br>
                <br>
              <h2>Game Ps4</h2>
              <img src="images/PS4/banner/Banner-Desktop.webp" width="855" alt="" srcset="">
              <hr>
              
              <p class="all"><a href="index.php">Tất cả</a> </p>
              <hr>
              <div class="row">
              <?php 
                  foreach ($data as $key => $value) {?>
                    <div class="card-body">
                        <a class="detail" href="product.php?magame=<?php echo $value['magame'] ?>">
                        <div class="card_game">
                          <div class="img">
                            <img src="images/PS4/games/<?php echo $value['hinh'];  ?>" alt="" srcset="" width="190" height="190">
                          </div>
                          <p class="name_game text-center"><?php echo $value['tengame'];?></p>
                          <p class="text-center"><span><?php echo $value['gia']; ?><a href="#" class="add_cart"><i class="fas fa-cart-plus" title="Thêm vào giỏ hàng" ></i></a></span></p>
                        </div>
                      </a>
                    </div>
                  <?php } ?>
                
            </div>
            </div>
          </div>
            <?php
             include("include/right.php") ?>
        </div>
      </div>
   <?php
   include("include/bottom.php")
   ?>