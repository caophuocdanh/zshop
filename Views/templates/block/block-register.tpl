<form action="#" method="post">
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
