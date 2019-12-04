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
			<h5 class="card-header">Trang chủ</h5>
			<div class="card-body">
				<ul class="list-unstyled">
					<?php
						$sql = "SELECT b.*, c.TenChuDe, n.HoVaTen
								FROM tbl_baiviet b, tbl_chude c, tbl_nguoidung n
								WHERE b.MaChuDe = c.ID AND b.MaNguoiDung = n.ID AND b.KiemDuyet = 1";
						$danhsach = mysqli_query($link, $sql);
						
						while($dong = mysqli_fetch_array($danhsach))
						{
							echo '<li class="media mb-3">
									<img src="'.LayHinhDauTien($dong['NoiDung']).'" width="120" height="100" class="mr-3" alt="...">
									<div class="media-body">
										<h5 class="mt-0 mb-1"><a href="baiviet_xem.php?id='.$dong['ID'].'">'.$dong['TieuDe'].'</a></h5>
										<p class="small text-muted mb-1">['.$dong['TenChuDe'].'] Đăng bởi '.$dong['HoVaTen'].' vào lúc '.$dong['NgayDang'].', có '.$dong['LuotXem'].' lượt xem.</p>
										<p class="text-justify">'.$dong['TomTat'].'</p>
									</div>
								</li>';
						}
					?>
				</ul>
			</div>
		</div>
		
		<?php include_once "footer.php"; ?>
	</div>
	
	<?php include_once "javascript.php"; ?>
</body>

</html>