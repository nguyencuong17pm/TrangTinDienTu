<?php
	session_start();
	$link = mysqli_connect("127.0.0.1", "root", "vertrigo", "trangtin1");
	if($link)
		mysqli_set_charset($link, "utf8");
	else
		die("Không thể kết nối đến server!");
?>