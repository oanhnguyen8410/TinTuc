<?php
class LinkController {
	public function add() {
		require '../../View/admin/link/link.php';
		$linkView = new LinkView();
		$linkView->add();

		require '../../Model/admin/link.php';
		$linkModel = new LinkModel();
		$name = $url_link = NULL;
		if (isset($_POST['addLink'])) {
			$name = $_POST ['name'];
			$url_link = $_POST ['url_link'];
			$linkModel->add($name, $url_link);
			echo("<script>alert('Thêm thành công!')</script>");
 			echo("<script>window.location = 'http://localhost/blog_thanthu/View/admin/?controller=link&action=get';</script>");
			
		}
	}
	public function get() {
		
		require '../../Model/admin/link.php';
		$linkModel = new LinkModel();
		$links = $linkModel->get();
		require '../../View/admin/link/link.php';
		$linkView = new LinkView();
		$linkView->get($links);
	}
	public function edit() {
		require '../../Model/admin/link.php';
		$linkModel = new LinkModel();
		$name = $url_link = NULL;

		if(isset($_GET['linkId'])) {
			$linkId = $_GET['linkId'];
			$item = $linkModel->getById($linkId);
			require '../../View/admin/link/link.php';
		$linkView = new LinkView();
		$linkView->edit($item);
			if  (isset(($_POST['editLink']))) {
				$name = $_POST['name'];
				$url_link = $_POST['url_link'];
				$linkModel->edit($name, $url_link, $linkId);
				echo("<script>alert('Cập nhật thành công!')</script>");
 			echo("<script>window.location = 'http://localhost/blog_thanthu/View/admin/?controller=link&action=get';</script>");

			}
		}
	}
	public function delete() {
		require '../../Model/admin/link.php';
		$linkModel = new LinkModel();
		if(isset($_GET['linkId'])) {
			$linkId = $_GET['linkId'];
			$linkModel->delete($linkId);
			echo("<script>alert('Xóa thành công!')</script>");
 			echo("<script>window.location = 'http://localhost/blog_thanthu/View/admin/?controller=link&action=get';</script>");
		}
	}
}
?>