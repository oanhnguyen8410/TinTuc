<?php
	class SignInView {
		public function formSignIn($data) {
			require_once 'Templates/formSignIn.php';
		}
		public function notifyAddUser ($notice) {
			  			if($notice) {
				echo "<p style='color:blue; float: right'>" . 'Đăng ký thành công, <a href="http://localhost:8080/blog_thanthu/?controller=login&action=loginuser">Bấm vào đây để quay lại trang chủ</a>' . "</p>";

			}else {
				echo 'Đăng ký không thành công';
			}
		}
	}
?>