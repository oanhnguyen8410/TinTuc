<?php
class ImagesController {
	public function add() {
		require '../../View/admin/images/images.php';
		$imgView = new ImgView();
		$imgView->add();

		require '../../Model/admin/images.php';
		$imgModel = new ImgModel();
		$url = NULL;

		if(isset($_POST['addImg'])) {
			$url = $_POST['url_thumbnail'];
			if($url) {
				$imgModel->add($url);
				echo("<script>alert('Thêm thành công!')</script>");
 				echo("<script>window.location = 'http://localhost/blog_thanthu/View/admin/?controller=images&action=get';</script>");
			}
		}
	}
	public function get() {
		require '../../Model/admin/images.php';
		$imgModel = new ImgModel();
		$imgs = $imgModel->get();
		require '../../View/admin/images/images.php';
		$imgView = new ImgView();
		$imgView->get($imgs);
	}
	public function edit() {
		
		require '../../Model/admin/images.php';
		$imgModel = new ImgModel();
		$url= NULL;
		if(isset($_GET['imgId'])) {
			$imgId = $_GET['imgId'];
			$item = $imgModel->getById($imgId);
			require '../../View/admin/images/images.php';
			$imgView = new ImgView();
			$imgView->edit($item);

			if(isset($_POST['editImg'])) {
				$url = $_POST['url_thumbnail'];
				$imgModel->edit($url, $imgId);
				echo("<script>alert('Cập nhật thành công!')</script>");
 				echo("<script>window.location = 'http://localhost/blog_thanthu/View/admin/?controller=images&action=get';</script>");			}

		}
	}
	public function delete() {
		require '../../Model/admin/images.php';
		$imgModel = new ImgModel();
		if(isset($_GET['imgId'])) {
			$imgId = $_GET['imgId'];
			$imgModel->delete($imgId);
			echo("<script>alert('Xóa thành công!')</script>");
 				echo("<script>window.location = 'http://localhost/blog_thanthu/View/admin/?controller=images&action=get';</script>");
		}
	}

}
?>