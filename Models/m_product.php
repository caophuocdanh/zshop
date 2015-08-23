<?php
	require_once('Models/database.php');
	class M_product extends Database
	{
		private $_query = "select * from tb_product p join tb_brand b on p.brand_id = b.brand_id";

		function allproduct(){
			$sql = "$this->_query order by id desc";
			$this->setQuery($sql);
			return $this->loadAllRow();
		}

		function limitallproduct($start,$end){
			$sql = "$this->_query order by id desc limit $start,$end";
			$this->setQuery($sql);
			return $this->loadAllRow();
		}
		
		function newproduct($menu,$top){
			$sql = "$this->_query where menu_id = ? order by id desc limit $top";
			$this->setQuery($sql);
			return $this->loadAllRow(array($menu));
		}

		function hotproduct($menu,$top){
			$sql = "$this->_query where menu_id = ? order by price desc limit $top";
			$this->setQuery($sql);
			return $this->loadAllRow(array($menu));
		}

		function hotdeal($menu,$top){
			$sql = "$this->_query where menu_id = ? and saleoff > 0 order by saleoff desc limit $top";
			$this->setQuery($sql);
			return $this->loadAllRow(array($menu));
		}

		function productwithcategory($cat,$id){
			$sql = "$this->_query where p.category_id = ? and id != ? order by id desc";
			$this->setQuery($sql);
			return $this->loadAllRow(array($cat,$id));
		}

		function limitproductwithcategory($cat,$id,$start,$end){
			$sql = "$this->_query where p.category_id = ? and id != ? order by id desc limit $start,$end";
			$this->setQuery($sql);
			return $this->loadAllRow(array($cat,$id));
		}

		function randomproductwithcategory($cat,$id,$start,$end){
			$sql = "$this->_query where p.category_id = ? and id != ? order by rand() limit $start,$end";
			$this->setQuery($sql);
			return $this->loadAllRow(array($cat,$id));
		}

		function limitproductwithmenu($menu,$cat,$start,$end){
			$sql = "$this->_query where p.parent_id in (select category_id from tb_category where parent = 0 and category_alias like ? and menu = ?) order by id desc limit $start,$end";
			$this->setQuery($sql);
			//print_r($this->loadAllRow(array($cat,$menu)));
			return $this->loadAllRow(array($cat,$menu));
		}

		function limitproductwithsub($menu,$catid,$start,$end){
			$sql = "$this->_query where p.category_id in (select category_id from tb_category where category_alias like ? and menu = ?) order by id desc limit $start,$end";
			$this->setQuery($sql);
			// print_r($this->loadAllRow(array($catid,$menu)));
			return $this->loadAllRow(array($catid,$menu));
		}

		function detail($id){
			$sql = "$this->_query where id = ?";
			$this->setQuery($sql);
			return $this->loadRow(array($id));
		}

		function size($id){
			$sql = "select * from tb_product_size where product_id = ?";
			$this->setQuery($sql);
			return $this->loadAllRow(array($id));
		}

		function productinshopcart($id){
			$sql = "$this->_query where id in ($id)";
			$this->setQuery($sql);
			return $this->loadAllRow();
		}

		function search($key,$cat,$brand,$from,$to){
			$sql = "$this->_query where product_name like CONCAT('%',?,'%') and category_id = ? and p.brand_id = ? and price > ? and price < ?";
			$this->setQuery($sql);
			return $this->loadAllRow(array($key,$cat,$brand,$from,$to));
		}

		function insert($product_id, $product_name, $product_alias, $description, $image, $price, $saleoff, $brand_id, $menu_id, $parent_id, $category_id){
			$sql = "insert into tb_product values(?,?,?,?,?,?,?,?,?,?,?)";
			$this->setQuery($sql);
			return $this->execute(array($product_id, $product_name, $product_alias, $description, $image, $price, $saleoff, $brand_id, $menu_id, $parent_id, $category_id));
		}
		
		function update($product_id){
			$sql = "update tb_product set product_id=?, product_name=?, product_alias=?, description=?, image=?, price=?, saleoff=?, brand_id=?, menu_id=?, parent_id=?, category_id=? where product_id = ?";
			$this->setQuery($sql);
			return $this->execute(array($product_name, $product_alias, $description, $image, $price, $saleoff, $brand_id, $menu_id, $parent_id, $category_id,$product_id));
		}

		function delete($product_id){
			$sql = "delete from tb_product where product_id = ?";
			$this->setQuery($sql);
			return $this->execute(array($product_id));
		}

		function countAllProduct($menu){
			$sql = "select count(*) as count from tb_product where menu_id = ?";
			$this->setQuery($sql);
			return $this->loadRow(array($menu));
		}

		function countMenuProduct($menu,$parent){
			$sql = "select count(*) as count from tb_product where parent_id = (select category_id from tb_category where menu = ? and parent = 0 and category_alias like ?)";
			$this->setQuery($sql);
			return $this->loadRow(array($menu,$parent));
		}

		function countSubProduct($menu,$catid){
			$sql = "select count(*) as count from tb_product where category_id = (select category_id from tb_category where menu = ? and category_alias like ?)";
			$this->setQuery($sql);
			return $this->loadRow(array($menu,$catid));
		}
	}
?>