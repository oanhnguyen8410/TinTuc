<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="ico" href="View/thanthu/assets/images/frame1/favicon-head.ico">
	 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
			<?php
		

		if(isset($_SESSION['username']) && $_SESSION['username'] != NULL){
		    unset($_SESSION['username']);
		    
		}

		?>
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
/*
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
		}*/
		fieldset {
			
    		margin-left: 6%;
    		border: none;
		}
		.btn {
			float: left;
			background: url(Public/img/bg-button-tg-mobile.png);
			background-size: 100% 100%;
			width: 90px;
			height: 30px;
			margin-top: 20px;
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
		}
		.title {
			float: left;
			color: white;
			text-shadow: 1px 2px 2px #000;
			width: 100%;
    		margin-top: 7%;
    		letter-spacing: 3px;
    		font-size: 25px;
		}
		.login {
			margin-left: 82%;
		}
		.signin {
			margin-left: 2%;
		}
		label {
			font-family: 'utm-cafeta';
			font-size: 20px;
			text-shadow: 1px 2px 2px #000;
			color: white;
			float: left;
		}
		.name {
			margin-left: 7%;
			width: 62%;
			height: 25px;
			float: left;
		    margin-top: 1%;
		    letter-spacing: 1px;
		    font-family: 'tahoma';
		}
		.pass  {
			margin-left: 14.5%;
			width: 62%;
			height: 25px;
			float: left;
    		margin-top: 2%;
		}
		.formlogin {
			margin-top: 3%;
		}
		.password {
			margin-top: 4%;
		}
		.btn-login {
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
		    margin-top: 6%;
		    font-size: 18px;
		    float: left;
		    margin-left: 37%;
		}
		.btn-login:hover {
			background: url(Public/img/bg-btn-link-hv.png);
			background-size: 100% 100%;
		}
 	</style>
	<div class="btn login">
 		<a href="http://localhost/blog_thanthu/?controller=login&action=loginuser"><p>Đăng nhập</p></a>
 	</div>
 	<div class="btn signin">
 		<a href="http://localhost/blog_thanthu/?controller=signin&action=adduser"><p>Đăng ký</p></a>
 	</div>
	<p class="title">ĐĂNG NHẬP</p>
	<form method="POST" action="?controller=login&action=loginUser">
		<fieldset>
			<div class="formlogin">
			<label>Tên đăng nhập</label>
			<input class="w3-input w3-border w3-round name" type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>" /><br>
		</div>
		<div class="formlogin password" >
			<label class="txt-pass">Mật khẩu</label>
			<input type="password" name="password" class="pass w3-input w3-border w3-round" /><br>
		</div>
	
			<input class="btn-login " type="submit" name="btn_submit" value="Đăng nhập"/>
			
			

		<p style="color: white; font-size: 15px; float: left; margin-left: 31%; margin-top: 2%; text-shadow: none;">Chưa có tài khoản?</p>
			<a style="float: left; margin-left: 2%; margin-top: 1%;font-size: 18px; text-decoration: underline; color: #FFE4B5" href="http://localhost/blog_thanthu/?controller=signin&action=adduser">Đăng ký</a>
		</fieldset>
	</form>
	
</body>
</html>