{extends file="layout.tpl"}
{block name="title" prepend}Trang Chủ{/block}

{block name="style"}<link rel="stylesheet" href="{$path}/Publics/css/jquery.bxslider.css">
{/block}


{block name="block-container"}
{include file="block/block-container-one.tpl"}
{/block}

{block name="banner"}{include file="block/block-banner.tpl"}
{/block}

{block name="content"}{include file="block/block-index.tpl"}
{/block}

{block name="script"}<script src="{$path}/Publics/js/jquery.bxslider.min.js" type="text/javascript"></script>{/block}
