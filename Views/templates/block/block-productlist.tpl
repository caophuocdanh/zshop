<div class="text-right">{if isset($page)}{$page}{/if}</div>
{if $products|@count neq 0}
	<ul class="product-show clearfix">
		{foreach $products as $key => $item}
		<li class="product col-xs-8 col-sm-8 col-lg-6">
			<a href="{$path}/{$arrsex[$item.menu_id]}/{$menu.id[$item.menu_id][$item.parent_id].info.category_alias}/{$menu.id[$item.menu_id][$item.parent_id].sub[$item.category_id].info.category_alias}/{$item.product_alias}-{$item.id}.html">
				<div class="box">
					<img class="img-responsive" src="{$path}/Publics/images/products/{$item.product_id}/{$item.image}" alt="" title="{$item.product_name}">
					<div class="brand">{$item.brand_name}</div>
					<div class="product-title">{$item.product_name}</div>
					<div class="price {if $item.saleoff gt 0}old{/if}">{$item.price|number_format:0} VNĐ</div>
					<div class="saleoff">{if $item.saleoff gt 0}GIẢM CÒN {$item.saleoff|number_format:0} VNĐ{/if}</div>
				</div>
			</a>
		</li>
		{/foreach}
	</ul>
{else}
	<p class="text-center">Chưa có sản phẩm.</p>
{/if}
<div class="text-right">{if isset($page)}{$page}{/if}</div>