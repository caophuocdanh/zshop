<?php
	require_once('../Models/database.php');
	class M_customer extends Database
	{
		function login($email){
			$sql = "select * from tb_customer where email like ?";
			$this->setQuery($sql);
			return $this->loadRow(array($email));
		}

		function register($arrayinfo){
			$sql = "insert into tb_customer values (null,?,?,0,?,?,?,?)";
			$this->setQuery($sql);
			return $this->execute($arrayinfo);
		}

		function update($arrayinfo){
			$sql = "UPDATE tb_customer SET customer_name=?,sex=?,address=?,phone=? WHERE email like ?";
			$this->setQuery($sql);
			return $this->execute($arrayinfo);
		}

		function logout(){
			unset($_SESSION['customer']);
		}

		function info($email){
			$sql = "select * from tb_customer where email = ?";
			$this->setQuery($sql);
			return $this->loadRow(array($email));
		}
	}
?>