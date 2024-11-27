<?php
require 'connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM theloai WHERE ma_tloai = '$id'";
$stmt = $conn->prepare($sql);
$stmt -> execute();
header('location: category.php');
?>
