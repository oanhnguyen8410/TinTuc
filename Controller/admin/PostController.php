<?php
// session_start();
class PostController {
	public function get()
	{
		require '../../Model/news/news.php';
		$newsModel = new NewsModel();
		$posts = $newsModel->get();
		
		require '../../View/admin/posts/posts.php';
		$newsView = new PostView();
		$newsView->showAllNews($posts);
		

		
	}
	public function list() {
		require '../../Model/news/news.php';
		$newsModel = new NewsModel();
		$posts = $newsModel->list();
		require '../../View/admin/posts/posts.php';
		$newsView = new PostView();
		$newsView->listNews($posts);

	}
	public function listId() {
		require '../../Model/news/news.php';
		$newsModel = new NewsModel();
		$posts = $newsModel->list();
		require '../../View/admin/posts/posts.php';
		$newsView = new PostView();
		if(isset($_GET['postId'])) {
			$postId = $_GET['postId'];
		
			$item = $newsModel->getById($postId);
			$newsView->newsID($item);
		}
	}
	public function add() {
	require '../../View/admin/posts/posts.php';
		$newsView = new PostView();
		
		require '../../Model/category/category.php';
		$cateModel = new CateModel();
		require '../../Model/news/news.php';
		$newsModel = new NewsModel();
		$categories = $cateModel->get();
		$newsView->addnews($categories);
		
		
		if(!isset($_POST['addNews'])) return;
		$title 			= $_POST['title'];
		$categoryId = $_POST['category_id'];
		$content 		= $_POST['content'];
		$urlThumbnail 	= $_POST['url_thumbnail'];
		$tag 			= $_POST['tag'];
		
		$post = array(
				'title' => $title,
				'category_id' => $categoryId,
				'content' => $content,
				'url_thumbnail' => $urlThumbnail,
				'tag' => $tag,
				
			);
		// 	require '../../Model/news/news.php';
		// $newsModel = new NewsModel();
			$status = $newsModel->add($post);
			if($status) {
				echo("<script>alert('Thêm thành công!')</script>");
 			echo("<script>window.location = 'http://localhost/blog_thanthu/View/admin/?controller=post&action=get';</script>");
			}
	

	}
	public function edit() {
		require '../../Model/news/news.php';
		$newsModel = new NewsModel();
		require '../../Model/category/category.php';
		$cateModel = new CateModel();
		if(isset($_GET['postId'])) {
			$postId = $_GET['postId'];
			$categories = $cateModel->get();
			$item = $newsModel->getById($postId);
			require '../../View/admin/posts/posts.php';
		$newsView = new PostView();
			$newsView->editnews($item, $categories);

			if (isset($_POST['editNews'])) {
				$title = $_POST['title'];
				$categoryId = $_POST['category_id'];
				$content = $_POST['content'];
				$url_thumbnail = $_POST['url_thumbnail'];
				$tag = $_POST['tag'];
				$result = $newsModel->edit($postId, $title, $categoryId, $content, $url_thumbnail, $tag);

				echo("<script>alert('Cập nhật thành công!')</script>");
 				echo("<script>window.location = 'http://localhost/blog_thanthu/View/admin/?controller=post&action=get';</script>");
			}
		}

	}

	public function delete() {
		require '../../Model/news/news.php';
		$newsModel = new NewsModel();
		if (isset($_GET['postId'])) {
			$postId = $_GET['postId'];
			$newsModel->delete($postId);
			echo("<script>alert('Xóa thành công!')</script>");
 				echo("<script>window.location = 'http://localhost/blog_thanthu/View/admin/?controller=post&action=get';</script>");
		} 
		
	}
	public function News() {
		require '../../Model/news/news.php';
		$newsModel = new NewsModel();
		$posts = $newsModel->getnews();
		require '../../View/admin/posts/posts.php';
		$newsView = new PostView();
		$newsView->listNews($posts);
	}
	public function Events() {
		require '../../Model/news/news.php';
		$newsModel = new NewsModel();
		$posts = $newsModel->getevents();
		require '../../View/admin/posts/posts.php';
		$newsView = new PostView();
		$newsView->listNews($posts);
	}
	public function Guide() {
		require '../../Model/news/news.php';
		$newsModel = new NewsModel();
		$posts = $newsModel->getguide();
		require '../../View/admin/posts/posts.php';
		$newsView = new PostView();
		$newsView->listNews($posts);
	}
	public function Feature() {
		require '../../Model/news/news.php';
		$newsModel = new NewsModel();
		$posts = $newsModel->getfeature();
		require '../../View/admin/posts/posts.php';
		$newsView = new PostView();
		$newsView->listNews($posts);
	}
		
}