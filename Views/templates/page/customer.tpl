{extends file="layout.tpl"}
{block name="title" prepend}{$title}{/block}

{block name="block-container"}{include file="block/block-container-one.tpl"}
{/block}
{block name="content"}
	{if $page == 'login'}
		{include file="block/block-login.tpl"}
	{elseif $page == 'register'}
		{include file="block/block-register.tpl"}
	{elseif $page == 'info'}
		{include file="block/block-info.tpl"}
	{/if}
{/block}