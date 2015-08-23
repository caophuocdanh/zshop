<?php
	require_once('Controllers/c_product.php');
	$_cproduct = new C_product();
	require_once('Controllers/c_category.php');
	$_ccategory = new C_category();


	if (isset($_REQUEST['request'])) {
		switch ($_REQUEST['request']) {
			case 'index':
				$_cproduct->index();
				break;
			case 'product':
				$_cproduct->index();
				break;
			case 'allproduct':
				$_cproduct->allproduct();
				break;
			case 'limitproduct':
				$_cproduct->limitallproduct();
				break;
			case 'newproduct':
				$_cproduct->newproduct();
				break;
			case 'hotproduct':
				$_cproduct->hotproduct();
				break;
			case 'hotdeal':
				$_cproduct->hotdeal();
				break;
			case 'menuproduct':
				$_cproduct->menuproduct();
				break;
			case 'submenuproduct':
				$_cproduct->submenuproduct();
				break;
			case 'detail':
				$_cproduct->detail();
				break;
			case 'search':
				$_cproduct->search();
				break;
			case 'insert':
				$_cproduct->insert();
				break;
			case 'update':
				$_cproduct->update();
				break;			
			case 'delete':
				$_cproduct->delete();
				break;
			default:
				$_cproduct->null();
				break;
		}
	}
	else $_cproduct->index();
?>