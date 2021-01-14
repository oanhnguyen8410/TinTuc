<?php
session_start();
	class SignInController {
		public function addUser() {
			require_once 'View/User/SignInView.php';
			$signInView =  new SignInView();
			$data= [];
			$error = $this->doAddUser();
			//print_r($error);
			$data['error'] = $error;
			$signInView->formSignIn($data);
		}
			
		public function doAddUser() {
			if(!isset($_POST['add'])) return;
			$fullname = $_POST['full_name'];
			$name = $_POST['username'];
			$email = $_POST['email'];
			$tel = $_POST['tel'];
			$pass = $_POST['password'];
			$conf = $_POST['confirm'];
			//check data
			$user = array(
				'full_name' => $fullname,
				'username' => $name,
				'email' => $email,
				'tel' => $tel,
				'password' => $pass,
				'confirm' => $conf,
			);
			//xử lý validate
			$error = array();
			require('./Lib/validate.php');
	   		if (empty($fullname)){
	        	$error['full_name'] = '* Bạn chưa nhập họ tên';	

	        }	
	   		if (empty($name)){
	        	$error['username'] = '* Bạn chưa nhập tên người dùng';	

	        }
	        if (empty($email)){
			        $error['email'] = '* Bạn chưa nhập email';
			    }else if (!is_email($email)){
			        $error['email'] = '* Email không đúng định dạng';
			}
			if (empty($tel)){
			        $error['tel'] = '* Bạn chưa nhập số điện thoại';
			        	
			    }
			     if (empty($pass)){
			        $error['password'] = '* Bạn chưa nhập mật khẩu';
			       
			    }
			    if (empty($conf)){
			        $error['confirm'] = '* Bạn cần nhập mật khẩu xác nhận';
			       	
			    }else if($pass !== $conf) {
			    	$error['confirm'] = '* Mật khẩu xác nhận không chính xác.'.'<br>';

			    	
			    } else {
			    	$_SESSION['username'] = $name;
			    }
			    if(count($error) > 0 ) { 
			    	echo "<script>alert('Đăng ký thất bại!')</script>";
			    	return $error;
			     } else {
			     	echo "<script>alert('Đăng ký thành công!')</script>";
			    	echo("<script>window.location = 'http://localhost/blog_thanthu/?controller=login&action=loginuser';</script>");
			     }
			
			//lưu dữ liệu vào database
			    require_once('Model/User/SignInModel.php');
				$signInModel = new SignInModel();
				$notice = $signInModel->addUser($user);
				// require_once 'View/User/SignInView.php';
				// $signInView =  new SignInView();
				// $signInView->notifyAddUser($notice);

				return $error;
		}
	}
?>