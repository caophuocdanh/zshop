{extends file="layout.tpl"}
{block name="title" prepend}{$title}{/block}

{block name="block-container"}{include file="block/block-container-two.tpl"}
{/block}

{block name="content"}{include file="block/block-productlist.tpl"}
{/block}