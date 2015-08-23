<?php
	include_once('../Admin/Controllers/template.php');
	$tpl = new Template();

	if (isset($_SESSION['customer']) && $_SESSION['customer']['level_id'] == 0) {
		$tpl->display('admin/page/index.tpl');
	}
	else{
		header('location: '.PATH.'/quan-ly/dang-nhap.html');
	}
?>