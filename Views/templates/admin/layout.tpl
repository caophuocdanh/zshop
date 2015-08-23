<!DOCTYPE html>
<html lang="">
	<head>
		{block name="head"}{include file="admin/head.tpl"}
		{/block}
	</head>
	<body>
		<!-- header -->
		<header>
			{block name="header"}{include file="admin/header.tpl"}
			{/block}
		</header>
		<!-- end header -->

		<!-- container -->
		<main style="margin-top:55px;">
			{block name="container"}{include file="admin/container.tpl"}
			{/block}
		</main>
		<!-- end container -->

		<!-- footer -->
		<footer>
			{block name="footer"}{include file="admin/footer.tpl"}
			{/block}
		</footer>
		<!-- end footer -->

		<!-- plugin -->
		{block name="plugin"}{include file="admin/plugin.tpl"}
		{/block}
		<!-- end plugin -->

		<!-- Script -->
		<script src="{$path}/Publics/js/less.min.js" type="text/javascript"></script>
		<script src="{$path}/Publics/js/bootstrap.min.js"></script>
		<script src="{$path}/Publics/js/jquery.nicescroll.min.js"></script>
		{block name="script"}{/block}
		<script src="{$path}/Publics/js/script.js"></script>

		<div id="fb-root"></div>
		<script>
		// (function(d, s, id) {
		// 	var js, fjs = d.getElementsByTagName(s)[0];
		// 	if (d.getElementById(id)) return;
		// 	js = d.createElement(s); js.id = id;
		// 	js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3";
		// 	fjs.parentNode.insertBefore(js, fjs);
		// }(document, 'script', 'facebook-jssdk'));
		</script>
	</body>
</html>