<div class="row">
	<h3>{$menu.alias[$sex.alias][$cat].info.category_name}</h3>
	<ul class="category">
	{foreach $menu.alias[$sex.alias][$cat].sub as $key => $item}
		<li class="clearfix">
			<a href="{$path}/{$sex.alias}/{$menu.alias[$sex.alias][$cat].info.category_alias}/{$item.info.category_alias}.html" class="{if isset($catid) && $catid == $key}active{/if}">{$item.info.category_name}</a>
		</li>
	{/foreach}
	</ul>
</div>