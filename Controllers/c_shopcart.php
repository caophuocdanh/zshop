<?php
	require_once('Controllers/template.php');
	require_once('Models/m_shopcart.php');
	require_once('Models/m_product.php');
	require_once('Models/m_customer.php');
	class C_shopcart
	{
		private $_mshopcart;
		function __construct(){
			$this->_mshopcart = new M_shopcart();
			$this->_mproduct = new M_product();
			$this->_mcustomer = new M_customer();
			$this->_template = new Template();
		}

		function detail(){
			//session_destroy();
			$detail = $this->_mshopcart->detail();
			if ($detail) {
				foreach ($detail as $key => $value) {
					$id[] = $key;
				}
				$id = implode(',', $id);

				$products = $this->_mproduct->productinshopcart($id);
				$product = array();
				foreach ($products as $key => $value) {
					$products[$key]['size'] = $detail[$value['id']];
				}
				//$this->_template->assign('detail',$products);
				$_SESSION['detail'] = $products;
			}else{
				unset($_SESSION['detail']);
			}

			$this->_template->assign('title','Giỏ hàng');
			$this->_template->display('page/shopcart.tpl');
		}

		function addItem(){
			$size = $_REQUEST['size'];
			$quatity = $_REQUEST['quatity'];
			$info = explode('_', $_REQUEST['info']);
			$id = $info[0];
			$price = $info[1];

			$this->_mshopcart->addItem($id,$size,$quatity,$price);
			echo json_encode(
				array('id'=>$id,'size'=>$size,'quatity'=>$this->_mshopcart->sumQuatity(),'price'=>$this->_mshopcart->sumPrice())
			);
		}

		function delItem(){
			$name = $_POST['name'];
			$code = $_POST['code'];

			$id = explode('_', $name);
			$id = $id[1] / $code;
			$size=explode('_', $name);
			$size = $size[2];

			$this->_mshopcart->delItem($id,$size);

			echo json_encode(array());
		}

		function updateItem(){
			$name = $_POST['name'];
			$code = $_POST['code'];
			$quatity = $_POST['quatity'];
			$id=explode('_', $name);
			$id = $id[1] / $code;
			$size=explode('_', $name);
			$size = $size[2];

			if (is_numeric($quatity)) {
				if ($quatity > 0) {
					$this->_mshopcart->updateItem($id,$quatity,$size);
				}
			}
			echo json_encode(array());
		}

		function delShopcart(){
			$this->_mshopcart->delShopcart();
			echo json_encode(array());
		}

		function payment(){
			if (!isset($_SESSION['customer']) || !$_SESSION['shopcart']) {
				header('location: '.PATH.'/gio-hang.html');
			}
			$this->_template->assign('title','Đặt hàng');
			$this->_template->display('page/payment.tpl');
		}

		function checkpayment(){
			if ($_SESSION['shopcart'] && $_SESSION['temp'] && $_SESSION['customer'])
				$status = true;
			else
				$status = false;
			echo json_encode(array('status'=>$status));
		}

		function success(){
			if (!isset($_SESSION['shopcart']))
				header('location: '.PATH);
			$shopcart = $_SESSION['shopcart'];
			$info = $_SESSION['temp'];
			$customer = $_SESSION['customer'];
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$id = 'HD_'.date('YmdHis');
			$customer_id = $_SESSION['customer']['customer_id'];
			$sumPrice = $this->_mshopcart->sumPrice();
			$date = date('Y-m-d H:i:s');

			$this->_mcustomer->update(array($info{'name'},$info{'sex'},$info{'address'},$info{'phone'},$customer['email']));
			$this->_mshopcart->checkout(array($id,$customer_id,$sumPrice,$date));
			$this->_mshopcart->checkoutdetail($shopcart,$id);

			$this->_template->assign('sumQuatity',0);
			$this->_template->assign('title','Thông tin đơn hàng');
			$this->_template->display('page/checkout.tpl');
		}

		function checkout(){
			$sendmail = $this->sendmail($_SESSION['customer']['email'],$_SESSION['customer']['customer_name']);
			$email = $_SESSION['customer']['email'];
			$this->_mshopcart->delShopcart();
			echo json_encode(array('sendmail'=>$sendmail,'email'=>$email));
		}

		function temp(){
			//session_destroy();
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$sex = $_POST['sex'];
			$address = $_POST['address'];
			$consignee = $_POST['consignee'];
			if ($consignee == 0) {
				$name1 = $name;
				$phone1 = $phone;
				$address1 = $address;
			}
			else{
				$name1 = $_POST['name1'];
				$phone1 = $_POST['phone1'];
				$address1 = $_POST['address1'];
			}
			$note = $_POST['note'];

			$_SESSION['temp'] = array(
				'name'=>$name,
				'phone'=>$phone,
				'sex'=>$sex,
				'address'=>$address,
				'consignee'=>$consignee,
				'note'=>$note,
				'name1'=>$name1,
				'phone1'=>$phone1,
				'address1'=>$address1,
			);
		}

		function mailbody(){
			$shopcart = $_SESSION['detail'];
			$customer = $_SESSION['customer'];
			$i = 1;
			$data='<table style="width: 60%"><tbody>
			<tr><th>Họ Tên:</th><td>'.$customer{"customer_name"}.'</td></tr>
			<tr><th>SĐT: </th><td>'.$customer{"phone"}.'</td></tr>
			<tr><th>Địa Chỉ:</th><td>'.$customer{"address"}.'</td></tr>
			</tbody></table>';

			$data.='<table border="1" cellpadding="10" cellspacing="0" style="width:100%;margin-top: 20px"><caption style="font-size:40px;">THÔNG TIN GIỎ HÀNG</caption>
			<thead style="background: rgba(0,0,0,0.2);padding:5px"><tr>
			<th style="width:10%">#</th>
			<th style="width:40%">Sản phẩm</th>
			<th style="width:10%">Size</th>
			<th style="width:20%">Số Lượng</th>
			<th style="width:20%">Đơn Giá</th>
			</tr></thead><tbody>';

			foreach($shopcart as $key => $value) {
				foreach($value{'size'} as $k => $v) {
					$k===0 ? $size = "Free Size" : $size = $k;
					$data.='<tr><th>'.$i++.'</th>';
					$data.='<th>'.$value{'product_name'}.'</th>';
					$data.='<th>'.$size.'</th>';
					$data.='<th>'.$v{'quatity'}.'</th>';
					$data.='<th>'.number_format(($v{'price'}*$v{'quatity'}), 0, ',', '.').' VNĐ</th></tr>';
				}
			}
			$data.='</tbody><tfoot><tr><td colspan="5" style="text-align: right; font-size: 20px;">Thành tiền: '.number_format($this->_mshopcart->sumPrice(), 0, ',', '.').' VNĐ</td></tr></tfoot></table>';
			return $data;
		}

		function sendmail($email,$name){
			require_once('Library/PHPMailer/PHPMailerAutoload.php');
			$phpMailer=new PHPMailer();
			$phpMailer->charSet = "UTF-8";
			$phpMailer->isSMTP();
			$phpMailer->SMTPDebug = 0;
			$phpMailer->Host = SMTPHOST;
			$phpMailer->Port = PORT;
			$phpMailer->SMTPSecure = SMTPSECURE;
			$phpMailer->SMTPAuth = true;
			$phpMailer->Username = EMAIL;
			$phpMailer->Password = PASSWORD;
			$phpMailer->setFrom(EMAIL,'zShop.vn');
			$phpMailer->addAddress($email,$name);
			$phpMailer->Subject = SUBJECT;
			$phpMailer->msgHTML($this->mailbody());
			return $phpMailer->send();

			// echo $this->mailbody();
		}
	}
?>