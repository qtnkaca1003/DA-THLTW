<?php
        session_start(); 
?>
<?php

include ("include/connect.php");
  //var_dump($data_loai);
  include ("include/header.php");
?>
<?php

include ("include/connect.php");
    
if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $password = md5($password);
    $para=[$username];
    if ($username == "" || $password =="") {
       
        echo '<script language="javascript">';
            echo 'alert("username hoặc password bạn không được để trống!")';
            echo '</script>';
    };
        $sql = "select * from tkkhachhang where username = '$username'";
        $tam = $pdo->prepare($sql);
        $tam ->execute($para);
        $data = $tam->fetch(PDO::FETCH_ASSOC);
        if ($username != $data['username'] || $password !=$data['matkhau'] ) {
            echo '<script language="javascript">';
            echo 'alert("username hoặc password khong dung!")';
            echo '</script>';
            //echo "Đăng nhập thất bại <a href='index.php'>Về trang chủ</a>";
        }
        else{
            $_SESSION['username'] = $data["username"];
            $_SESSION["email"] = $data["email"];
            echo '<script language="javascript">'; 
            echo 'alert("Đăng Nhập Thành Công !!! ")'; 
            echo '</script>';
            //echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='#'>Về trang chủ</a>";
            
        }
        }

?>
<link rel="stylesheet" href="style/index.css">
<link rel="stylesheet" href="style/top_menu.css">
</head>
<body>
<?php
      include ("include/top_menu.php")
    ?>
    <br>
    <br>
      <hr>
      <div class="container">
        <div class="row">
          <div class="content"">
            <div class="title">
              <h2>Game Ps4</h2>
              <img src="images/PS4/banner/Banner-Desktop.webp" width="855" alt="" srcset="">
              <hr>
              <p>Sắp  xếp</p>
              <hr>
              <div class="row">
              <?php 
               
                
                  foreach ($data_game as $key => $value) {?>
                    
                    <div class="card-body" id="card">
                    
                      <a class="detail" href="product.php?magame=<?php echo $value['magame'] ?>">
                        <div class="card_game">
                          <div class="img">
                            <img src="images/PS4/games/<?php echo $value['hinh'];  ?>" alt="" srcset="" width="190" height="190">
                          </div>
                          <p class="name_game text-center"><?php echo $value['tengame'];?></p>
                          <p class=" text-center"><span><?php echo $value['gia']; ?><a href="#" class="add_cart"><i class="fas fa-cart-plus" title="Thêm vào giỏ hàng" ></i></a></span></p>
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