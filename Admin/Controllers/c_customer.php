<?php
	require_once('../Controllers/template.php');
	require_once('Models/m_customer.php');
	class C_customer
	{
		private $_mcustomer;
		private $_template;		
		function __construct()
		{
			$this->_template = new Template();
			$this->_mcustomer = new M_customer();
		}

		function login(){
			// if (isset($_SESSION['customer'])) {
			// 	//header('location: '.PATH);
			// 	echo "<script>window.history.back();</script>";
			// }

			$this->_template->assign('title','Đăng Nhập');
			$this->_template->assign('page','login');
			$this->_template->display('admin/page/user.tpl');
		}

		function handlelogin(){
			$email = $_POST['email'];
			$pass = $_POST['password'];
			$result = $this->_mcustomer->login($email);

			if ($result) {
				if ($result{'password'} == md5($pass)) {
					$_SESSION['customer'] = $result;
					//header('location: '.PATH);
					echo json_encode(array('status'=>true,'comment'=>'Chào mừng '.$result{'customer_name'}.' đã quay trở lại.'));
				}
				else
					echo json_encode(array('status'=>false,'comment'=>'Mật khẩu không đúng.'));
			}
			else
				echo json_encode(array('status'=>false,'comment'=>'Tài khoản không tồn tại.'));
		}

		function register(){
			$this->_template->assign('title','Đăng Kí');
			$this->_template->assign('page','register');
			$this->_template->display('page/customer.tpl');
		}

		function handleregister(){
			$email = $_POST['email'];
			$password = md5($_POST['password']);
			$level_id = 0;
			$name = $_POST['name'];
			$sex = $_POST['sex'];
			$address = $_POST['address'];
			$phone = $_POST['phone'];
			if ($result = $this->_mcustomer->register(array($email,$password,$name,$sex,$address,$phone)))
				echo json_encode(array('status'=>true,'comment'=>'Đăng kí tài khoản thành công.'));
			else
				echo json_encode(array('status'=>true,'comment'=>'Tài khoản đã tồn tại.'));
		}

		function logout(){
			$this->_mcustomer->logout();
			if (isset($_SESSION['temp'])) {
				unset($_SESSION['temp']);
			}
		}

		function info(){
			if (isset($_SESSION['customer'])) {
				$email = $_SESSION['customer']['email'];
				if ($this->_mcustomer->info($email)) {
					$data = $this->_mcustomer->info($email);
					print_r($data);
					die();
				}
				else{
					echo "false";
					die();
				}
			}
			else{
				echo header("location: ".PATH."/dang-nhap.html");
			}
		}

		function checklogin(){
			if (isset($_SESSION['customer']))
				echo json_encode(array('status'=>true,'url'=>PATH.'/gio-hang/thanh-toan.html'));
			else
				echo json_encode(array('status'=>false,'url'=>PATH.'/dang-nhap.html'));
		}
	}
?>