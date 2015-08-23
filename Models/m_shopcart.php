<?php
	require_once('Models/database.php');
	class M_shopcart extends Database
	{
		function addItem($id,$size,$quatity,$price){
			if (isset($_SESSION['shopcart'][$id])) {
				$_SESSION['shopcart'][$id][$size] = array('quatity'=>$quatity,'price'=>$price);
			}
			else
				$_SESSION['shopcart'][$id][$size] = array('quatity'=>$quatity,'price'=>$price);
		}

		function delItem($id,$size){
			$product = $this->detail();
			if ($product) {
				unset($product[$id][$size]);
				if (empty($product[$id])) {
					unset($product[$id]);
				}
				$_SESSION['shopcart'] = $product;
			}
			else
				unset($_SESSION['shopcart']);
		}

		function updateItem($id,$quatity,$size){
			$product = $this->detail();
			if ($product) {
				$product[$id][$size]['quatity'] = $quatity;
				$_SESSION['shopcart'] = $product;
			}
		}

		function delShopcart(){
			unset($_SESSION['shopcart']);
			unset($_SESSION['detail']);
			unset($_SESSION['temp']);
		}

		function detail(){
			if (isset($_SESSION['shopcart']))
				return $_SESSION['shopcart'];
			return false;
		}

		function checkout($arr){
			$sql = 'INSERT INTO tb_shopcart VALUES (?,?,?,?)';
			$this->setQuery($sql);
			$this->execute($arr);
		}

		function checkoutdetail($arr,$id){
			foreach ($arr as $key => $value) {
				$product_id = $key;
				foreach ($value as $k => $v) {
					$detail = array($id,$key,$v{'quatity'},$v{'price'},$k);
					$sql = 'INSERT INTO tb_detail_shopcart VALUES (?,?,?,?,?)';
					$this->setQuery($sql);
					$this->execute($detail);
				}
			}
		}

		function sumQuatity(){
			$sum = 0;
			if (isset($_SESSION['shopcart'])) {
				foreach ($_SESSION['shopcart'] as $key => $value) {
					foreach ($value as $k => $v) {
						$sum+= $v{'quatity'};
					}
				}
			}
			return $sum;
		}

		function sumPrice(){
			$sum = 0;
			if (isset($_SESSION['shopcart'])) {
				foreach ($_SESSION['shopcart'] as $key => $value) {
					foreach ($value as $k => $v) {
						$sum+= $v{'quatity'} * $v{'price'};
					}
				}
			}
			return $sum;
		}
	}
?>