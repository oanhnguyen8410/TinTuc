<?php
class AdminController {
	public function get() {
		require '../../Model/news/news.php';
		$newsModel = new NewsModel();
		$posts = $newsModel->get();
		$slnews = count($posts);

		require '../../Model/category/category.php';
		$cateModel = new CateModel();
		$categories = $cateModel->get();
		$slcates = count($categories);

		require '../../Model/admin/user.php';
		$userModel = new UserModel();
		$users = $userModel->get();
		$slusers = count($users);

		require '../../Model/admin/images.php';
		$imgModel = new ImgModel();
		$imgs = $imgModel->get();
		$slimgs = count($imgs);

		require '../../Model/admin/link.php';
		$linkModel = new LinkModel();
		$links = $linkModel->get();
		$sllinks = count($links);

		require '../../Model/admin/cards.php';
		$cardModel = new CardModel();
		$cards = $cardModel->get();
		$slcard = count($cards);

		require '../../Model/admin/pokemon.php';
		$pokeModel = new PokeModel();
		$pokes = $pokeModel->get();
		$slpoke = count($pokes);

		require '../../View/admin/pages/home.php';
		$adminView = new AdminView();
		$adminView->home($slnews, $slcates, $slusers, $slimgs, $sllinks, $slcard, $slpoke);
	}
	public function update() {
		require '../../Model/admin/account_admin.php';
		$adminModel = new AdminModel();
		$admins = $adminModel->get();
		require '../../View/admin/account_admin/account_admin.php';
		$updateAdmin = new updateAdmin();
		$updateAdmin->get($admins);
	}
	public function edit() {

		require '../../Model/admin/account_admin.php';
		$adminModel = new AdminModel();
		$admins = $adminModel->get();
		require '../../View/admin/account_admin/account_admin.php';
		$updateAdmin = new updateAdmin();
		$updateAdmin->edit($admins);

		if(isset($_POST['editAdmin'])) {
			$name = $_POST['full_name'];
			$admin_user = $_POST['admin_user'];
			$email = $_POST['email'];
			$tel = $_POST['tel'];
			$password = $_POST['password'];
			$confirm = $_POST['confirm'];

			// $full_name = $_SESSION['full_name'];
			$result = $adminModel->edit($name, $admin_user, $email, $tel, $password, $confirm);
			echo("<script>alert('Cập nhật thành công!')</script>");
 			echo("<script>window.location = 'http://localhost/blog_thanthu/View/admin/?controller=admin&action=update';</script>");
		}
		
	}

}
?>