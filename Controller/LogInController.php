<?php
	session_start();
	class LoginController {
		public function loginUser() {

			require_once 'View/User/LogInView.php';
			$loginView = new LoginView();
			$loginView->formLogin();
			//gọi file modeluser 
		
		
			//kiểm tra nếu ng dùng ấn nút đăng nhập thì mới xử lý
			if (isset($_POST['btn_submit'])) {
				//lay thong tin ng dung
				$name = $_POST['username'];
				$pass = $_POST['password'];
				//lam sach thong tin, xoa bo cac tag html,..
				$name = strip_tags($name);
				$name = addslashes($name);
				$pass = strip_tags($pass);
				$pass = addslashes($pass);

				require_once('Model/User/LogInModel.php');
			$loginModel = new LoginModel();
			$status = $loginModel->loginUser($name, $pass);
		
			if ($status==0) {
				if($name == '' || $pass == '') {
					
					echo "<script>alert('Tên đăng nhập và mật khẩu không được để trống!')</script>";
				}else {
						
						echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng!')</script>";
					}
				}else {
					$_SESSION['username'] = $name;

					$value = $loginModel->checkUser($name, $pass);
					$slug = $value[7];
					// print_r($slug);
					$_SESSION['slug'] = $slug;
					
					
				}

			
				if ($status) {
					
					echo("<script>alert('Đăng nhập thành công!')</script>");
 				echo("<script>window.location = 'http://localhost/blog_thanthu/?controller=card&action=add';</script>");

				}
					
			

			require_once('View/User/LogInView.php');
			$loginView = new LoginView();
			$loginView->notifyLoginUser($status);
			
			
			
		}

		}	
	}
?>