{extends file="layout.tpl"}
{block name="title" prepend}{$title}{if isset($catid)}{$menu.alias[$sex.alias][$cat].sub[$catid].info.category_name}{else}{if isset($cat)}{$menu.alias[$sex.alias][$cat].info.category_name}{/if}{/if}
{/block}

{block name="navbar"}
	{include file="block/block-nav.tpl"}
{/block}

{block name="block-container"}{include file="block/block-container-two.tpl"}
{/block}

{block name="aside"}
{if isset($cat)}
	{include file="block/block-asidemenu.tpl"}
{else}
	{include file="block/block-asidecategory.tpl"}
{/if}
{/block}

{block name="content"}{include file="block/block-productlist.tpl"}
{/block}
