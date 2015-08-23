<?php
	require_once('Controllers/c_product.php');
	$_cproduct = new C_product();
	require_once('Controllers/c_category.php');
	$_ccategory = new C_category();

	if (isset($_REQUEST['request'])) {
		switch ($_REQUEST['request']) {
			case 'search':
				$_cproduct->search();
				break;
			default:
				$_cproduct->null();
				break;
		}
	}
	else $_cproduct->index();
?>