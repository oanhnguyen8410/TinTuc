<?php 
class CategoryController {
	public function add() {
		require '../../View/admin/category/category.php';
		$cateView = new CateView();
		$cateView->addCate();

		require '../../Model/category/category.php';
		$cateModel = new CateModel();
		$name = $slug = NULL;
		

		if (isset($_POST['addCategory'])) {
			$name = $_POST ['name'];
			$slug = changeTitle($name);

			if($name) {
				$cateModel->add($name, $slug);
				echo("<script>alert('Thêm thành công!')</script>");
 				echo("<script>window.location = 'http://localhost/blog_thanthu/View/admin/?controller=category&action=get';</script>");
			}
		}
		
	}
	public function get() {
		
		require '../../Model/category/category.php';
		$cateModel = new CateModel();
		$categories = $cateModel->get();
	
		require '../../View/admin/category/category.php';
		$cateView = new CateView();
		$cateView->getCate($categories);
	}
	public function edit() {
		require '../../Model/category/category.php';
		$cateModel = new CateModel();
		$name = $slug = NULL;

		if(isset($_GET['categoryId'])) {
			$categoryId = $_GET['categoryId'];
			$categoryOld = $cateModel->getById($categoryId);
			require '../../View/admin/category/category.php';
		$cateView = new CateView();
		$cateView->editCate($categoryOld);
			if  (isset(($_POST['editCategory']))) {
				$name = $_POST['name'];
				$slug = changeTitle($name);
				$cateModel->edit($name, $slug, $categoryId);
				echo("<script>alert('Cập nhật thành công!')</script>");
 				echo("<script>window.location = 'http://localhost/blog_thanthu/View/admin/?controller=category&action=get';</script>");

			}
		}
	}
	public function delete() {
		require '../../Model/category/category.php';
		$cateModel = new CateModel();
		if(isset($_GET['categoryId'])) {
			$categoryId = $_GET['categoryId'];
			$cateModel->delete($categoryId);
			echo("<script>alert('Xóa thành công!')</script>");
 			echo("<script>window.location = 'http://localhost/blog_thanthu/View/admin/?controller=category&action=get';</script>");

		}
	}


}
?>


