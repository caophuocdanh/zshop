<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{block name="title"} | {$default_title}{/block}</title>
<meta name="description" content="{block name='description'}{$description}{/block}" />

<!-- Style -->
<!-- <link rel="stylesheet/less" type="text/css" href="{$path}/Publics/less/style.less" /> -->
<link rel="stylesheet" href="{$path}/Publics/css/style.css">
<link rel="stylesheet" href="{$path}/Publics/css/bootstrap.css">
<link rel="stylesheet" href="{$path}/Publics/css/ionicons.min.css">
{block name="style"}{/block}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="{$path}/Publics/js/html5shiv.js"></script>
	<script src="{$path}/Publics/js/respond.min.js"></script>
<![endif]-->

<script src="{$path}/Publics/js/jquery.1.11.2.min.js" type="text/javascript"></script>

<script>
	$(document).ready(function(){
		$('#btnbuy').click(function(){
			var value = $('#btnbuy').attr('name');
			var product = "<strong>"+$('#product-title').text() +"</strong> ("+ $('#brand').text()+")";
			$.ajax({
				url: "{$path}/gio-hang/them.html", 
				type: 'POST',
				data: { "info":value, "size":$('#selsize').val(), "quatity":$('#txtquatity').val() },
				dataType: 'json',
				success: function(data){
					$('#sumQuatity').text(data['quatity']);
					var html = "<div class='addItem'> Thêm thành công sản phẩm: <h5>"+ product +"</h5></div>";
					$('#plugin').fadeOut(0).append(html).fadeIn(500);
					$('.addItem').fadeIn(0).delay(2000).fadeOut(500);
				}
			});
		});

		$('#logout').click(function(){
			$.ajax({
				url: "{$path}/thoat.html", 
				success: function(){
					location.reload();
				}
			});
		});

		$('#btnlogin').click(function(){
			console.log($('#txtEmail').val()+'--'+$('#txtPassword').val());
			$.ajax({
				url: "{$path}/login.html", 
				type: 'POST',
				data: {
					"email":$('#txtEmail').val(),
					"password":$('#txtPassword').val()
				},
				dataType: 'json',
				success: function(data){
					alert(data['comment']);
					if (data['status']) {
						location.reload();
					};
				}
			});
		});

		$('#btnloginmodal').click(function(){
			$.ajax({
				url: "{$path}/login.html", 
				type: 'POST',
				data: {
					"email":$('#txtEmailModal').val(),
					"password":$('#txtPasswordModal').val()
				},
				dataType: 'json',
				success: function(data){
					alert(data['comment']);
					if (data['status']) {
						location.reload();
					};
				}
			});
		});

		$('#btnregister').click(function(){
			$.ajax({
				url: "{$path}/register.html", 
				type: 'POST',
				data: {
					"email":$('#txtEmail').val(),
					"password":$('#txtPassword').val(),
					"name":$('#txtName').val(),
					"sex":$('input[name="rdbSex"]:checked').val(),
					"address":$('#txtAddress').val(),
					"phone":$('#txtPhone').val(),
				},
				dataType: 'json',
				success: function(data){
					alert(data['comment']);
				}
			});
		});
	});
</script>