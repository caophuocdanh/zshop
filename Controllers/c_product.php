<?php
	require_once('Controllers/template.php');
	require_once('Models/m_product.php');
	class C_product
	{
		private $_template;
		private $_mproduct;
		private $_sex;
		private $_cat;
		private $_catid;
		private $_id;

		private $_limit = 24;
		// private $_curPage;
		private $_total;
		private $_start;
		function __construct()
		{
			$this->_template = new template();
			$this->_mproduct = new M_product();

			// if(isset($_GET['page']) > 0){
			// 	$this->_curPage = $_GET['page'];
			// }
			// else{
			// 	$this->_curPage = 1;
			// }

			if(isset($_REQUEST['menu'])){
				if($_REQUEST['menu'] == 0) {
					$this->_sex = array('id'=>0, 'alias'=>'men');
				}
				else{
					$this->_sex = array('id'=>1, 'alias'=>'women');
				}
				$this->_template->assign('sex',$this->_sex);
			}
			if(isset($_REQUEST['cat'])){
				$this->_cat = $_REQUEST['cat'];
				$this->_template->assign('cat',$this->_cat);
			}
			if(isset($_REQUEST['catid'])){
				$this->_catid = $_REQUEST['catid'];
				$this->_template->assign('catid',$this->_catid);
			}
			if(isset($_REQUEST['id'])){
				$this->_id = $_REQUEST['id'];
				$this->_template->assign('id',$this->_id);
			}
		}

		function null(){
			$this->_template->display('404.tpl');
		}

		function index(){
			$this->_template->assign('title','Thời Trang');
			$this->_template->display('page/product.tpl');
		}

		function menuproduct(){
			$this->_total = $this->_mproduct->countMenuProduct($this->_sex['id'],$this->_cat);
			$this->_total = $this->_total{'count'};
			$this->_pager = new Pager($this->_total,$this->_limit);
			$this->_start = $this->_pager->startItem();
			$result = $this->_mproduct->limitproductwithmenu($this->_sex['id'],$this->_cat,$this->_start,$this->_limit);
			$pageList = $this->_pager->pageList('Split');
			$this->_template->assign('page',$pageList);
			
			$this->_template->assign('title',null);
			$this->_template->assign('products',$result);
			$this->_template->display('page/productlist.tpl');
		}

		function submenuproduct(){
			$this->_total = $this->_mproduct->countSubProduct($this->_sex['id'],$this->_catid);
			$this->_total = $this->_total{'count'};
			$this->_pager = new Pager($this->_total,$this->_limit);
			$this->_start = $this->_pager->startItem();
			$result = $this->_mproduct->limitproductwithsub($this->_sex['id'],$this->_catid,$this->_start,$this->_limit);
			$pageList = $this->_pager->pageList('Split');
			$this->_template->assign('page',$pageList);

			$this->_template->assign('title',null);
			$this->_template->assign('products',$result);
			$this->_template->display('page/productlist.tpl');
		}

		function allproduct(){
			$this->_total = $this->_mproduct->countAllProduct();
			$this->_total = $this->_total{'count'};
			$this->_pager = new Pager($this->_total,$this->_limit);
			$this->_start = $this->_pager->startItem();
			$result = $this->_mproduct->allproduct();
			$pageList = $this->_pager->pageList('Split');
			$this->_template->assign('page',$pageList);

			//$result = $this->_mproduct->allproduct();
			$this->_template->assign('products',$result);
			$this->_template->display('page/productlist.tpl');
		}

		function limitallproduct(){
			$result = $this->_mproduct->limitallproduct(0,60);
			$this->_template->assign('products',$result);
			$this->_template->display('page/productlist.tpl');
		}
	
		function newproduct(){
			$this->_template->assign('title','Sản Phẩm Mới');
			$result = $this->_mproduct->newproduct($this->_sex['id'],60);
			$this->_template->assign('products',$result);
			$this->_template->display('page/productlist.tpl');
		}
		
		function hotproduct(){
			$this->_template->assign('title','Sản Phẩm Nổi Bật');
			$result = $this->_mproduct->hotproduct($this->_sex['id'],60);
			$this->_template->assign('products',$result);
			$this->_template->display('page/productlist.tpl');
		}

		function hotdeal(){
			$this->_template->assign('title','Hot Deals');
			$result = $this->_mproduct->hotdeal($this->_sex['id'],60);
			$this->_template->assign('products',$result);
			$this->_template->display('page/productlist.tpl');
		}

		function productwithcategory(){
			$result = $this->_mproduct->productwithcategory($this->_cat);
			$this->_template->assign('products',$result);
			$this->_template->display('page/productlist.tpl');
		}

		function limitproductwithcategory(){
			$start = 1;
			$end = 60;
			$result = $this->_mproduct->limitproductwithcategory($this->_cat,$start,$end);
			$this->_template->assign('products',$result);
			$this->_template->display('page/productlist.tpl');
		}		

		function detail(){
			$result = $this->_mproduct->detail($this->_id);
			$size = $this->_mproduct->size($result{'product_id'});
			$product = $this->_mproduct->randomproductwithcategory($result{'category_id'},$this->_id,0,20);
			$this->_template->assign('detail',$result);
			$this->_template->assign('size',$size);
			$this->_template->assign('products',$product);
			$this->_template->display('page/detail.tpl');
		}

		function search(){
			$this->_template->assign('title','Tìm Kiếm');
			$key = $_REQUEST['key'];
			$cat = $_REQUEST['cat'];
			$brand = $_REQUEST['brand'];
			$from = $_REQUEST['from'];
			$to = $_REQUEST['to'];
			$product = $this->_mproduct->search($key,$cat,$brand,$from,$to);
			$this->_template->assign('products',$product);
			$this->_template->display('page/search.tpl');
		}

		function insert(){
			echo "Insert Product";
		}
		
		function update(){
			echo "Update Product";
		}

		function delete(){
			echo "Delete Product";
		}
	}
?>