<?php
	require_once('Models/database.php');

	class M_category extends Database
	{
		function allmenu(){
			$sql = 'select * from tb_category';
			$this->setQuery($sql);
			return $this->loadAllRow();
		}
		function allmenulist(){
			$menulist = array();
			$sex = array('alias'=>array('men','women'),'id'=>array(0,1));
			$menulist = array();
			for ($i=0; $i <=1 ; $i++) { 
				$sql = "select * from tb_category where menu = $i and parent = 0";
				$this->setQuery($sql);
				$dbtable = $this->loadAllRow();
				$arralias = array();
				$arrid = array();
				foreach ($dbtable as $key => $value) {
					$submenu = $this->allsubmenu1($value{'category_id'});
					$arralias[$value{'category_alias'}] = array('info'=>$value, 'sub'=>$submenu['alias']);
					$arrid[$value{'category_id'}] = array('info'=>$value, 'sub'=>$submenu['id']);
				}
				$menulist['alias'][$sex['alias'][$i]] = $arralias;
				$menulist['id'][$sex['id'][$i]] = $arrid;
			}
			return $menulist;
		}

		function allsubmenu($cat){
			$sql = 'select * from tb_category where parent = ?';
			$this->setQuery($sql);
			return $this->loadAllRow(array($cat));
		}
		function allsubmenu1($cat){
			$sql = 'select * from tb_category where parent = ?';
			$arralias = array();
			$arrid = array();
			$this->setQuery($sql);
			$result = $this->loadAllRow(array($cat));
			foreach ($result as $key => $value) {
				$arralias[$value{'category_alias'}] = $arrid[$value{'category_id'}] = array('info'=>$value);
			}
			return $mang = array('alias'=>$arralias,'id'=>$arrid);
		}

		function menulist($menu){
			$sql = 'select * from tb_category where menu = ? and parent = 0';
			$this->setQuery($sql);
			return $this->loadAllRow(array($menu));
		}

		function submenu($menu,$cat){
			$sql = 'select * from tb_category where menu = ? and parent = ?';
			$this->setQuery($sql);
			return $this->loadAllRow(array($menu,$cat));
		}

		function menuwithsub($menu){
			$sql = 'select * from tb_category where menu = ? and parent = 0';
			$this->setQuery($sql);
			$dbtable = $this->loadAllRow(array($menu));
			$menulist = array();
			foreach ($dbtable as $key => $value) {
				$menulist[$value['category_alias']] = array($value{'category_name'},$this->submenu($menu,$value{'category_id'}));
			}
			return $menulist;
		}

		function update($category_name, $category_alias, $parent, $menu, $category_id){
			$sql = "update tb_category set category_name = ?, category_alias = ?, parent = ?, menu = ? where category_id = ?";
			$this->setQuery($sql);
			return $this->execute(array($category_name, $category_alias, $parent, $menu, $category_id));
		}
	}
?>