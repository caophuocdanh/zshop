<script>
$(document).ready(function(){
	if ($('input[name="rbdconsignee"]:checked').val() == 1) {
		$('#different').removeClass().addClass("show");
	};
	$('input[name="rbdconsignee"]').change(function(){
		if ($(this).val() == 1) {
			$('#different').removeClass().addClass("show");
		}else{
			$('#different').removeClass().addClass("hidden");
		};
	});
	$("input,textarea").change(function(){
		$.ajax({
			url: "{$path}/gio-hang/temp.html", 
			type: 'POST',
			data: {
				"name":$('#txtname').val(),
				"phone":$('#txtphone').val(),
				"sex":$('input[name="radioSex"]:checked').val(),
				"address":$('#txtaddress').val(),
				"consignee":$('input[name="rbdconsignee"]:checked').val(),
				"note":$('#txtnote').val(),
				"name1":$('#txtname1').val(),
				"phone1":$('#txtphone1').val(),
				"address1":$('#txtaddress1').val(),
			},
			dataType: 'json',
			success: function(data){
				//alert(data['comment']);
			}
		});
	});
	$('#btnpayment').click(function(){
		$.ajax({
			url: "{$path}/gio-hang/checkpayment.html", 
			dataType: 'json',
			success: function(data){
				//window.location.href='{$path}/gio-hang/success.html';
				if (data['status']) {
					window.location.href='{$path}/gio-hang/success.html';
				}
				else{
					alert('Có lỗi xảy ra. Vui lòng kiểm tra lại giỏ hàng và đăng nhập tài khoản.');
					window.location.href='{$path}/gio-hang.html';
				};
			}
		});
	});
});
</script>

<div class="shopcartpage">
	<aside class="col-sm-11">
		<div class="row">
			<div class="customer">
				<h3>THÔNG TIN KHÁCH HÀNG</h3>
				<div class="form-group">
					<label for="txtname">Tên khách hàng</label>
					<input type="text" class="form-control" id="txtname" value="{if isset($smarty.session.temp)}{$smarty.session.temp.name}{else}{$smarty.session.customer.customer_name}{/if}">
				</div>
				<div class="form-group">
					<label for="txtphone">Số điện thoại</label>
					<input type="text" class="form-control" id="txtphone" value="{if isset($smarty.session.temp)}{$smarty.session.temp.phone}{else}{$smarty.session.customer.phone}{/if}">
				</div>
				<div class="form-group">
					<label for="txtphone">Giới tính: </label>
					<label class="radio-inline"><input type="radio" name="radioSex" value="0" {if isset($smarty.session.temp) && $smarty.session.temp.sex == 0} checked {elseif $smarty.session.customer.sex == 0} checked{/if}>Nam</label>
					<label class="radio-inline"><input type="radio" name="radioSex" value="1" {if isset($smarty.session.temp) && $smarty.session.temp.sex == 1} checked {elseif $smarty.session.customer.sex == 1} checked{/if}>Nữ</label>
				</div>
				<div class="form-group">
					<label for="txtaddress">Địa chỉ</label>
					<textarea type="text" class="form-control" id="txtaddress">{if isset($smarty.session.temp)}{$smarty.session.temp.address}{else}{$smarty.session.customer.address}{/if}</textarea>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="consignee">
				<h3>THÔNG TIN GIAO HÀNG</h3>
				<div class="form-group">
					<div class="radio">
						<label class="radio-inline"><input type="radio" name="rbdconsignee" value="0" checked>Giao hàng tới địa chỉ trên hóa đơn</label>
					</div>
					<div class="radio">
						<label class="radio-inline"><input type="radio" name="rbdconsignee" value="1" {if isset($smarty.session.temp) && $smarty.session.temp.consignee == 1}checked{/if}>Giao hàng tới địa chỉ khác</label>
					</div>
				</div>
				<div id="different" class="hidden">
					<div class="form-group">
						<label for="txtname">Tên khách hàng</label>
						<input type="text" class="form-control" id="txtname1" value="{if isset($smarty.session.temp)}{$smarty.session.temp.name1}{else}{$smarty.session.customer.customer_name}{/if}">
					</div>
					<div class="form-group">
						<label for="txtphone">Số điện thoại</label>
						<input type="text" class="form-control" id="txtphone1" value="{if isset($smarty.session.temp)}{$smarty.session.temp.phone1}{else}{$smarty.session.customer.phone}{/if}">
					</div>
					<div class="form-group">
						<label for="txtaddress">Địa chỉ</label>
						<textarea type="text" class="form-control" id="txtaddress1">{if isset($smarty.session.temp)}{$smarty.session.temp.address1}{else}{$smarty.session.customer.address}{/if}</textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="note">
				<h3>GHI CHÚ</h3>
				<textarea type="text" class="form-control" id="txtnote">{if isset($smarty.session.temp)}{$smarty.session.temp.note}{else}Liên hệ trước khi giao hàng. Giao hàng sau 17h...{/if}</textarea>
			</div>
		</div>
	</aside>
	<div class="shopcart col-sm-12 col-sm-offset-1">
		<div class="row">
			<header class="clearfix text-center primary">
				<div class="col-xs-4">Hình ảnh</div>
				<div class="col-xs-14">Thông tin</div>
				<div class="col-xs-6 text-right">Đơn giá</div>
			</header>
			<main>
				{$i=1}
				{$sumprice = 0}
				{if isset($smarty.session.detail)}
					{foreach $smarty.session.detail as $k => $v}
						{foreach $v.size as $key => $item}					
							<section class="clearfix">
								<div class="col-xs-4 image">
									<a href="{$path}/{$arrsex[$v.menu_id]}/{$menu.id[$v.menu_id][$v.parent_id].info.category_alias}/{$menu.id[$v.menu_id][$v.parent_id].sub[$v.category_id].info.category_alias}/{$v.product_alias}-{$v.id}.html">
										<img src="{$path}/Publics/images/products/{$v.product_id|lower}/{$v.image}" alt="" class='img-responsive'>
									</a>
								</div>
								<div class="col-xs-14 info">
									<p class="brand">
										<span>{$v.brand_name}</span>
									</p>
									<p class="product">
										<a href="{$path}/{$arrsex[$v.menu_id]}/{$menu.id[$v.menu_id][$v.parent_id].info.category_alias}/{$menu.id[$v.menu_id][$v.parent_id].sub[$v.category_id].info.category_alias}/{$v.product_alias}-{$v.id}.html">
											<span>{$v.product_name}</span>
										</a>
									</p>
									<p class="size">
										<span>Size: 
											{if $key === 0}Free Size{else}{$key}{/if}
										</span>
									</p>
								</div>
								<div class="col-xs-5 text-right price">
									<p class="hidden-xs"><span>{$item.quatity}</span> x <span>{$item.price|number_format:0}</span></p>
									<p><strong><span class="price">{($item.price*$item.quatity)|number_format:0}</span></strong> <span>VNĐ</span></p>
								</div>
							</section>
							{$sumprice = $sumprice + $item.price*$item.quatity}
						{/foreach}
					{/foreach}
				{else}
					<section class="text-center">Bạn chưa mua sản phẩm nào</section>
				{/if}
			</main>
			<footer>
				<div class="summary clearfix">
					<div class="sumprice clearfix">
						<span class="col-xs-12">Tổng cộng</span>
						<span class="price col-xs-9 text-right">{$sumprice|number_format:0}</span>
						<span class="col-xs-3">VNĐ</span>
					</div>
					<div class="shipping clearfix">
						<span class="col-xs-12">Phí vận chuyển</span>
						<span class="price col-xs-9 text-right">
							{if $sumprice <= 0 || $sumprice > 2000000} 0 {else} 30,000 {/if}
						</span>
						<span class="col-xs-3">VNĐ</span>
					</div>
					<div class="checkout clearfix">
						<span class="col-xs-12">Thành tiền</span>
						<span class="price col-xs-9 text-right">
							{if $sumprice <= 0 || $sumprice > 2000000} {$sumprice|number_format:0} 
							{else} {($sumprice+30000)|number_format:0} {/if}
						</span>
						<span class="col-xs-3">VNĐ</span>
					</div>
					<button id="btnpayment" class="btn btn-primary pull-right">Hoàn tất mua hàng</button>
				</div>
			</footer>
		</div>
	</div>
</div>