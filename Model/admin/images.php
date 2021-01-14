<?php
	require_once '../../Model/DbModel.php';
	class ImgModel extends DbModel {
		public function add($url) {
			$con = $this->connect();
			$sql = "INSERT INTO images (url_thumbnail)
								VALUES ('$url')";
			$result = $con->query($sql);
			return $result;
		}
		public function get() {
			$con = $this->connect();

			$sql = "SELECT * FROM images";
		$result = $con->query($sql);
		$list = array();
		while($data = $result->fetch_array()) {
			$list[] = $data;
			}
			return $list;
		}
		public function getById($imgId) {
			$con = $this->connect();
			$sql = "SELECT * FROM images WHERE id = $imgId";
			$result = $con->query($sql);
			$data = $result->fetch_array();

			return $data;
		}
		public function edit($url, $imgId) {
			$con = $this->connect();
			$sql = "UPDATE images SET url_thumbnail = '$url' WHERE id = $imgId";
		
			return $result = $con->query($sql);
		}
		public function delete($imgId) {
			
			$con = $this->connect();
			$sql = "DELETE FROM images WHERE id = $imgId";
			$result = $con->query($sql);
			return $result;
		}	
	}
?>