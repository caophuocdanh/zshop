<?php
	require_once('Controllers/c_category.php');
	$_ccategory = new C_category();

	if (isset($_REQUEST['request'])) {
		switch ($_REQUEST['request']) {
			case 'index':
				$_ccategory->menu();
				break;
			case 'add':
				$_ccategory->add();
				break;
			case 'delete':
				$_ccategory->delete();
				break;
			case 'update':
				$_ccategory->update();
				break;
		}
	}
?>