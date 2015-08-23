<?php
	session_start();
	//session_destroy();
	chdir(dirname(__DIR__));
	require_once('Configs/config.php');
	require_once('Smarty/Smarty.class.php');
	require_once('Models/m_category.php');
	require_once('Library/pager.php');
	require_once('Library/breadcumb.php');
	require_once('Models/m_shopcart.php');
	
	define("TEMPDIR",$template_dir);
	define("COMPDIR",$compile_dir);
	define("CONFIG",$config_dir );
	define("CACHEDIR",$cache_dir);
	define("ISCACHE",$iscache);
	define("ISDEBUG",$isdebug);
	define("CACHE_LIFETIME",$lifetime);

	class Template extends Smarty 
	{
		function __construct()
		{ 
			parent::__construct();
			$this->template_dir = TEMPDIR; 
			$this->compile_dir = COMPDIR ; 
			$this->config_dir = CONFIG; 
			$this->cache_dir = CACHEDIR ; 
			$this->caching = ISCACHE;
			$this->debugging = ISDEBUG;
			$this->cache_lifetime = CACHE_LIFETIME;

			$this->assign('path',PATH);
			$this->assign('adminpath',ADMINPATH);
			$this->assign('default_title',TITLE);
			$this->assign('description',DESCRIPTION);

			$_mshopcart = new M_shopcart();
			$this->assign('sumPrice',$_mshopcart->sumPrice());
			$this->assign('sumQuatity',$_mshopcart->sumQuatity());

			$_mcategory = new M_category();
			//$this->assign('nav',$_mcategory->allmenulist());
			if(!isset($_SESSION['nav'])) $_SESSION['nav'] = $_mcategory->allmenulist();

			$_breadcumb = new Breadcumb(PATH);
			$this->assign('breadcumb',$_breadcumb->show());
		} 
	}
?>