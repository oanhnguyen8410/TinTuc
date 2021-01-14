<!DOCTYPE html>
<html>
<head>
	<title>Đăng ký</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="ico" href="View/thanthu/assets/images/frame1/favicon-head.ico">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
		.login {
			margin-left: 82%;
		}
		.signin {
			margin-left: 2%;
		}
		form {
			float: left;
			width: 41%;
    		margin-left: 29%;
		}
		form:before {
			content: '';
			background: url(Public/img/bg-slide-ds.png);
			background-size: 100% 100%;
			position: absolute;
			width: 602px;
		    height: 493px;
		    left: 26%;
		    top: 16%;
		    z-index: -1;
		}
		p {
			color: white;
			font-family: 'utm-cafeta';
			font-size: 20px;
			text-align: center;
			margin-top: -2px;
			text-shadow: 1px 2px 2px #000;
		}
		a {
			text-decoration: none;
		}
		h2 {
			float: left;
			color: white;
			text-shadow: 1px 2px 2px #000;
			width: 100%;
    		margin-top: 3%;
    		letter-spacing: 3px;
    		font-size: 25px;
    		text-align: center;
    		font-family: 'utm-cafeta';
		}
		.formadduser {
			margin-top: 16%;
		}
		.button {
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
		    margin-top: 5%;
		    font-size: 18px;
		    margin-left: 40%;

		}
		.button:hover {
			background: url(Public/img/bg-btn-link-hv.png);
			background-size: 100% 100%;
		}
		input {
			
			height: 25px;
			margin-top: 6%;
		}
		label {
			font-family: 'utm-cafeta';
			font-size: 20px;
			text-shadow: 1px 2px 2px #000;
			color: white;
			float: left;
			margin-top: 5%;
		}
		.fail {
			position: absolute;
			color: #ffc800;
			font-size: 14px;
			text-shadow: none;
			margin-top: 10%;
		}
		.w3-input {
			float: left;
			width: 69%;
			font-family: 'tahoma';
		}	
		/*.box {
			position: relative;
			height: 30px;
		}*/
	</style>
	<div class="btn login">
 		<a href="http://localhost/blog_thanthu/?controller=login&action=loginuser"><p>Đăng nhập</p></a>
 	</div>
 	<div class="btn signin">
 		<a href="http://localhost/blog_thanthu/?controller=signin&action=adduser"><p>Đăng ký</p></a>
 	</div>
	<form  action="?controller=signin&action=adduser"  method="POST">
		<h2>ĐĂNG KÝ TÀI KHOẢN</h2>
		<div class="formadduser">
	
				<label>Họ tên người dùng</label>

			<input class="w3-input w3-border w3-round" placeholder="Họ và tên" type="text" name="full_name" style="margin-left: 33px;" value="<?php echo isset($_POST['full_name']) ? $_POST['full_name'] : '' ?>" /><br>
				<p class="fail" style="top: 58px"><?php echo !empty($data['error']) && isset($data['error']['full_name']) ? $data['error']['full_name'] : ''  ?> </p>
		
		
			<label>Tên tài khoản</label>

			<input class="w3-input w3-border w3-round" placeholder="Tên tài khoản" type="text" name="username" style="margin-left: 58px;" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>" /><br>
			<p class="fail" style="top: 115px"><?php echo !empty($data['error']) && isset($data['error']['username']) ? $data['error']['username'] : ''  ?></p>
	
	
			<label>Email</label>
			<input class="w3-input w3-border w3-round" placeholder="Email" type="varchar" name="email" style="margin-left: 109px;" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"/><br>
			<p class="fail" style="top: 170px"><?php echo !empty($data['error']) && isset($data['error']['email']) ? $data['error']['email'] : ''?></p>
	
	
			<label>Số điện thoại</label>
			<input class="w3-input w3-border w3-round" placeholder="Số điện thoại" type="int" name="tel" style="margin-left: 63px;" value="<?php echo isset($_POST['tel']) ? $_POST['tel'] : '' ?>"/><br>
			<p class="fail" style="top: 229px"><?php echo !empty($data['error']) && isset($data['error']['tel']) ? $data['error']['tel'] : '' ?></p>

			<label>Mật khẩu</label>
			<input class="w3-input w3-border w3-round" placeholder="Mật khẩu" type="password" name="password" style="margin-left: 86px;" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>" /><br>
			<p class="fail" style="top: 286px"><?php echo !empty($data['error']) && isset($data['error']['password']) ? $data['error']['password'] : '' ?></p>

	
			<label>Xác nhận mật khẩu</label>
			<input class="w3-input w3-border w3-round" placeholder="Xác nhận mật khẩu" type="password" name="confirm" style="margin-left: 27px;" value="<?php echo isset($_POST['confirm']) ? $_POST['confirm'] : '' ?>" /><br>
			<p class="fail" style="top: 348px"><?php echo !empty($data['error']) && isset($data['error']['confirm']) ? $data['error']['confirm'] : '' ?></p>
		
			<input class="button" type="submit" name="add" value="Đăng ký" size="50"/>
			<a style=" margin-left: %; margin-top: 1%;font-size: 16px; text-decoration: underline; color: #FFE4B5" href="http://localhost/blog_thanthu/?controller=login&action=loginuser">Đăng nhập</a>
		</div>
	</form>
</body>
</html>