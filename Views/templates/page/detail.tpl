{extends file="layout.tpl"}
{block name="title" prepend}{$detail.product_name}{/block}

{block name="image" prepend}{$path}/Publics/images/products/{$detail.product_id|lower}/{$detail.product_id}-1.jpg{/block}

{block name="navbar"}
	{include file="block/block-nav.tpl"}
{/block}

{block name="style"}
<link rel="stylesheet" href="{$path}/Publics/css/jquery.bxslider.css">
<link rel="image_src" href="{$path}/Publics/images/products/{$detail.product_id|lower}/{$detail.product_id}-1.jpg" />
{/block}


{block name="block-container"}{include file="block/block-container-two.tpl"}
{/block}

{block name="aside"}{include file="block/block-asidemenu.tpl"}
{/block}

{block name="content"}{include file="block/block-detail.tpl"}
{/block}

{block name="script"}<script src="{$path}/Publics/js/jquery.bxslider.min.js" type="text/javascript"></script>{/block}