<?php
	require_once('Models/database.php');

	class M_category extends Database
	{
		function allmenulist(){
			$arr = array();
			for ($i=0; $i <=1 ; $i++) { 
				$sql = "select * from tb_category where menu = $i and parent = 0";
				$this->setQuery($sql);
				$dbtable = $this->loadAllRow();
				$menulist = array();
				foreach ($dbtable as $key => $value) {
					// $menulist[$value{'category_alias'}] = array($value{'category_name'},$this->allsubmenu($value{'category_id'}));
					$menulist[$value{'category_alias'}] = array($value,
						$this->allsubmenu1($value{'category_id'}));
				}
				$arr[$i] = $menulist;
			}
			// print_r($arr);
			// echo json_encode($arr);
			print_r($arr);
		}

		function allsubmenu($cat){
			$sql = 'select * from tb_category where parent = ?';
			$this->setQuery($sql);
			return $this->loadAllRow(array($cat));
		}

		function allsubmenu1($cat){
			$sql = 'select * from tb_category where parent = ?';
			$mang = array();
			$this->setQuery($sql);
			$result = $this->loadAllRow(array($cat));
			foreach ($result as $key => $value) {
				$mang[$value{'category_alias'}] = $value;
			}
			return $mang;
		}
	}
	$m = new M_category();
	// $m ->allmenulist();
	//print_r($_SERVER);
	print_r($m ->allmenulist());
?>