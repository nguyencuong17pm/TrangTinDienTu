<?php
	include_once "thuvien.php";
	include_once "ketnoi.php";
	$id = $_GET['id'];
	$sql = "UPDATE tbl_binhluan SET KiemDuyet = 1 - KiemDuyet WHERE ID = $id";
	$kq = mysqli_query($link, $sql);
	if($kq)
		header("Location: binhluan.php");
	else
		ThongBaoLoi(mysqli_error($link));
?>