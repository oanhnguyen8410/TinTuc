<?php 
// session_start();
class UserController {
	public function get() {
		require '../../Model/admin/user.php';
		$userModel = new UserModel();
		$users = $userModel->get();
		require '../../View/admin/user/user.php';
		$userView = new UserView();
		$userView->showAllUser($users);
	}
	public function edit() {
		require '../../View/admin/user/user.php';
		$userView = new UserView();
		
		require '../../Model/admin/user.php';
		$userModel = new UserModel();
		
		if(isset($_GET['userId'])) {
			$userId = $_GET['userId'];
			$item = $userModel->getById($userId);
			$userView->editUser($item);

			if(isset($_POST['editUser'])) {
				$full_name = $_POST['full_name'];
				$username = $_POST['username'];
				$email = $_POST['email'];
				$tel = $_POST['tel'];
				$password = $_POST['password'];
				$confirm = $_POST['confirm'];
				$slug = $_POST['slug'];

				$result = $userModel->edit($userId, $full_name, $username, $email, $tel, $password, $confirm, $slug);
				echo("<script>alert('Cập nhật thành công!')</script>");
 				echo("<script>window.location = 'http://localhost/blog_thanthu/View/admin/?controller=user&action=get';</script>");
			}
		}

	}
	public function delete() {
		require '../../Model/admin/user.php';
		$userModel = new UserModel();
		if (isset($_GET['userId'])) {
			$userId = $_GET['userId'];
			$userModel->delete($userId);
			echo("<script>alert('Xóa thành công!')</script>");
 				echo("<script>window.location = 'http://localhost/blog_thanthu/View/admin/?controller=user&action=get';</script>");
			
		} 
		
	}
}
?>