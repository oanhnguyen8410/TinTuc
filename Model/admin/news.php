<?php
	require_once '../Model/DbModel.php';
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
		
		public function add($post) {
			
			$con = $this->connect();
		
			$time = date('Y-m-d H:i:s');
			$sql = "INSERT INTO `news` (`id`, `title`, `content`, `time`, `url_thumbnail`, `tag`) VALUES (NULL, '" . $post['title'] . "', '" . $post['content'] . "', '" . $time ."', '". $post['url_thumbnail'] ."', '". $post['tag'] ."');";
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

		public function edit($id, $title, $content, $url_thumbnail, $tag) {
			$con = $this->connect();
			$title = $con->real_escape_string($title);
			$content = $con->real_escape_string($content);
			$url_thumbnail = $con->real_escape_string($url_thumbnail);
			$tag = $con->real_escape_string($tag);
			$sql = "UPDATE news SET title = '$title',
									content = '$content',
									url_thumbnail = '$url_thumbnail',
									tag = '$tag' WHERE id = $id";			
			$result= $con->query($sql);
			
			return $result;

		}

		public function delete($postId) {
			require_once '../Model/DbModel.php';
			$con = $this->connect();
			$sql = "DELETE FROM news WHERE id = $postId";
			$result = $con->query($sql);
			return $result;
		}
		
	}
?>