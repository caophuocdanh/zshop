<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-10 15:48:27
         compiled from "Views\templates\page\customer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2584155c8abab3b2281-75411836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b26dfbee9efc63af8ed4b3f34f291e0c4ee6f89' => 
    array (
      0 => 'Views\\templates\\page\\customer.tpl',
      1 => 1430295366,
      2 => 'file',
    ),
    '365bb90171b040b6d73acbe2e74784fb429b7aef' => 
    array (
      0 => 'Views\\templates\\layout.tpl',
      1 => 1439211064,
      2 => 'file',
    ),
    'e0dbf7df8b79d8be730e836298f09d010d985ff9' => 
    array (
      0 => 'Views\\templates\\head.tpl',
      1 => 1433350738,
      2 => 'file',
    ),
    '65d265e21cf2b37de5ed21d2c53a1f2a15939146' => 
    array (
      0 => 'Views\\templates\\header.tpl',
      1 => 1436692680,
      2 => 'file',
    ),
    '33885bf34d5974c693adc47cff0459b9e840da61' => 
    array (
      0 => 'Views\\templates\\block\\block-index.tpl',
      1 => 1430206354,
      2 => 'file',
    ),
    '7b7115ac843823585ea21b5b88ca2768ddbe6de9' => 
    array (
      0 => 'Views\\templates\\block\\block-login.tpl',
      1 => 1431018330,
      2 => 'file',
    ),
    '6c977c00a1fa64e069de67fba6d385f236d16895' => 
    array (
      0 => 'Views\\templates\\block\\block-register.tpl',
      1 => 1431019994,
      2 => 'file',
    ),
    'a93b07134bcb90dc9a6e32b13a872da1746fe43e' => 
    array (
      0 => 'Views\\templates\\block\\block-container-one.tpl',
      1 => 1429896768,
      2 => 'file',
    ),
    'baac80534343210477b7fb879f52f4845116dd77' => 
    array (
      0 => 'Views\\templates\\container.tpl',
      1 => 1430030412,
      2 => 'file',
    ),
    '71fd8a53467d8925fd075b618dae6ee6f8d2a2b5' => 
    array (
      0 => 'Views\\templates\\footer.tpl',
      1 => 1431189948,
      2 => 'file',
    ),
    '41fc65edc0d0df52339ff4edc4c745a1d03f1e7d' => 
    array (
      0 => 'Views\\templates\\plugin.tpl',
      1 => 1431249080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2584155c8abab3b2281-75411836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55c8abab8a4468_02254401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c8abab8a4468_02254401')) {function content_55c8abab8a4468_02254401($_smarty_tpl) {?><!DOCTYPE html>
<html lang="">
	<head>
		<?php $_smarty_tpl->tpl_vars['menu'] = new Smarty_variable($_SESSION['nav'], null, 0);?>
		<?php $_smarty_tpl->tpl_vars['arrsex'] = new Smarty_variable(array('men','women'), null, 0);?>
		<?php /*  Call merged included template "head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2584155c8abab3b2281-75411836');
content_55c8abab44dbb2_24269407($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "head.tpl" */?>
		
	</head>
	<body>
		<!-- header -->
		<header>
			<?php /*  Call merged included template "header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2584155c8abab3b2281-75411836');
content_55c8abab547027_08320372($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "header.tpl" */?>
			
		</header>
		<!-- end header -->

		<!-- container -->
		<main>
			<?php /*  Call merged included template "container.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2584155c8abab3b2281-75411836');
content_55c8abab634d92_22371281($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "container.tpl" */?>
			
		</main>
		<!-- end container -->

		<!-- footer -->
		<footer>
			<?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2584155c8abab3b2281-75411836');
content_55c8abab82f314_14072054($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "footer.tpl" */?>
			
		</footer>
		<!-- end footer -->

		<!-- plugin -->
		<?php /*  Call merged included template "plugin.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("plugin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2584155c8abab3b2281-75411836');
content_55c8abab86f591_30264702($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "plugin.tpl" */?>
		
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
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		<?php echo '</script'; ?>
>
	</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-10 15:48:27
         compiled from "Views\templates\head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55c8abab44dbb2_24269407')) {function content_55c8abab44dbb2_24269407($_smarty_tpl) {?><meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 | <?php echo $_smarty_tpl->tpl_vars['default_title']->value;?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" />

<!-- Style -->
<!-- <link rel="stylesheet/less" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/less/style.less" /> -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/css/style.css">
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
>

<?php echo '<script'; ?>
>
	$(document).ready(function(){
		$('#btnbuy').click(function(){
			var value = $('#btnbuy').attr('name');
			var product = "<strong>"+$('#product-title').text() +"</strong> ("+ $('#brand').text()+")";
			$.ajax({
				url: "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/gio-hang/them.html", 
				type: 'POST',
				data: { "info":value, "size":$('#selsize').val(), "quatity":$('#txtquatity').val() },
				dataType: 'json',
				success: function(data){
					$('#sumQuatity').text(data['quatity']);
					var html = "<div class='addItem'> Thêm thành công sản phẩm: <h5>"+ product +"</h5></div>";
					$('#plugin').fadeOut(0).append(html).fadeIn(500);
					$('.addItem').fadeIn(0).delay(2000).fadeOut(500);
				}
			});
		});

		$('#logout').click(function(){
			$.ajax({
				url: "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/thoat.html", 
				success: function(){
					location.reload();
				}
			});
		});

		$('#btnlogin').click(function(){
			console.log($('#txtEmail').val()+'--'+$('#txtPassword').val());
			$.ajax({
				url: "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/login.html", 
				type: 'POST',
				data: {
					"email":$('#txtEmail').val(),
					"password":$('#txtPassword').val()
				},
				dataType: 'json',
				success: function(data){
					alert(data['comment']);
					if (data['status']) {
						location.reload();
					};
				}
			});
		});

		$('#btnloginmodal').click(function(){
			$.ajax({
				url: "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/login.html", 
				type: 'POST',
				data: {
					"email":$('#txtEmailModal').val(),
					"password":$('#txtPasswordModal').val()
				},
				dataType: 'json',
				success: function(data){
					alert(data['comment']);
					if (data['status']) {
						location.reload();
					};
				}
			});
		});

		$('#btnregister').click(function(){
			$.ajax({
				url: "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/register.html", 
				type: 'POST',
				data: {
					"email":$('#txtEmail').val(),
					"password":$('#txtPassword').val(),
					"name":$('#txtName').val(),
					"sex":$('input[name="rdbSex"]:checked').val(),
					"address":$('#txtAddress').val(),
					"phone":$('#txtPhone').val(),
				},
				dataType: 'json',
				success: function(data){
					alert(data['comment']);
				}
			});
		});
	});
<?php echo '</script'; ?>
><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-10 15:48:27
         compiled from "Views\templates\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55c8abab547027_08320372')) {function content_55c8abab547027_08320372($_smarty_tpl) {?><div class="container-fluid">
	<div class="row navtop hidden-xs">
		<div class="container">
			<ul class="menutop pull-right">
				<?php if (isset($_SESSION['customer'])) {?>
				<!-- <li class="user pull-left"><a href="#"><?php echo $_SESSION['customer']['email'];?>
</a></li> -->
				<li role="presentation" class="dropdown user pull-left">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
						<span><?php echo $_SESSION['customer']['email'];?>
</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/quan-ly-tai-khoan.html">Thông tin tài khoản</a></li>
						<li><a href="#">Đổi mật khẩu</a></li>
						<li><a href="#" id="logout">Thoát</a></li>
					</ul>
				</li>
				<?php } else { ?>
					<li class="signin pull-left"><a href="#login" data-toggle="modal" data-target=".login-modal">Đăng Nhập</a></li>
					<li class="login pull-left"><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/dang-ki.html">Đăng Kí</a></li>
					<!-- <li class="login pull-left"><a href="#register" data-toggle="modal" data-target=".register-modal">Đăng Kí</a></li> -->
				<?php }?>
				<li class="question pull-left"><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/help.html">Hỏi Đáp</a></li>
				<li class="contact pull-left"><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/contact.html">Liên Hệ</a></li>
			</ul>
		</div>
	</div>
	<!-- login modal -->
	<div class="modal fade login-modal" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="gridSystemModalLabel">Đăng Nhập</h4>
				</div>
				<div class="modal-body">
					<form action="#" method="post" class="form-horizontal">
						<div class="form-group userlogin">
							<label for="txtEmailModal" class="col-sm-6 control-label">Địa chỉ Email: </label>
							<div class="col-sm-18">
								<input type="email" class="form-control" id="txtEmailModal" placeholder="Địa chỉ Email">
							</div>
						</div>
						<div class="form-group">
							<label for="txtPasswordModal" class="col-sm-6 control-label">Mật khẩu: </label>
							<div class="col-sm-18">
								<input type="password" class="form-control" id="txtPasswordModal" placeholder="Mật khẩu">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-14 col-sm-offset-6">
								<a href="#" data-toggle="modal" data-dismiss="modal" data-target=".forgot-modal">Quên mật khẩu?</a>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-6">
								<div class="checkbox">
									<label><input type="checkbox">Ghi nhớ đăng nhập</label>
								</div>
							</div>
							<div class="col-sm-8">
								<button id="btnloginmodal" type="button" class="btn btn-primary col-xs-24">Đăng Nhập</button>
							</div>
						</div>
					</form>
					<hr>
					<div class="sociallogin clearfix">
						<div class="social col-sm-8">
							<a href="#" class="btn btn-lg btn-block facebook">
								<span class="hidden-xs ion-social-facebook"></span>
								<span class="hidden-sm hidden-sm">facebook</span>
							</a>
						</div>
						<div class="social col-sm-8">
							<a href="#" class="btn btn-lg btn-block googleplus">
								<span class="hidden-xs ion-social-googleplus"></span>
								<span class="hidden-sm hidden-sm">google+</span>
							</a>
						</div>
						<div class="social col-sm-8">
							<a href="#" class="btn btn-lg btn-block twitter">
								<span class="hidden-xs ion-social-twitter"></span>
								<span class="hidden-sm hidden-sm">twitter</span>
							</a>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					Bạn chưa có tài khoản. <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/dang-ki.html">Đăng kí</a> ngay để nhận được nhiều ưu đãi từ zShop.vn.
				</div>
			</div>
		</div>
	</div>
	<!-- end login modal -->

	<!-- forgot modal -->
	<div class="modal fade forgot-modal" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="gridSystemModalLabel">Quên Mật Khẩu</h4>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<form action="#" method="post" class="form-horizontal">
							<div class="form-group">
								<label for="inputEmail" class="col-sm-6 control-label">Địa chỉ Email: </label>
								<div class="col-sm-18">
									<input type="email" class="form-control" id="inputEmail" placeholder="Địa chỉ Email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-8 col-sm-offset-6">
									<button type="submit" class="btn btn-primary col-xs-24">Mật Khẩu Mới</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end forgot modal -->

	<!-- register modal -->
	<div class="modal fade register-modal" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="gridSystemModalLabel">Đăng Kí Tài Khoản</h4>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<form action="#" method="post" class="form-horizontal">
							<div class="form-group">
								<label for="inputEmail" class="col-sm-6 control-label">Địa chỉ Email: </label>
								<div class="col-sm-18">
									<input type="email" class="form-control" id="inputEmail" placeholder="Địa chỉ Email">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword" class="col-sm-6 control-label">Mật khẩu: </label>
								<div class="col-sm-18">
									<input type="password" class="form-control" id="inputPassword" placeholder="Mật khẩu">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-8 col-sm-offset-6 ">
									<button type="submit" class="btn btn-primary col-xs-24">Đăng Kí</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<div class="social col-sm-8">
						<a href="#" class="btn btn-lg btn-block facebook">
							<span class="hidden-xs ion-social-facebook"></span>
							<span class="hidden-sm hidden-md">facebook</span>
						</a>
					</div>
					<div class="social col-sm-8">
						<a href="#" class="btn btn-lg btn-block googleplus">
							<span class="hidden-xs ion-social-googleplus"></span>
							<span class="hidden-sm hidden-md">google+</span>
						</a>
					</div>
					<div class="social col-sm-8">
						<a href="#" class="btn btn-lg btn-block twitter">
							<span class="hidden-xs ion-social-twitter"></span>
							<span class="hidden-sm hidden-md">twitter</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end register modal -->

	<div id="fixed">
		<div class="row header">
			<div class="container">
				<div class="logo col-xs-10 col-sm-6 col-md-6 text-center">
					<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
" class="logoshop"></a>
				</div>
				<div class="sex col-xs-8 col-sm-6 col-md-6">
					<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/men.html">
						<div class="male col-xs-12 <?php if (isset($_smarty_tpl->tpl_vars['sex']->value)&&$_smarty_tpl->tpl_vars['sex']->value['id']==0) {?>active<?php }?>">
							<span class="icon ion-man">Nam</span>
						</div>
					</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/women.html">
						<div class="female col-xs-12 <?php if (isset($_smarty_tpl->tpl_vars['sex']->value)&&$_smarty_tpl->tpl_vars['sex']->value['id']==1) {?>active<?php }?>">
							<span class="icon ion-woman">Nữ</span>
						</div>
					</a>
				</div>
				<div class="search hidden-xs col-sm-8 col-md-8">
					<form action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/tim-kiem.html&key=a&category=5&brand=2401&from=200000&to=300000" method="post">
						<div class="input-group">
							<input name="txtsearchkey" id="txtsearchkey" type="text" class="form-control" placeholder="Áo thun, Giày Zilandi">
							<span class="input-group-btn">
								<button class="btn btn-search ion-ios-search-strong" type="submit" name="btnsearch"></button>
							</span>
						</div>
						<div class="hidden-xs hidden-sm keywork clearfix">
							<span class="pull-left">Từ khóa:</span>
							<ul class="pull-left">
								<li class="pull-left"><a href="#">Zilandi</a></li>
								<li class="pull-left"><a href="#">Adidas</a></li>
								<li class="pull-left"><a href="#">Sneaker</a></li>
								<li class="pull-left"><a href="#">Mango</a></li>
								<li class="pull-left"><a href="#">Levi's</a></li>
							</ul>
						</div>
					</form>
				</div>
				<div class="shopcart col-xs-6 col-sm-4">
					<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/gio-hang.html">
						<span class="text">Giỏ Hàng</span>
						<span class="bubble ion-ios-chatbubble" id="sumQuatity"><?php echo $_smarty_tpl->tpl_vars['sumQuatity']->value;?>
</span>
					</a>
				</div>
			</div>
		</div>
		
	</div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-10 15:48:27
         compiled from "Views\templates\container.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55c8abab634d92_22371281')) {function content_55c8abab634d92_22371281($_smarty_tpl) {?><div class="container">
    <div class="row">
    <?php /*  Call merged included template "block/block-container-one.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("block/block-container-one.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2584155c8abab3b2281-75411836');
content_55c8abab646df1_67495252($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "block/block-container-one.tpl" */?>

    </div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-10 15:48:27
         compiled from "Views\templates\block\block-container-one.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55c8abab646df1_67495252')) {function content_55c8abab646df1_67495252($_smarty_tpl) {?>
	<?php if ($_smarty_tpl->tpl_vars['page']->value=='login') {?>
		<?php /*  Call merged included template "block/block-login.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("block/block-login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2584155c8abab3b2281-75411836');
content_55c8abab7989d4_50518434($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "block/block-login.tpl" */?>
	<?php } elseif ($_smarty_tpl->tpl_vars['page']->value=='register') {?>
		<?php /*  Call merged included template "block/block-register.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("block/block-register.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2584155c8abab3b2281-75411836');
content_55c8abab7b4831_31182373($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "block/block-register.tpl" */?>
	<?php } elseif ($_smarty_tpl->tpl_vars['page']->value=='info') {?>
		<?php echo $_smarty_tpl->getSubTemplate ("block/block-info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-10 15:48:27
         compiled from "Views\templates\block\block-index.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55c8abab658df6_88858476')) {function content_55c8abab658df6_88858476($_smarty_tpl) {?><div class="col-lg-22 col-lg-offset-1 indexpage">
	<div class="row">
		<div class="col-xs-24 banner">
			<div class="row">
				
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 mainslider">
			<div class="row">
				<ul class="bxslidermen">
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/men.html">
							<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/slide/mainslide/men-1.jpg" alt="" title="Thời trang nam" class="img-responsive">
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/men.html">
							<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/slide/mainslide/men-2.jpg" alt="" title="Thời trang nam" class="img-responsive">
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/men.html">
							<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/slide/mainslide/men-3.jpg" alt="" title="Thời trang nam" class="img-responsive">
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-xs-12 mainslider">
			<div class="row">
				<ul class="bxsliderwomen">
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/women.html">
							<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/slide/mainslide/women-1.jpg" alt="" title="Thời trang nữ" class="img-responsive">
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/women.html">
							<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/slide/mainslide/women-2.jpg" alt="" title="Thời trang nữ" class="img-responsive">
						</a>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/women.html">
							<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/slide/mainslide/women-3.jpg" alt="" title="Thời trang nữ" class="img-responsive">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-8 colbrand">
			<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/thuong-hieu.html">
				<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/slide/mango.jpg" alt="" title="" class="img-responsive">
			</a>
		</div>
		<div class="col-xs-8 colbrand">
			<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/thuong-hieu.html">
				<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/slide/missselfridge.jpg" alt="" title="" class="img-responsive">
			</a>
		</div>
		<div class="col-xs-8 colbrand">
			<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/thuong-hieu.html">
				<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/slide/newlook.jpg" alt="" title="" class="img-responsive">
			</a>
		</div>
	</div>
	<div class="row">
		<h3>Thương Hiệu Nổi Bật</h3>
		<div class="hotbrand">
			<div class="slide"><a href="#hotbrand"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/brands/ananas.jpg" alt=""></a></div>
			<div class="slide"><a href="#hotbrand"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/brands/davishoes.jpg" alt=""></a></div>
			<div class="slide"><a href="#hotbrand"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/brands/geox.jpg" alt=""></a></div>
			<div class="slide"><a href="#hotbrand"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/brands/mango.jpg" alt=""></a></div>
			<div class="slide"><a href="#hotbrand"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/brands/nike.jpg" alt=""></a></div>
			<div class="slide"><a href="#hotbrand"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/brands/simplecarry.jpg" alt=""></a></div>
			<div class="slide"><a href="#hotbrand"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/brands/ananas.jpg" alt=""></a></div>
			<div class="slide"><a href="#hotbrand"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/brands/davishoes.jpg" alt=""></a></div>
			<div class="slide"><a href="#hotbrand"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/brands/geox.jpg" alt=""></a></div>
			<div class="slide"><a href="#hotbrand"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/brands/mango.jpg" alt=""></a></div>
			<div class="slide"><a href="#hotbrand"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/brands/nike.jpg" alt=""></a></div>
			<div class="slide"><a href="#hotbrand"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/brands/simplecarry.jpg" alt=""></a></div>
			<div class="slide"><a href="#hotbrand"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/brands/ananas.jpg" alt=""></a></div>
			<div class="slide"><a href="#hotbrand"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/brands/davishoes.jpg" alt=""></a></div>
			<div class="slide"><a href="#hotbrand"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/brands/geox.jpg" alt=""></a></div>
			<div class="slide"><a href="#hotbrand"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/brands/mango.jpg" alt=""></a></div>
			<div class="slide"><a href="#hotbrand"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/brands/nike.jpg" alt=""></a></div>
			<div class="slide"><a href="#hotbrand"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/brands/simplecarry.jpg" alt=""></a></div>
		</div>
	</div>
	<div class="row">
		<div class="recommend">
			<h4>ZSHOP.VN - TRANG WEB MUA SẮM THỜI TRANG TRỰC TUYẾN HÀNG ĐẦU VIỆT NAM</h4>
			<div class="col-sm-12">
				<h5>BẠN ĐANG TÌM NHỮNG MẪU THỜI TRANG, QUẦN ÁO, GIÀY DÉP VÀ PHỤ KIỆN MỚI NHẤT TRÊN MẠNG? HÃY MUA SẮM NGAY HÔM NAY TẠI zShop VIỆT NAM</h5>
				<p><strong>zShop.vn</strong> sẽ mang lại cho khách hàng những trải nghiệm mua sắm thời trang trực tuyến thú vị từ các thương hiệu thời trang quốc tế và trong nước danh tiếng. Thời trang zShop luôn đổi mới từng ngày với những bộ sưu tập thời trang nam nữ khổng lồ từ giày dép, trang phục, phụ kiện đến mỹ phẩm cho cả nam, nữ. zShop Việt Nam cam kết chất lượng phục vụ hàng đầu cùng với những với những xu hướng thời trang mới nhất. Bạn có thể tìm thấy những bộ trang phục mình yêu thích, từ những bộ đồ mặc nhà thật thoải mái hay tự tin trong những trang phục công sở thanh lịch. Đừng bỏ lỡ những trải nghiệm mua sắm thú vị tại <strong>zShop.vn</strong> – trang web mua sắm thời trang hàng đầu tại Việt Nam.</p>
				<h5>THỜI TRANG 2015 HOT NHẤT TẠI zShop.vn</h5>
				<p>Mua sắm thời trang là nhu cầu thiết yếu của cả phái mạnh và phái đẹp. Thấu hiểu điều này, <strong>zShop.vn</strong> sẽ mang đến cho bạn nhiều bộ sưu tập thời trang 2015 hot nhất từ các thương hiệu trong và ngoài nước. Bên cạnh đó, thời trang cao cấp Hàn Quốc từ các nhãn hàng nổi tiếng cũng là một thế mạnh của trang web mua sắm thời trang hàng đầu này. Ngoài ra, <strong>zShop.vn</strong> cũng sẽ gợi ý cho bạn những món quà thật ý nghĩa để tặng người thân, bạn bè. Chúng tôi sẽ làm bạn hài lòng với sự lựa chọn của mình bằng giá tốt nhất và chất lượng dịch vụ hoàn hảo. Mua hàng trực tuyến giá rẻ chưa bao giờ dễ dàng đến thế với <strong>zShop.vn</strong>.</p>
				<h5>KHÁM PHÁ PHONG CÁCH THỜI TRANG 2015 TẠI zShop.vn</h5>
				<p>Tìm mua những bộ trang phục theo xu hướng mới nhất là điều mà nhiều chàng trai, cô gái yêu thời trang mong muốn. <strong>zShop.vn</strong> tự hào giới thiệu đến bạn phong cách thời trang 2015 với đa dạng sản phẩm, từ quần áo hàng hiệu, giày dép thời trang đến mỹ phẩm cao cấp Hàn Quốc. Phái đẹp có thể tha hồ mua sắm đầm xòe, chân váy ngắn, áo sơ mi, ví dự tiệc. Còn phái mạnh thì chắc chắn sẽ không thể bỏ qua bộ thể thao nam, áo khoác nam, balo laptop nam, áo phông nam.</p>			
			</div>
			<div class="col-sm-12">
				<h5>THỜI TRANG CAO CẤP PHÙ HỢP VỚI MỌI ĐỐI TƯỢNG TỪ DOANH NHÂN, NHÂN VIÊN VĂN PHÒNG ĐẾN CÁC BẠN TRẺ</h5>
				<p>Bạn có thể thoải mái mua sắm thời trang cao cấp hay thời trang hàng hiệu và thậm chí cả thời trang cao cấp Việt Nam tại <strong>zShop.vn</strong>. Đa dạng mẫu mã, chủng loại và giá cả, bạn sẽ có nhiều lựa chọn cho phong cách thời trang của riêng mình. Đừng bỏ lỡ những đợt giảm giá khủng của chúng tôi để sắm cho mình những item hot nhất mùa này.</p>
				<h5>Mua sắm trực tuyến giá rẻ tại zShop.vn</h5>
				<p>Mua sắm trực tuyến tại <strong>zShop.vn</strong> chưa bao giờ dễ dàng đến thế chỉ với một cú click chuột. Nhiều thương hiệu quốc tế và trong nước cho bạn thỏa thích mua sắm như The Doll House, HAGI, ADAM, Burton Menswear London, EZRA Basics by zShop… Các thương hiệu này luôn cập nhật sản phẩm thời trang trẻ 2015 nhanh nhất để đáp ứng nhu cầu của khách hàng. Các xu hướng thời trang năm 2015 cũng liên tục được cập nhật hàng ngày.</p>
				<h5>MUA SẮM THỜI TRANG ONLINE TẠI zShop.vn – THUẬN TIỆN, DỄ DÀNG VÀ HOÀN TOÀN BẢO MẬT</h5>
				<p>Bạn có thể mua sắm thời trang online thoải mái trên <strong>zShop.vn</strong> mà không có bất kỳ lo lắng nào: thanh toán khi nhận hàng, trả hàng trong vòng 30 ngày kể từ ngày nhận hàng. Nếu bạn có bất kì câu hỏi nào về các sản phẩm của chúng tôi, hãy gọi ngay tới bộ phận chăm sóc khách hàng (08) 6288 xxxx hoặc email: customer@zShop.vn để có được những giải đáp chi tiết và tận tình nhất. <strong>zShop.vn</strong> luôn nỗ lực để bạn có được những trải nghiệm mua sắm online tuyệt vời nhất!</p>
			</div>
		</div>
	</div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-10 15:48:27
         compiled from "Views\templates\block\block-login.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55c8abab7989d4_50518434')) {function content_55c8abab7989d4_50518434($_smarty_tpl) {?><div class="login col-sm-12">
	<div class="box col-sm-24 col-md-22 col-md-offset-1">
		<h3>Đăng nhập bằng tài khoản</h3>
		<div class="login-form col-sm-22 col-sm-offset-1">
			<form action="" method="post">
				<div class="form-group">
					<label for="txtEmail" class="control-label">Địa chỉ Email: </label>
					<div class="#">
						<input type="text" name="email" class="form-control" id="txtEmail" placeholder="Địa chỉ Email">
					</div>
				</div>
				<div class="form-group">
					<label for="txtPassword" class="control-label">Mật khẩu: </label>
					<div class="">
						<input type="password" name="password" class="form-control" id="txtPassword" placeholder="Mật khẩu">
					</div>
				</div>
				<div class="form-group">
					<a href="#"  data-toggle="modal" data-target=".forgot-modal" class="ion-help-circled">Quên mật khẩu?</a>
				</div>
				<div class="form-group">
					<div class="col-md-14">
						<div class="row">
							<div class="checkbox">
								<label><input type="checkbox" name="cbxremember">Ghi nhớ đăng nhập</label>
							</div>
						</div>
					</div>
					<div class="col-md-10">
						<div class="row">
							<button type="button" name="btnlogin" id="btnlogin" class="btn btn-primary col-xs-24">Đăng Nhập</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="login col-sm-12">
	<div class="box col-sm-24 col-md-22 col-md-offset-1">
		<h3>Đăng nhập bằng mạng xã hội</h3>
		<div class="login-form">
			<div class="social col-sm-8">
				<a href="#" class="btn btn-lg btn-block facebook">
					<span class="hidden-xs hidden-lg ion-social-facebook"></span>
					<span class="hidden-sm hidden-md">facebook</span>
				</a>
			</div>
			<div class="social col-sm-8">
				<a href="#" class="btn btn-lg btn-block googleplus">
					<span class="hidden-xs hidden-lg ion-social-googleplus"></span>
					<span class="hidden-sm hidden-md">google+</span>
				</a>
			</div>
			<div class="social col-sm-8">
				<a href="#" class="btn btn-lg btn-block twitter">
					<span class="hidden-xs hidden-lg ion-social-twitter"></span>
					<span class="hidden-sm hidden-md">twitter</span>
				</a>
			</div>
		</div>
	</div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-10 15:48:27
         compiled from "Views\templates\block\block-register.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55c8abab7b4831_31182373')) {function content_55c8abab7b4831_31182373($_smarty_tpl) {?><form action="#" method="post">
	<div class="register col-sm-12">
			<div class="box col-sm-24 col-md-22 col-md-offset-1">
				<h3>Thông tin đăng nhập</h3>
				<div class="register-form col-sm-22 col-sm-offset-1">
					<div class="form-group">
						<label for="txtEmail" class="control-label">Địa chỉ Email: </label>
						<div class="">
							<input type="email" name="txtemail" class="form-control" id="txtEmail" placeholder="Địa chỉ Email">
						</div>
					</div>
					<div class="form-group">
						<label for="txtPassword" class="control-label">Mật khẩu: </label>
						<div class="">
							<input type="password" name="txtpassword" class="form-control" id="txtPassword" placeholder="Mật khẩu">
						</div>
					</div>
					<div class="form-group">
						<label for="txtPassword" class="control-label">Nhập lại mật khẩu: </label>
						<div class="">
							<input type="password" name="txtrepassword" class="form-control" id="txtPassword" placeholder="Nhập lại mật khẩu">
						</div>
					</div>
					<div class="form-group">
						<div class="">
							<div class="g-recaptcha" data-sitekey="6Lf59AQTAAAAAGI14zRPFPzoUZOqnSietTWT6BQp"></div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<div class="register col-sm-12">
		<div class="box col-sm-24 col-md-22 col-md-offset-1">
			<h3>Thông tin khách hàng</h3>
			<div class="userinfo-form col-sm-22 col-sm-offset-1">
				<div class="form-group">
					<label for="txtHoten" class="control-label">Họ Tên: </label>
					<div class="">
						<input type="text" name="txtname" class="form-control" id="txtName" placeholder="Họ tên">
					</div>
				</div>
				<div class="form-group">
					<label for="txtEmail" class="control-label">Giới tính: </label>
					<label class="radio-inline">
						<input type="radio" name="rdbSex" id="inlineRadio1" value="0" checked> Nam
					</label>
					<label class="radio-inline">
						<input type="radio" name="rdbSex" id="inlineRadio2" value="1"> Nữ
					</label>
				</div>
				<div class="form-group">
					<label for="txtDiachi" class="control-label">Địa chỉ: </label>
					<div class="">
						<input type="text" name="txtaddress" class="form-control" id="txtAddress" placeholder="Địa chỉ">
					</div>
				</div>
				<div class="form-group">
					<label for="txtPhone" class="control-label">SĐT: </label>
					<div class="">
						<input type="phone" name="txtphone" class="form-control" id="txtPhone" placeholder="Số điện thoại">
					</div>
				</div>
				<div class="col-md-24">
					<div class="row">
						<button type="button" id="btnregister" name="btnregister" class="btn btn-primary col-xs-10">Đăng Kí</button>
						<button type="reset" class="btn btn-danger col-xs-10 col-xs-offset-4">Reset</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-10 15:48:27
         compiled from "Views\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55c8abab82f314_14072054')) {function content_55c8abab82f314_14072054($_smarty_tpl) {?><div class="container-fluid">
    <div class="row footer-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-24 col-md-15">
                    <div class="row">
                        <div class="col-sm-9 col-md-10 support">
                            <h3 class="title">Tổng đài hổ trợ - tư vấn</h3>
                            <h4 class="ion-ios-telephone">1800 0000<span>(ext)</span>1111</h4>
                            <h4 class="hn">0433.123.456</h4>
                            <h4 class="hcm">0833.123.456</h4>
                        </div>
                        <div class="col-sm-13 col-md-14 newletter">
                            <h3 class="title">ĐĂNG KÍ NHẬN BẢN TIN</h3>
                            <p>Nhận ngay voucher trị giá <span>100.000 VND</span>
                            </p>
                            <p>Nhận ngay những ưu đãi hấp dẫn và các xu hướng thời trang mới</p>
                            <div class="col-lg-24">
                                <div class="row">
                                    <form action="" method="post">
                                        <div class="input-group">
                                            <input name="txtregemail" type="text" class="form-control" placeholder="Địa chỉ email...">
                                            <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit">Đăng Kí</button>
                                        </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-24 col-md-9">
                    <div class="row">
                        <div class="col-sm-9 col-md-12 connect">
                            <h3 class="title">Kết nối</h3>
                            <ul class="clearfix">
                                <li><a href="#" class="icon ion-social-facebook"><span>facebook</span></a>
                                </li>
                                <li><a href="#" class="icon ion-social-googleplus"><span>google+</span></a>
                                </li>
                                <li><a href="#" class="icon ion-social-twitter"><span>twitter</span></a>
                                </li>
                                <li><a href="#" class="icon ion-social-youtube"><span>youtube</span></a>
                                </li>
                                <li><a href="#" class="icon ion-iphone"><span>mobile app</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="hidden-xs col-sm-13 col-md-12 payment">
                            <div class="row">
                                <div class="col-sm-12 col-md-24">
                                    <h3 class="title">Thanh Toán</h3>
                                    <div class="row">
                                        <div class="col-xs-24 col-md-24 logo">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/logo/mastercard.jpg" alt="" class="pull-left">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/logo/visa.jpg" alt="" class="pull-left">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/logo/paypal.jpg" alt="" class="pull-left">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-24">
                                    <h3 class="title">Vận Chyển</h3>
                                    <div class="row">
                                        <div class="col-xs-24 logo">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/logo/kerry.jpg" alt="" class="pull-left">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Publics/images/logo/viettelpost.jpg" alt="" class="pull-left">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row footer-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-24 col-sm-12 company">
                    <p>© 2013. Công ty Cổ phần ABC Việt Nam.</p>
                    <p>Số GCNDT: 123456789, cấp ngày 21/06/2012, nơi cấp: UBND thành phố Hồ Chí Minh.</p>
                    <p>Địa chỉ: 357, Lê Hồng Phong, Quận 10, TP.Hồ Chí Minh.</p>
                </div>
                <div class="col-sm-12 footer-nav">
                    <ul>
                        <li><a href="#">Thông tin</a>
                        </li>
                        <li><a href="#">Liên hệ</a>
                        </li>
                        <li><a href="#">Trợ giúp</a>
                        </li>
                        <li><a href="#">Điều Khoản & Điều Kiện</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-10 15:48:27
         compiled from "Views\templates\plugin.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55c8abab86f591_30264702')) {function content_55c8abab86f591_30264702($_smarty_tpl) {?><div id="plugin">
	<aside id="scroll" class="hidden-xs">
		<a href="#top" id="scrolltop"><i class="ion-android-arrow-dropup-circle"></i></a>
	</aside>
</div><?php }} ?>
