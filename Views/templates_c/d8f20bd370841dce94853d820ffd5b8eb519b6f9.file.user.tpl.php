<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-16 13:18:41
         compiled from "Views\templates\admin\page\user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2698155d06cd8e0add5-91821067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8f20bd370841dce94853d820ffd5b8eb519b6f9' => 
    array (
      0 => 'Views\\templates\\admin\\page\\user.tpl',
      1 => 1439723919,
      2 => 'file',
    ),
    'f74b0974690f99ab5795de91937b528403bf7f7f' => 
    array (
      0 => 'Views\\templates\\admin\\head.tpl',
      1 => 1432361554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2698155d06cd8e0add5-91821067',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d06cd906ddb3_93010642',
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d06cd906ddb3_93010642')) {function content_55d06cd906ddb3_93010642($_smarty_tpl) {?><!DOCTYPE html>
<html lang="">
<head>
	<?php /*  Call merged included template "admin/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("admin/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2698155d06cd8e0add5-91821067');
content_55d0719198dfe4_14809889($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "admin/head.tpl" */?>
	
</head>
<style>
	.form-signin{
		margin: 10% auto;
		width: 100%;
		max-width: 400px;
	}
	input{
		margin: 5px 0;
	}
</style>
<body>
	<div class="container">
		<div class="panel panel-primary form-signin">
			<div class="panel-heading">
				<h3 class="panel-title">Đăng Nhập Quản Trị</h3>
			</div>
			<div class="panel-body">
				<form class="" method="post">
					<label for="inputEmail" class="sr-only">Email address</label>
					<input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="txtemail" required autofocus>
						<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" id="inputPassword" class="form-control" placeholder="Password" name="txtpass" required>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="remember-me"> Ghi nhớ tài khoản
						</label>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit" name="btnlogin">Đăng nhập</button>
				</form>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/js/less.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-16 13:18:41
         compiled from "Views\templates\admin\head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55d0719198dfe4_14809889')) {function content_55d0719198dfe4_14809889($_smarty_tpl) {?><meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> | <?php echo $_smarty_tpl->tpl_vars['default_title']->value;?>
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
