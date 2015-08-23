<?php
	require_once('Controllers/template.php');
	require_once('Models/m_category.php');

	class C_category
	{
		private $_template;
		private $_mcategory;
		function __construct()
		{
			$this->_template = new Template();
			$this->_mcategory = new M_category();			
		}

		function menulist(){
			$menu = $_GET['menu'];
			$menu == 0 ? $menu = 'men' : $menu = 'women';
			$result = $this->_mcategory->menulist($menu);
			$this->_template->assign('sex',$menu);
			$this->_template->assign('menu',$result);
			$this->_template->display('page/product.tpl');
		}

		function update(){
			$category_name; $category_alias; $parent; $menu; $category_id;
			return $this->_mcategory->update($category_name, $category_alias, $parent, $menu, $category_id);
		}

		function menu(){
			$menu = $this->m_category->allmenu();
			print_r($menu);
		}


	}
?>