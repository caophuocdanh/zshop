<?php
	require_once('../Controllers/template.php');
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

		function menu(){
			$menu = $this->_mcategory->allmenu();
			$this->_template->assign('menu',$menu);
			$this->_template->display('admin/block/block-category.tpl');
		}

		function add(){
			$this->_template->display('admin/block/block-category-add.tpl');
		}

		function delete(){
			$this->_template->display('admin/block/block-category-delete.tpl');
		}

		function update(){
			$this->_template->display('admin/block/block-category-update.tpl');
		}


	}
?>