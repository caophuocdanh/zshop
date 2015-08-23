{extends file="layout.tpl"}
{block name="title" prepend}{$title} {if $sex.id eq 0}Nam{else}Nữ{/if}{/block}

{block name="navbar"}
	{include file="block/block-nav.tpl"}
{/block}

{block name="style"}<link rel="stylesheet" href="{$path}/Publics/css/jquery.bxslider.css">{/block}

{block name="block-container"}{include file="block/block-container-two.tpl"}
{/block}

{block name="aside"}
	{include file="block/block-asidecategory.tpl"}
{/block}

{block name="content"}{include file="block/block-product.tpl"}
{/block}

{block name="script"}<script src="{$path}/Publics/js/jquery.bxslider.min.js" type="text/javascript"></script>{/block}