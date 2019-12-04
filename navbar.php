<img src="images\a.png" class="img-fluid" alt="Responsive image">
<nav class="navbar navbar-expand-xl navbar-light" style="background-color:#afeeee;">
	<a class="navbar-brand" href="index.php">
		<img src="images/new.png" width="30" height="30" class="d-inline-block align-top" alt="" /> Tin Tức
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="#"><i class="fal fa-eye"></i> Xem nhiều nhất</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#"><i class="fal fa-calendar-alt"></i> Tin mới nhất</a>
			</li>
			<?php if(!isset($_SESSION['MaND'])) { ?>
				<li class="nav-item">
					<a class="nav-link" href="dangnhap.php"><i class="fal fa-sign-in-alt"></i> Đăng nhập</a>
				</li>
			<?php } else { ?>
				<?php if($_SESSION['QuyenHan'] == 1) { ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fal fa-cog"></i> Quản lý
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="baiviet.php"><i class="fal fa-link"></i> Bài viết</a>
							<a class="dropdown-item" href="binhluan.php"><i class="fal fa-link"></i> Bình luận</a>
							<a class="dropdown-item" href="chude.php"><i class="fal fa-link"></i> Chủ đề</a>
							<a class="dropdown-item" href="nguoidung.php"><i class="fal fa-link"></i> Người dùng</a>
						</div>
					</li>
				<?php } ?>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fal fa-user-circle"></i> <?php echo $_SESSION['HoVaTen']; ?>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="baiviet_them.php"><i class="fal fa-link"></i> Đăng bài viết</a>
						<a class="dropdown-item" href="baiviet_nguoidung.php"><i class="fal fa-link"></i> Bài viết của tôi</a>
						<a class="dropdown-item" href="binhluan_cuatoi.php"><i class="fal fa-link"></i> Bình luận của tôi</a>
						<a class="dropdown-item" href="doimatkhau.php"><i class="fal fa-link"></i> Đổi mật khẩu</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="dangxuat.php"><i class="fal fa-sign-out-alt"></i> Đăng xuất</a>
				</li>
			<?php } ?>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Bạn muốn tìm gì?" aria-label="Tìm kiếm" aria-describedby="button-addon2">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fal fa-search"></i> Tìm kiếm</button>
				</div>
			</div>
		</form>
	</div>
</nav>