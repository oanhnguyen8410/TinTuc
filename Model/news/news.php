<?php
	require_once '../../Model/DbModel.php';
	class NewsModel extends DbModel {
		public function get() {
			
			$con = $this->connect();

			$result = $con->query('SELECT * FROM news');
			$posts = array();

			if($result->num_rows > 0) {
				while($post = mysqli_fetch_assoc($result)) {
					$posts[]= $post;
				}
			}
			return $posts;
		}
		public function list() {
		
			$con = $this->connect();

			$result = $con->query('SELECT * FROM news');
			$posts = array();

			if($result->num_rows > 0) {
				while($post = mysqli_fetch_assoc($result)) {
					$posts[]= $post;
				}
			}
			return $posts;
		}
		public function add($post) {
			
			$con = $this->connect();
			
			$time = date('Y-m-d H:i:s');
			$sql = "INSERT INTO `news` (`id`, `title`, `category_id`, `content`, `time`, `url_thumbnail`, `tag`) VALUES (NULL, '" . $post['title'] . "', '" . $post['category_id'] . "','" . $post['content'] . "', '" . $time ."', '". $post['url_thumbnail'] ."', '". $post['tag'] ."');";

			$rs = $con->query($sql);
			return $rs;

		}
		public function getById($postId) {
		
			$con = $this->connect();
			$sql = "SELECT * FROM news WHERE id = $postId";
			$result = $con->query($sql);
			$data = $result->fetch_array();
			
			return $data;
			
		}

		public function edit($id, $title, $categoryId, $content, $url_thumbnail, $tag) {
	
			
			$con = $this->connect();
			$title = $con->real_escape_string($title);
			$categoryId = $con->real_escape_string($categoryId);
			$content = $con->real_escape_string($content);
			$url_thumbnail = $con->real_escape_string($url_thumbnail);
			$tag = $con->real_escape_string($tag);
			$sql = "UPDATE news SET title = '$title',
									content = '$content',
									category_id = '$categoryId',
									url_thumbnail = '$url_thumbnail',
									tag = '$tag' WHERE id = $id";			
			$result= $con->query($sql);
			
			return $result;

		}

		public function delete($postId) {
			
			$con = $this->connect();
			$sql = "DELETE FROM news WHERE id = $postId";
			$result = $con->query($sql);
			return $result;
		}
		public function getNews() {
			
			$con = $this->connect();

			$result = $con->query('SELECT * FROM news WHERE category_id = 1');
			$posts = array();

			if($result->num_rows > 0) {
				while($post = mysqli_fetch_assoc($result)) {
					$posts[]= $post;
				}
			}
			return $posts;
		}
		public function getEvents() {
			
			$con = $this->connect();

			$result = $con->query('SELECT * FROM news WHERE category_id = 2');
			$posts = array();

			if($result->num_rows > 0) {
				while($post = mysqli_fetch_assoc($result)) {
					$posts[]= $post;
				}
			}
			return $posts;
		}
		
		public function getGuide() {
			
			$con = $this->connect();

			$result = $con->query('SELECT * FROM news WHERE category_id = 3');
			$posts = array();

			if($result->num_rows > 0) {
				while($post = mysqli_fetch_assoc($result)) {
					$posts[]= $post;
				}
			}
			return $posts;
		}
		public function getFeature() {
			
			$con = $this->connect();

			$result = $con->query('SELECT * FROM news WHERE category_id = 4');
			$posts = array();

			if($result->num_rows > 0) {
				while($post = mysqli_fetch_assoc($result)) {
					$posts[]= $post;
				}
			}
			return $posts;
		}
	}
?>