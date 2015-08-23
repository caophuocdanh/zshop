<div class="container-fluid">
	<div class="row navtop hidden-xs">
		<div class="container">
			<ul class="menutop pull-right">
				{if isset($smarty.session.customer)}
				<!-- <li class="user pull-left"><a href="#">{$smarty.session.customer.email}</a></li> -->
				<li role="presentation" class="dropdown user pull-left">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
						<span>{$smarty.session.customer.email}</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{$path}/quan-ly-tai-khoan.html">Thông tin tài khoản</a></li>
						<li><a href="#">Đổi mật khẩu</a></li>
						<li><a href="#" id="logout">Thoát</a></li>
					</ul>
				</li>
				{else}
					<li class="signin pull-left"><a href="#login" data-toggle="modal" data-target=".login-modal">Đăng Nhập</a></li>
					<li class="login pull-left"><a href="{$path}/dang-ki.html">Đăng Kí</a></li>
					<!-- <li class="login pull-left"><a href="#register" data-toggle="modal" data-target=".register-modal">Đăng Kí</a></li> -->
				{/if}
				<li class="question pull-left"><a href="{$path}/help.html">Hỏi Đáp</a></li>
				<li class="contact pull-left"><a href="{$path}/contact.html">Liên Hệ</a></li>
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
					Bạn chưa có tài khoản. <a href="{$path}/dang-ki.html">Đăng kí</a> ngay để nhận được nhiều ưu đãi từ zShop.vn.
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
					<a href="{$path}" class="logoshop"></a>
				</div>
				<div class="sex col-xs-8 col-sm-6 col-md-6">
					<a href="{$path}/men.html">
						<div class="male col-xs-12 {if isset($sex) && $sex.id==0}active{/if}">
							<span class="icon ion-man">Nam</span>
						</div>
					</a>
					<a href="{$path}/women.html">
						<div class="female col-xs-12 {if isset($sex) && $sex.id==1}active{/if}">
							<span class="icon ion-woman">Nữ</span>
						</div>
					</a>
				</div>
				<div class="search hidden-xs col-sm-8 col-md-8">
					<form action="{$path}/tim-kiem.html&key=a&category=5&brand=2401&from=200000&to=300000" method="post">
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
					<a href="{$path}/gio-hang.html">
						<span class="text">Giỏ Hàng</span>
						<span class="bubble ion-ios-chatbubble" id="sumQuatity">{$sumQuatity}</span>
					</a>
				</div>
			</div>
		</div>
		{block name="navbar"}{/block}
	</div>
</div>