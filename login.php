<?php 
include ("include/connect.php");
    session_start();
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
            echo "Đăng nhập thất bại <a href='index.php'>Về trang chủ</a>";
        }
        else{
            $_SESSION['username'] = $data["username"];
            $_SESSION["email"] = $data["email"];
            echo '<script language="javascript">'; 
            echo 'alert("Đăng Nhập Thành Công !!! ")'; 
            echo '</script>';
            echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='#'>Về trang chủ</a>";
            header('Location: index.php');
        }
        }
