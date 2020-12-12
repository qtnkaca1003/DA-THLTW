<?php
error_reporting(E_ERROR);

    include ("include/connect.php");
    include ("include/header.php");
    $maloai = $_GET['maloai'];
    $sql="select * from loai INNER JOIN game ON loai.maloai = game.maloai where loai.maloai='$maloai' ";
    $tam = $pdo->query($sql);
    $data = $tam->fetchAll();
    $sql_sl = "SELECT COUNT(maloai) as sl from game where maloai ='$maloai'";
    

    $tam_sl = $pdo->query($sql_sl);
    $data_sl = $tam_sl->fetch(PDO::FETCH_COLUMN);
    //$data_sl = $tam_sl->fetchAll();
        //var_dump($data_sl);
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
              <p>Thể loại: <?php echo $data[0]['tenloai'] ?>-Số lượng <?php echo $data_sl['sl']; ?>  </p>
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