<!DOCTYPE html>
<html lang="en">

<?php include_once "header.php"; ?>

<body>
	<div class="container">
		<?php include_once "navbar.php"; ?>
		
		<div class="card mt-3">
			<h5 class="card-header">Đổi mật khẩu</h5>
			<div class="card-body">
				<form action="doimatkhau_xuly.php" method="post">
					<div class="form-group">
						<label for="MatKhau">Mật khẩu mới</label>
						<input type="password" class="form-control" id="MatKhau" name="MatKhau" placeholder="" />
					</div>
					
					<div class="form-group">
						<label for="XacNhanMatKhau">Xác nhận mật khẩu mới</label>
						<input type="password" class="form-control" id="XacNhanMatKhau" name="XacNhanMatKhau" placeholder="" />
					</div>
					
					<button type="submit" class="btn btn-primary"><i class="fal fa-key"></i> Đổi mật khẩu</button>
				</form>
			</div>
		</div>
		
		<?php include_once "footer.php"; ?>
	</div>
	
	<?php include_once "javascript.php"; ?>
</body>

</html>