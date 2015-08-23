<div class="shopcartpage">
	<div class="bill col-sm-20 col-sm-offset-2">
		<div class="row">
			<div class="customer col-sm-12">
				<h3>Thông tin khách hàng</h3>
				<p>Họ Tên: {$smarty.session.customer.customer_name}</p>
				<p>Địa chỉ: {$smarty.session.customer.address}</p>
				<p>SĐT: {$smarty.session.customer.phone}</p>
			</div>
			<div class="delivery col-sm-12">
				<h3>Thông tin giao hàng</h3>
				<p>Họ Tên: {$smarty.session.temp.name1}</p>
				<p>Địa chỉ: {$smarty.session.temp.address1}</p>
				<p>SĐT: {$smarty.session.temp.phone1}</p>
				<p>Ghi chú: {$smarty.session.temp.note}</p>
			</div>
		</div>
		<div class="row">
			<div class="order col-xs-24">
				<h3>THÔNG TIN ĐƠN HÀNG</h3>
				<div class="table text-center">
					<div class="head info clearfix">
						<div class="col-xs-1">#</div>
						<div class="col-xs-10">Sản phẩm</div>
						<div class="col-xs-4">Size</div>
						<div class="col-xs-4">Số Lượng</div>
						<div class="col-xs-5">Đơn Giá</div>
					</div>
					<div class="content">
						{$i=1}
						{$sum=0}
						{foreach $smarty.session.detail as $key => $item}
							{foreach $item.size as $k => $v}
							<div class="line clearfix">
								<div class="col-xs-1">{$i++}</div>
								<div class="col-xs-10">{$item.product_name}</div>
								<div class="col-xs-4">{$k}</div>
								<div class="col-xs-4">{$v.quatity}</div>
								<div class="col-xs-5 text-right">{$v.price|number_format:0} VNĐ</div>
							</div>
							{$sum=$sum+$v.price}
							{/foreach}
						{/foreach}
					</div>
					<div class="foo text-right">
						<div class="price">Tổng cộng: <span class="red">{$sum|number_format:0} VNĐ</div>
						<div class="ship">Phí vận chuyển: <span class="red">{if $sum > 2000000}miễn phí{else}30.000{/if} VNĐ</div>
						<div class="sumprice">Thành tiền: <span class="red">{if $sum > 2000000}{$sum|number_format:0}{else}{($sum+30000)|number_format:0}{/if} VNĐ</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
	$.ajax({
		url: "{$path}/gio-hang/checkout.html", 
		dataType: 'json',
		success: function(data){
			alert('Đặt hàng thành công.\nThông tin đặt hàng đã được gởi tới email '+data['email']);
		}
	});
});
</script>