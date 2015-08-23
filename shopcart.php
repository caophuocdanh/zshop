<?php
	require_once('Controllers/c_shopcart.php');
	$_cshopcart = new C_shopcart();

	if (isset($_REQUEST['request'])) {
		switch ($_REQUEST['request']) {
			case "detail":
				$_cshopcart->detail();
				break;
			case "add":
				$_cshopcart->addItem();
				break;
			case "delete":
				$_cshopcart->delItem();
				break;
			case "update":
				$_cshopcart->updateItem();
				break;
			case "payment":
				$_cshopcart->payment();
				break;
			case "temp":
				$_cshopcart->temp();
				break;
			case "clear":
				$_cshopcart->delShopcart();
				break;
			case "checkout":
				$_cshopcart->checkout();
				break;
			case "checkpayment":
				$_cshopcart->checkpayment();
				break;
			case "sendmail":
				$_cshopcart->sendmail();
				break;
			case "success":
				$_cshopcart->success();
				break;
		}
	}
?>