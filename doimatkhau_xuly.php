<?php
	include_once "thuvien.php";
	include_once "ketnoi.php";
?>
<!DOCTYPE html>
<html lang="en">

<?php include_once "header.php"; ?>

<body>
	<div class="container">
		<?php include_once "navbar.php"; ?>
		
		<div class="card mt-3">
			<h5 class="card-header">Đổi mật khẩu</h5>
			<div class="card-body">
				<?php
					$ID = $_SESSION['MaND'];
					$MatKhau = $_POST['MatKhau'];
					$XacNhanMatKhau = $_POST['XacNhanMatKhau'];
					
					if(trim($MatKhau) == "")
						ThongBaoLoi("Mật khẩu không được bỏ trống!");
					elseif(trim($XacNhanMatKhau) == "")
						ThongBaoLoi("Xác nhận mật khẩu không được bỏ trống!");
					elseif($MatKhau != $XacNhanMatKhau)
						ThongBaoLoi("Xác nhận mật khẩu không chính xác!");
					else
					{
						$MatKhau = sha1($MatKhau);
						
						$sql = "UPDATE	`tbl_nguoidung`
								SET		`MatKhau` = '$MatKhau'
								WHERE	`ID` = $ID";
						$kq = mysqli_query($link, $sql);
						
						if($kq)
							ThongBao("Đổi mật khẩu thành công!");
						else
							ThongBaoLoi(mysqli_error($link));
					}
				?>
			</div>
		</div>
		
		<?php include_once "footer.php"; ?>
	</div>
	
	<?php include_once "javascript.php"; ?>
</body>

</html>