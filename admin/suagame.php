<?php 
include ("include/connect.php");
//$pdo=new PDO("mysql:host=localhost;dbname=game", "root", "");
//$pdo->query("set names utf8");
if(isset($_POST["submit"]))
    echo("ok");
    //$target_dir    = "image/";
    $magame=$_POST['magame'];
    $tengame=$_POST['tengame'];
    $mota=$_POST['mota'];
    $gia=$_POST['gia'];
    //$hinh=$_FILES['hinh'];
    $hinh1=$_FILES["hinh"]["name"];

    $maloai=$_POST['maloai'];
    $mansx=$_POST['mansx'];
    $hemay=$_POST['hemay'];
    $game=[
        $magame,
        $tengame,
        $mota,
        $gia,
        $hinh1,
        $mansx,
        $maloai,
        $hemay,
    ];
    if ($hinh1 !=''){
        move_uploaded_file($_FILES['hinh']['tmp_name'], "../images/PS4/games/$hinh1");
    }
	//$sql="insert into game(magame, tengame, mota, gia, hinh, mansx, theloai)
	//values(?, ?, ?, ?, ?, ?, ?)";
    //$stm= $pdo->prepare($sql);
    //$stm->execute($game);
    var_dump($game);
    //var_dump($target_file);
  
            try {
                /* $sql = "INSERT INTO game (magame, tengame, mota, gia, hinh, mansx, maloai, hemay) 
                VALUES (?,?,?,?,?,?,?,?)"; */
                $sql = "UPDATE game SET tengame='$tengame',mota='$mota',gia='$gia', hinh='$hinh1', mansx='$mansx', maloai ='$maloai', hemay='$hemay'  WHERE magame= '$magame'";
		        $stm = $pdo->prepare($sql);
                $stm->execute($game);
                
                header('location:admin.php');

		        //echo "Thêm thành công";
            } catch (PDOException $err) {
                echo $err;
		        echo "Thêm thất bại";
            }
?>

