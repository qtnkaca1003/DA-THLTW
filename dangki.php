<?php
include ("include/connect.php");
  
  

  include ("include/header.php");
?>
<?php
    if (isset($_POST["submit"])) {
        //lay thong tin tu from
        $username= $_POST["username"];
        $password=$_POST["password"];
        $name = $_POST["name"];
        $email=$_POST["email"];
        $password= md5($password);
        $tk=[
            $username,
            $password,
            $name,
            $email,

        ];
        //textfied k dc bo trong
        if ($username==""|| $password==""||$name==""|| $email=="")
         {
            //echo "Vui long nhap du thong tin";
            echo '<script language="javascript">';
            echo 'alert("Vui long dien day du thong tin")';
            echo '</script>';


        }
        else{
            $sql = "INSERT INTO tkkhachhang(username, matkhau, hoten, email) VALUES('$username', '$password', '$name', '$email')";
            //thuc tinh cau $sql vs bien connec lay tu file connection.php
            $stm = $pdo->prepare($sql);
            $stm->execute($tk);
            //echo "Chuc mung dang ki thanh cong";
            echo '<script language="javascript">';
            echo 'alert("Chuc mung dang ki thanh cong")';
            echo '</script>';
        }
    }


?>

<link rel="stylesheet" href="style/index.css">
<link rel="stylesheet" href="style/top_menu.css">
<link rel="stylesheet" href="style/dangki.css">
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
          
        <div class="col-md-12 ">
          <div class="warp shadow-lg text-center ">
            <h2>Đăng kí
            </h2>
              <form action="dangki.php" method="POST" enctype="application/x-www-form-urlencoded">
                <input type="text" placeholder="Nhập họ tên của bạn..." name="name">
                <input type="text" placeholder="Nhập tên tài khoản..." name="username">
                <input type="gmail" placeholder="Nhập gmail của bạn..." name="email">
                <input type="password" placeholder="Nhập mật khẩu..." name="password">
                <input type="password" placeholder="Nhập lại mật khẩu..." name="passwordConfirm">
                <input type="submit" name="submit" value="Đăng kí tài khoản">
                <a href="/login">Đã có tài khoản ? Đăng nhập ngay !</a>
              </form>
          </div> 
        </div>
      </div>



          </div>
        </div>
      </div>
   <?php
   include("include/bottom.php")
   ?>