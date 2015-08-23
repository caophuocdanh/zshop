<?php
	// Cấu hình site
	$server = $_SERVER['SERVER_NAME'];
	define('PATH',"http://$server/zshop");
	define('ADMINPATH',"http://$server/zshop/Admin");
	define('DESCRIPTION',"30 Ngày Miễn Phí Trả Hàng ✔ Giao Hàng Miễn Phí ✔ Thanh Toán Khi Nhận Hàng ✔");
	define('TITLE','ZSHOP.VN - WEBSITE MUA SẮM THỜI TRANG TRỰC TUYẾN HÀNG ĐẦU VIỆT NAM');

	// Cấu hình kết nối CSDL
	define("host", "localhost");
	define("database", "db_shop");
	define("user", "root");
	define("pass", "");
	// End - Cấu hình kết nối CSDL

	// Cấu hình Template
	$template_dir = "Views/templates/";
	$compile_dir = "Views/templates_c/";
	$config_dir = "Views/configs/";
	$cache_dir = "Views/cache/";
	$iscache = false;
	$isdebug = false;
	$lifetime = 120;
	// End - Cấu hình Template

	// Cấu hình thông tin gửi mail
	define('EMAIL','danhcptube@gmail.com');
	define('PASSWORD','0918273645');
	define('SUBJECT','Thông Tin Đơn Hàng - zShop.vn');
	define('SMTPHOST','smtp.gmail.com');
	define('PORT','465');
	define('SMTPSECURE','ssl');
	// End - Cấu hình thông tin gửi mail


?>