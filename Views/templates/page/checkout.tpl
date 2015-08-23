{extends file="layout.tpl"}
{block name="title" prepend}{$title}{/block}

{block name="block-container"}{include file="block/block-container-one.tpl"}
{/block}
{block name=breadcumb}{/block}

{block name="content"}{include file="block/block-checkout.tpl"}
{/block}