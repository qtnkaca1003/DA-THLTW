<?php
include ("include/connect.php");
// Select bảng thể loại
$sql_theloai="select * from loai";
$tam_theloai = $pdo->query($sql_theloai);
$data_theloai = $tam_theloai->fetchAll();
//Select bản nhà sản xuất
$sql_nsx= "select * from nhasx";
$tam_nsx = $pdo->query($sql_nsx);
$data_nsx = $tam_nsx->fetchAll();

  //var_dump($data_theloai);
  include ("include/header.php");
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
              
              
              <div class="row">
              <?php 
                  foreach ($data_game as $key => $value) {?>
                    
                    <div class="card-body" id="card">
                    
                      <a class="detail" href="sua.php?magame=<?php echo $value['magame'] ?>">
                        <div class="card_game">
                          <div class="img">
                            <img src="../images/PS4/games/<?php echo $value['hinh'];  ?>" alt="" srcset="" width="190" height="190">
                          </div>
                          <p class="name_game text-center"><?php echo $value['tengame'];?></p>
                          <p class=" text-center"><span><?php echo $value['gia']; ?><a href="xoa.php?magame=<?php echo $value['magame'] ?>"" class="add_cart"><i class="fas fa-trash-alt" title="Xoá"></i></a></span></p>
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