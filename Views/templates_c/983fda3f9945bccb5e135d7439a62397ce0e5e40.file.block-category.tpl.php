<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-16 12:42:56
         compiled from "Views\templates\admin\block\block-category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1966155d06930b4caa4-12775940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '983fda3f9945bccb5e135d7439a62397ce0e5e40' => 
    array (
      0 => 'Views\\templates\\admin\\block\\block-category.tpl',
      1 => 1432382620,
      2 => 'file',
    ),
    'd30594981eff335668bde7f2e8ee38db34704e31' => 
    array (
      0 => 'Views\\templates\\admin\\page\\category.tpl',
      1 => 1432381722,
      2 => 'file',
    ),
    'fc990419296413cc65e0cd5ac950679293e65c83' => 
    array (
      0 => 'Views\\templates\\admin\\layout.tpl',
      1 => 1432381708,
      2 => 'file',
    ),
    'f74b0974690f99ab5795de91937b528403bf7f7f' => 
    array (
      0 => 'Views\\templates\\admin\\head.tpl',
      1 => 1432361554,
      2 => 'file',
    ),
    '2f6dc9301f3c68ce6c53aba65e5791b2d1d80841' => 
    array (
      0 => 'Views\\templates\\admin\\header.tpl',
      1 => 1432381694,
      2 => 'file',
    ),
    'b7bba80c78d61b607f94dd5d03c051babd673d89' => 
    array (
      0 => 'Views\\templates\\admin\\container.tpl',
      1 => 1432361476,
      2 => 'file',
    ),
    '470c124c33b42002576c55950562458d69d75e75' => 
    array (
      0 => 'Views\\templates\\admin\\footer.tpl',
      1 => 1432361132,
      2 => 'file',
    ),
    'd087babcea51f4b335df49b27155b1b38e5a2eef' => 
    array (
      0 => 'Views\\templates\\admin\\plugin.tpl',
      1 => 1431249080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1966155d06930b4caa4-12775940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d06930dd4cf2_03169497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d06930dd4cf2_03169497')) {function content_55d06930dd4cf2_03169497($_smarty_tpl) {?><!DOCTYPE html>
<html lang="">
	<head>
		<?php /*  Call merged included template "admin/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("admin/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1966155d06930b4caa4-12775940');
content_55d06930bcba83_53396227($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "admin/head.tpl" */?>
		
	</head>
	<body>
		<!-- header -->
		<header>
			<?php /*  Call merged included template "admin/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1966155d06930b4caa4-12775940');
content_55d06930c58107_42196190($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "admin/header.tpl" */?>
			
		</header>
		<!-- end header -->

		<!-- container -->
		<main style="margin-top:55px;">
			
<ul class="list-group">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['item']->value['category_id'];?>
 => <?php echo $_smarty_tpl->tpl_vars['item']->value['category_name'];?>
</li>
	<?php } ?>
</ul>

		</main>
		<!-- end container -->

		<!-- footer -->
		<footer>
			<?php /*  Call merged included template "admin/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1966155d06930b4caa4-12775940');
content_55d06930d847c0_85321350($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "admin/footer.tpl" */?>
			
		</footer>
		<!-- end footer -->

		<!-- plugin -->
		<?php /*  Call merged included template "admin/plugin.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("admin/plugin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1966155d06930b4caa4-12775940');
content_55d06930d9a7b7_51633786($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "admin/plugin.tpl" */?>
		
		<!-- end plugin -->

		<!-- Script -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/js/less.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/js/jquery.nicescroll.min.js"><?php echo '</script'; ?>
>
		
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/js/script.js"><?php echo '</script'; ?>
>

		<div id="fb-root"></div>
		<?php echo '<script'; ?>
>
		// (function(d, s, id) {
		// 	var js, fjs = d.getElementsByTagName(s)[0];
		// 	if (d.getElementById(id)) return;
		// 	js = d.createElement(s); js.id = id;
		// 	js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3";
		// 	fjs.parentNode.insertBefore(js, fjs);
		// }(document, 'script', 'facebook-jssdk'));
		<?php echo '</script'; ?>
>
	</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-16 12:42:56
         compiled from "Views\templates\admin\head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55d06930bcba83_53396227')) {function content_55d06930bcba83_53396227($_smarty_tpl) {?><meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Quản Lý Danh Mục | <?php echo $_smarty_tpl->tpl_vars['default_title']->value;?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />

<!-- Style -->
<link rel="stylesheet/less" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Admin/Publics/less/style.less" />
<!-- <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/css/style.css"> -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/css/ionicons.min.css">


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/js/html5shiv.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/js/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/js/jquery.1.11.2.min.js" type="text/javascript"><?php echo '</script'; ?>
><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-16 12:42:56
         compiled from "Views\templates\admin\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55d06930c58107_42196190')) {function content_55d06930c58107_42196190($_smarty_tpl) {?><nav class="navbar navbar-inverse navbar-fixed-top">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['adminpath']->value;?>
">zShop.vn</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hệ Thống<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						
						<li><a href="#">Bảng Điều Khiển</a>
						</li>
						<li><a href="#">Cấu Hình Hệ Thống</a>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Danh Mục<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/quan-ly/danh-muc.html">Quản Lý Danh Mục</a>
						</li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/quan-ly/danh-muc/them.html">Thêm Danh Mục</a>
						</li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/quan-ly/danh-muc/sua.html">Sửa Danh Mục</a>
						</li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/quan-ly/danh-muc/xoa.html">Xóa Danh Mục</a>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sản Phẩm<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Quản Lý Sản Phẩm</a>
						</li>
						<li><a href="#">Thêm Sản Phẩm</a>
						</li>
						<li><a href="#">Sửa Sản Phẩm</a>
						</li>
						<li><a href="#">Xóa Sản Phẩm</a>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Khách Hàng<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Quản Lý Khách Hàng</a>
						</li>
						<li><a href="#">Thêm Khách Hàng</a>
						</li>
						<li><a href="#">Sửa Khách Hàng</a>
						</li>
						<li><a href="#">Xóa Khách Hàng</a>
						</li>
						<li><a href="#">Phân Quyền Khách Hàng</a>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ban Quản Trị<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Danh Sách BQT</a>
						</li>
						<li><a href="#">Phân Quyền BQT</a>
						</li>
					</ul>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tài Khoản<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Thông Tin Tài Khoản</a>
						</li>
						<li><a href="#">Thoát</a>
						</li>
					</ul>
				</li>
				</li>
			</ul>
		</div>
	</div>
</nav>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-16 12:42:56
         compiled from "Views\templates\admin\container.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55d06930c943a2_39751827')) {function content_55d06930c943a2_39751827($_smarty_tpl) {?><div class="container">
    <div class="row">
    
        Container
    
    </div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-16 12:42:56
         compiled from "Views\templates\admin\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55d06930d847c0_85321350')) {function content_55d06930d847c0_85321350($_smarty_tpl) {?><div class="container-fluid">
    <hr>
    Footer
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-16 12:42:56
         compiled from "Views\templates\admin\plugin.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55d06930d9a7b7_51633786')) {function content_55d06930d9a7b7_51633786($_smarty_tpl) {?><div id="plugin">
	<aside id="scroll" class="hidden-xs">
		<a href="#top" id="scrolltop"><i class="ion-android-arrow-dropup-circle"></i></a>
	</aside>
</div><?php }} ?>
