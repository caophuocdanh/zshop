{if $detail}
<div class="col-lg-24 col-lg-offset-0 detailpage">
	<div class="col-xs-24 col-md-14 media">
		<div class="row">
			<div class="thumb">
				<div class="sliderthumb">
					{for $i=1 to $detail.imagelist}
					<div class="slide">
						<img src="{$path}/Publics/images/products/{$detail.product_id|lower}/{$detail.product_id|lower}-{$i}.jpg" alt="" class="img-responsive" title="{$detail.product_name}">
					</div>
					{/for}
				</div>
			</div>
			<div class="image">
				<img src="{$path}/Publics/images/products/{$detail.product_id|lower}/{$detail.image|lower}" alt="" title="" class="img-responsive">
			</div>
		</div>
	</div>
	<div class="col-xs-18 col-md-8 info">
		<div class="row">
			<div class="brand" id="brand">{$detail.brand_name}</div>
			<div class="product-title" id="product-title">{$detail.product_name}</div>
			<div class="price {if $detail.saleoff gt 0}old{/if}">{$detail.price|number_format:0} VNĐ</div>
			{if $detail.saleoff}<div class="saleoff">{if $detail.saleoff gt 0}GIẢM CÒN {$detail.saleoff|number_format:0} VNĐ{/if}</div>{/if}

			<form action="#" class="form-group shopcart">
				{if $size && $size[0].quatity != 0}
					<div for="selsize" class="size clearfix">CHỌN KÍCH CỠ
						<select name="selsize" id="selsize" class="selsize">
							<!-- <option value="">size</option> -->
							{foreach $size as $key => $item}
								{$disable = ''}
								{if $item.quatity == 0}
									{$disable = 'disabled'}
								{/if}
								<option value="{$item.size_id}" {$disable}>
									{if $item.size_id === '0'}Free Size{else}{$item.size_id}{/if}
									({$item.quatity})</option>
							{/foreach}
						</select>
					</div>
					<output>Hiện có {$size|@count} kích cỡ</output>
				{else}
					<p></em>Hết hàng</p>
				{/if}
				<input id="txtquatity" type="text" class="hidden" value="1">
				<button type="button" id="{if $size[0].quatity != 0}btnbuy{else}btnoffbuy{/if}" name="{$detail.id}_{if $detail.saleoff == 0}{$detail.price}{else}{$detail.saleoff}{/if}" class="btn btn-default">THÊM VÀO GIỎ HÀNG</button>
			</form>
		</div>
	</div>
	<div class="col-xs-6 col-md-2 social">
		<div class="row">
			<h5>CHIA SẼ</h5>
			<ul class="clearfix">
				<div class="fb-share-button" data-href="http://{$smarty.server.SERVER_NAME}{$smarty.server.REQUEST_URI}" data-layout="icon"></div>
				<li><a href="#" class="icon ion-social-facebook"></a></li>
				<li><a href="#" class="icon ion-social-googleplus"></a></li>
				<li><a href="#" class="icon ion-social-twitter"></a></li>
				<li><a href="#" class="icon ion-email"></a></li>
			</ul>
		</div>
	</div>
	<div class="col-xs-24 more">
		<div class="row">
			<div role="tabpanel">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#info" aria-controls="info" role="tab" data-toggle="tab">Thông Tin Sản Phẩm</a></li>
					<li role="presentation"><a href="#comment" aria-controls="comment" role="tab" data-toggle="tab">Bình Luận</a></li>
				</ul>

				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="info">{$detail.product_description|nl2br}</div>
					<div role="tabpanel" class="tab-pane" id="comment">
						<div class="fb-comments" data-href="http://{$smarty.server.SERVER_NAME}{$smarty.server.REQUEST_URI}" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{if $products|@count >0}
	<div class="col-xs-24 brandslider">
		<div class="row">
			<h3>SẢN PHẨM CÙNG LOẠI</h3>
			<div class="sliderbrand">
				{foreach $products as $key => $item}
					<div class="slide">
						<a href="{$path}/{$arrsex[$item.menu_id]}/{$menu.id[$item.menu_id][$item.parent_id].info.category_alias}/{$menu.id[$item.menu_id][$item.parent_id].sub[$item.category_id].info.category_alias}/{$item.product_alias}-{$item.id}.html">
							<img src="{$path}/Publics/images/products/{$item.product_id|lower}/{$item.image|lower}" alt="" class="img-responsive" title="{$item.product_name}">
							<div class="brand">{$item.brand_name}</div>
							<div class="product-title">{$item.product_name}</div>
							<div class="price {if $item.saleoff gt 0}old{/if}">{$item.price|number_format:0} VNĐ</div>
							<div class="saleoff">{if $item.saleoff gt 0}{$item.saleoff|number_format:0} VNĐ{/if}</div>
						</a>
					</div>
				{/foreach}
			</div>
		</div>
	</div>
	{/if}
</div>
{else}
<div class="col-lg-24 col-lg-offset-0 detailpage">
	<h4 class="text-center">Sản phẩm không tồn tại</h4>
</div>
{/if}