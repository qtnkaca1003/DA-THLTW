<?php
include ("include/connect.php");
$magame = $_GET['magame'];
var_dump($magame);
$sql ="delete from game where magame='$magame' ";
$stm = $pdo->prepare($sql);
$stm->execute([$magame]);
header('location:admin.php');

?>