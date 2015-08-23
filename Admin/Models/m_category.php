<?php
	require_once('../Models/database.php');

	class M_category extends Database
	{
		function allmenu(){
			$sql = 'select * from tb_category';
			$this->setQuery($sql);
			return $this->loadAllRow();
		}

		function update($category_name, $category_alias, $parent, $menu, $category_id){
			$sql = "update tb_category set category_name = ?, category_alias = ?, parent = ?, menu = ? where category_id = ?";
			$this->setQuery($sql);
			return $this->execute(array($category_name, $category_alias, $parent, $menu, $category_id));
		}
	}
?>