{extends file="admin/page/category.tpl"}

{block name="container"}
<ul class="list-group">
	{foreach $menu as $key => $item}
		<li class="list-group-item">{$item.category_id} => {$item.category_name}</li>
	{/foreach}
</ul>
{/block}