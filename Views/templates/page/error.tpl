{extends file="layout.tpl"}
{block name="title" prepend}{$title}{/block}

{block name="navbar"}
	{foreach $nav[$sex] as $key => $item}
		{$menu[$key] = $item[0]}
	{/foreach}
	{include file="block/block-nav.tpl"}
{/block}

{block name="block-container"}{include file="block/block-container-two.tpl"}
{/block}

{block name="content"}{include file="block/404.tpl"}
{/block}