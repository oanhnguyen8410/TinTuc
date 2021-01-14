<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Nạp thẻ cào</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="ico" href="View/thanthu/assets/images/frame1/favicon-head.ico">
</head>
<body>
	<style type="text/css">
		@font-face {
		   font-family: 'utm-cafeta';
		   src: url(View/thanthu/assets/fonts/utm-cafeta.ttf);
		}
		body {
			background: url(Public/img/bg-homepage-pc.jpg);
			background-size: 100% auto;
			font-family: 'utm-cafeta';
		}
		form {
			float: left;
			width: 35%;
    		margin-left: 32%;
    		
		}
		form:before {
			content: '';
			background: url(Public/img/bg-slide-ds.png);
			background-size: 100% 100%;
			position: absolute;
			width: 506px;
		    height: 220px;
		    left: 30.5%;
		    top: 27%;
		    z-index: -1;
		}

		form:after {
			content: '';
			background: url(Public/img/pikachu1.png);
			background-size: 100% 100%;
			position: absolute;
			width: 110px;
		    height: 128px;
		    left: 61%;
		    top: 19%;
		    z-index: -1;
		}
		fieldset {
			border: none;
			margin-left: 6%;
		}
		label {
			font-family: 'utm-cafeta';
			font-size: 20px;
			text-shadow: 1px 2px 2px #000;
			color: white;
		}

		select {
			margin-left: 6%;
    		width: 76.8%;
    		height: 28px;
		}
		.seri-card {
			margin-left: 50px;
    		width: 76%;
    		height: 20px;
		}
		.code-card {
			margin-left: 32px;
			width: 76%;
			height: 20px;
		}
		.btn-addcard {
			
		}
		.btn {
			float: left;
			background: url(Public/img/bg-button-tg-mobile.png);
			background-size: 100% 100%;
			width: 90px;
			height: 30px;
			top: 30px;
			position: absolute;
		}
		.btn:hover {
			background: url(Public/img/bg-button-napthe-mobile.png);
			background-size: 100% 100%;
		} 
		a {
				text-decoration: none;
				color: white;
		}
		p {
			font-family: 'utm-cafeta';
			font-size: 20px;
			text-align: center;
			margin-top: -2px;
			text-shadow: 1px 2px 2px #000;
			color: white;
		}
		.title {
			float: left;
			color: white;
			text-shadow: 1px 2px 2px #000;
			width: 100%;
    		margin-top: 11%;
    		letter-spacing: 2px;
		}
		.login {
			right: 146px;
		}
		.signin {
			right: 30px;
		}
		.card  {
			margin-top: 2%;
		}
		.btn-addcard {
			background: url(Public/img/bg-button-tg.png);
			background-size: 100% 100%;
			border: none;
			font-family: 'utm-cafeta';
			text-shadow: 1px 2px 2px #000;
			color: white;
			font-size: 20px;
		    width: 80px;
		    height: 30px;
		    cursor: pointer;
		    margin-top: 2%;
		}
		.btn-addcard:hover {
			background: url(Public/img/bg-btn-link-hv.png);
			background-size: 100% 100%;
		}

	</style>

	<?php 
		if(isset($_SESSION['username']) && $_SESSION['username'] != NULL) {
 	?>
 		<p style="position: absolute; float: left;">Tài khoản: 
			<?php echo $_SESSION['username']?> 
		</p>
		<p style="position: absolute; top: 35px;">Số dư: 
		
			<?php echo $_SESSION['slug']?>
		VNĐ</p>
		<a style="position: absolute; top: 50px; left: 9px; top: 60px; text-decoration: underline;" href="http://localhost/blog_thanthu/?controller=login&action=loginuser">Thoát</a>

 <?php } ?>
 <?php  ?>
<?php
	if (empty($_SESSION['username'])):
?>

 	<div class="btn login">
 		<a href="http://localhost/blog_thanthu/?controller=login&action=loginuser"><p>Đăng nhập</p></a>
 	</div>
 	<div class="btn signin">
 		<a href="http://localhost/blog_thanthu/?controller=signin&action=adduser"><p>Đăng ký</p></a>
 	</div>

 	<?php
		endif;
	?>
 	<p class="title">NẠP THẺ CÀO TRỰC TUYẾN</p>
 
	<form method="POST" action="?controller=card&action=add">
		<fieldset>
		
		<div class="card">
			<label>Loại thẻ</label>

			<?php if(isset($_POST['name'])) { 
					$name = $_POST['name']; 
				}
				else {
					$name = null;
					}
				?> 

			<select name="name" >
				<option value="Viettel" 
				<?php if($name == 'Viettel') { 
					echo 'selected';
				}
				?>>Viettel</option>
				<option value="Mobiphone" <?php if($name == 'Mobiphone') { 
					echo 'selected';
				}
				?> >Mobiphone</option>
				<option value="Vinaphone" <?php if($name == 'Vinaphone') { 
					echo 'selected';
				}
				?> >Vinaphone</option>
			</select>
		</div>
		<div class="card">
			<label>Seri</label>
			<input class="seri-card" type="text" name="seri" value="<?php echo isset($_POST['seri']) ? $_POST['seri'] : ''?>"/>
		</div>
		<div class="card">
			<label>Mã thẻ</label>
			<input class="code-card" type="text" name="code" value="<?php echo isset($_POST['code']) ? $_POST['code'] : ''?>"/>
		</div>
		</fieldset>
		<center>
		
			<input class="btn-addcard" type="submit" name="button-card" value="Nạp thẻ" />
			
		</center>
		</form>

</body>
</html>