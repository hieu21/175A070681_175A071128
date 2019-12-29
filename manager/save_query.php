
<?php
	require_once 'conn.php';
	$maGV = $_POST['maGV'];
	$hotenGV = $_POST['hotenGV'];
	$ngaySinh = $_POST['ngaySinh'];
	$diaChi = $_POST['diaChi'];
	$conn->query("INSERT INTO `giangvien` VALUES('maGV', '$hotenGV', '$ngaySinh', '$diaChi')");
?>