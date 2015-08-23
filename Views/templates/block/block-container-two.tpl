{block name="block-two"}
	<div class="slidebar col-sm-6 col-md-5 col-lg-4">
		<div id="fixed">
			{if isset($sex)}
			<div class="row">
				<ul class="category">
					<li class="clearfix"><a href="{$path}/{$sex.alias}/san-pham-moi.html">HÀNG MỚI VỀ</a>
					</li>
					<li class="clearfix"><a href="{$path}/{$sex.alias}/san-pham-noi-bat.html">SẢN PHẨM NỔI BẬT</a>
					</li>
					<li class="clearfix"><a href="{$path}/{$sex.alias}/hot-deal.html">HOT DEALS</a>
					</li>
				</ul>
			</div>
			{/if}
			{block name="aside"}{/block}
		</div>
	</div>
	<div class="main col-sm-18 col-md-19 col-lg-20">
		<div class="row">
			<div class="breadcrumbs clearfix">
				{block name=breadcumb}{$breadcumb}{/block}
			</div>
			<div class="content clearfix">
				{block name="content"}
					{include file="block/block-productlist.tpl"}
				{/block}
			</div>
		</div>
	</div>
{/block}