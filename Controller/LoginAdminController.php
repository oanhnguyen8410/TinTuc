<?php
	session_start();
	class LoginAdminController {
		public function loginAdmin() {

			require_once 'View/admin/Login_adminView.php';
			$login_adminView = new Login_adminView();
			$login_adminView->formLogin_admin();
			//gọi file modeluser 
		
			
			//kiểm tra nếu ng dùng ấn nút đăng nhập thì mới xử lý
			if (isset($_POST['login_admin'])) {
				//lay thong tin ng dung
				$admin_user = $_POST['admin_user'];
				$password = $_POST['password'];
				//lam sach thong tin, xoa bo cac tag html,..
			

			require_once('Model/admin/Login_adminModel.php');
			$login_adminModel = new Login_adminModel();
			$status = $login_adminModel->loginAdmin($admin_user, $password);
		
		
			if ($status==0) {
				if($admin_user == '' || $password == '') {
					echo 'Tên đăng nhập và mật khẩu không được để trống!'.'<br>';
				}else {
						echo "<script>alert('Bạn không được cấp quyền truy cập!')</script>";
					}
				}else {

					$_SESSION['admin_user'] = $admin_user;
					$value = $login_adminModel->checkAdmin($admin_user, $password);
					// print_r($value[6]);
				}
				if ($status) {
					
					header('Location: http://localhost/blog_thanthu/View/admin/?controller=admin&action=get');
					
				}
					
			

			require_once('View/admin/Login_adminView.php');
			$login_adminView = new Login_adminView();
			$login_adminView->notifyLoginAdmin($status);
			
			// print_r($status); die();
			
		} 
		}	
	}
?>