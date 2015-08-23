<!DOCTYPE html>
<html lang="">
<head>
	{block name="head"}{include file="admin/head.tpl"}
	{/block}
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
	<script src="{$path}/Publics/js/less.min.js" type="text/javascript"></script>
	<script src="{$path}/Publics/js/bootstrap.min.js"></script>
	</body>
</html>