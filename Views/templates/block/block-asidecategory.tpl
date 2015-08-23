<div class="row hidden-xs">
	<h3>{$sex.alias}</h3>
	<ul class="category">
	{foreach $menu.alias[$sex.alias] as $key => $item}
		<li class="clearfix">
			<a href="{$path}/{$sex.alias}/{$item.info.category_alias}.html">{$item.info.category_name}</a>
		</li>
	{/foreach}
	</ul>
</div>