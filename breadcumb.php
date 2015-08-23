<?php
	/**
	* 
	*/
	class Breadcumb
	{
		private $_path;
		private $_navigation;

		function __construct($path){
			$this->_path = substr($path, strlen($path)-1) == '/' ? substr($path, 0,strlen($path)-1) : $path;
			$this->_navigation = $_SESSION['nav'];
		}

		function getUri(){
			//return $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
			return "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		}

		function getBreadcumb(){
			$url = $this->getUri();
			$uri = str_replace(array($this->_path,'.html'),null,$url);
			$breadcumb_uri = null;

			$arr = explode('/', $uri);
			if ($arr[1] == 'men' || $arr[1] == 'women') {
				$i=0;
				foreach ($arr as $key => $value) {
					//$i == 0 ? $breadcumb[0] = array('Trang Chủ',$this->_path) : $breadcumb[$i] = array($value,$breadcumb[$i-1][1].'/'.$value);

					if ($i == 0) {
						$breadcumb[0] = array('Trang Chủ',$this->_path);
					}
					elseif ($i == 1) {
						$value == 'men' ? $title = 'Thời Trang Nam' : $title = 'Thời Trang Nữ';
						$breadcumb[1] = array($title,$breadcumb[$i-1][1].'/'.$value);
					}
					elseif ($i == 2) {
						if ($value == 'hot-deal') {
							$title = 'Hot Deals';
						}
						elseif ($value == 'san-pham-moi') {
							$title = 'Sản Phẩm Mới';
						}
						elseif ($value == 'san-pham-noi-bat') {
							$title = 'Sản Phẩm Nổi Bật';
						}
						else{
							$title = $this->_navigation['alias'][$arr[1]][$value]['info']['category_name'];
						}
						$breadcumb[2] = array($title,$breadcumb[$i-1][1].'/'.$value);
					}
					elseif ($i == 3){
						$breadcumb[3] = array($this->_navigation['alias'][$arr[1]][$arr[2]]['sub'][$value]['info']['category_name'],$breadcumb[$i-1][1].'/'.$value);
					}
					$i++;
				}
				return $breadcumb;
			}
			return null;
		}

		function show(){
			if($arr = $this->getBreadcumb())
			{
				$breadcumb = "<ol class='breadcrumb pull-left'>";
				$i = 0;
				$active = null;

				foreach ($arr as $key => $value) {
					// if (count($arr)-1 == $i++) {
					// 	$breadcumb .= "<li class='active'>".$value[0]."</li>";
					// }
					// else{
					// 	$breadcumb .= "<li><a href='".$value[1]."'>".$value[0]."</a></li>";
					// }
					$breadcumb .= "<li><a href='".$value[1]."'>".$value[0]."</a></li>";
				}
				$breadcumb .= "</ol>";
				return $breadcumb;
			}
			return null;
		}
	}
?>