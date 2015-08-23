<script>
	$(document).ready(function(){
		$('#btnpayment').click(function(){
			$.ajax({
				url: "{$path}/checklogin.html", 
				dataType: 'json',
				success: function(data){
					if (data['status'] == false) {
						$('.login-modal').modal('show');
					}else{
						window.location.href=data['url'];
					};
				}
			});
		});
		$('#btnclear').click(function(){
			$.ajax({
				url: "{$path}/gio-hang/clear.html", 
				dataType: 'json',
				success: function(data){
					location.reload();
				}
			});
		});
		$('.btndel').click(function(){
			$.ajax({
				url: "{$path}/gio-hang/huy.html", 
				type: 'POST',
				data: {
					"name": $(this).attr('name'),
					"code": $(this).attr('code')
				},
				dataType: 'json',
				success: function(data){
					location.reload();
				}
			});
		});

		$('.txtquatity').change(function(){
			$.ajax({
				url: "{$path}/gio-hang/cap-nhat.html", 
				type: 'POST',
				data: {
					"name": $(this).attr('name'),
					"code": $(this).attr('code'),
					"quatity": $(this).val()
				},
				dataType: 'json',
				success: function(data){
					location.reload();
				}
			});
		});
	});
</script>

<div class="shopcartpage">
	<div class="shopcart col-sm-15">
		<div class="row">
			<header class="clearfix text-center">
				<div class="col-xs-1">#</div>
				<div class="col-xs-4">Hình ảnh</div>
				<div class="col-xs-8">Thông tin</div>
				<div class="col-xs-5">Số lượng</div>
				<div class="col-xs-6 text-right">Đơn giá</div>
			</header>
			<main>
				{$i=1}
				{$sumprice = 0}
				{if isset($smarty.session.detail)}
					{foreach $smarty.session.detail as $k => $v}
						{foreach $v.size as $key => $item}					
							<section class="clearfix">
								<div class="col-xs-1 ai">{$i++}</div>
								<div class="col-xs-4 image">
									<a href="{$path}/{$arrsex[$v.menu_id]}/{$menu.id[$v.menu_id][$v.parent_id].info.category_alias}/{$menu.id[$v.menu_id][$v.parent_id].sub[$v.category_id].info.category_alias}/{$v.product_alias}-{$v.id}.html">
										<img src="{$path}/Publics/images/products/{$v.product_id|lower}/{$v.image}" alt="" class='img-responsive'>
									</a>
								</div>
								<div class="col-xs-8 info">
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
									<p class="remove">
										<a href="" name="item_{$smarty.now|date_format:'%S' * $v.id}_{$key}" code="{$smarty.now|date_format:'%S'}" class="btndel"><em>×</em><span>Bỏ sản phẩm</span></a>
									</p>
								</div>
								<div class="col-xs-5 text-center">
									<input class="txtquatity" name="item_{$smarty.now|date_format:'%S' * $v.id}_{$key}" code="{$smarty.now|date_format:'%S'}" type="number" value="{$item.quatity}" min="1" max="10" maxlengh="2">
								</div>
								<div class="col-xs-6 text-right price">
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
		</div>
	</div>
	<div class="summary col-sm-8 col-sm-offset-1 clearfix">
		<h3>Đơn Hàng</h3>
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
		<button id="btnpayment" class="btn btn-primary pull-right">Thanh Toán</button>
		<button id="btnclear" class="btn btn-danger pull-right">Xóa giỏ hàng</button>
	</div>
</div>