<?php
	require_once('Controllers/c_customer.php');
	$_ccustomer = new C_customer();

	if (isset($_REQUEST['request'])) {
		switch ($_REQUEST['request']) {
			case 'loginindex':
				$_ccustomer->login();
				break;
			case 'checklogin':
				$_ccustomer->checklogin();
				break;
			case 'registerindex':
				$_ccustomer->register();
				break;
			case 'login':
				$_ccustomer->handlelogin();
				break;
			case 'register':
				$_ccustomer->handleregister();
				break;
			case 'logout':
				$_ccustomer->logout();
				break;
			case 'info':
				$_ccustomer->info();
				break;
		}
	}
?>