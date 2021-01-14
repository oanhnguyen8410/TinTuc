<?php
	require_once '../../Model/DbModel.php';
	class LinkModel extends DbModel {
		public function add($name, $url_link) {
			$con = $this->connect();
			$sql = "INSERT INTO links (name, url_link)
								VALUES ('$name', '$url_link')";
			$result = $con->query($sql);
			return $result;
		}
		public function get() {
			$con = $this->connect();

			$sql = "SELECT * FROM links";
		$result = $con->query($sql);
		$list = array();
		while($data = $result->fetch_array()) {
			$list[] = $data;
		}

		return $list;
		}
		public function getById($linkId) {
			$con = $this->connect();
			$sql = "SELECT * FROM links WHERE id = $linkId";
			$result = $con->query($sql);
			$data = $result->fetch_array();

			return $data;
		}
		public function edit($name, $urk_link, $linkId) {
			$con = $this->connect();
			$sql = "UPDATE links SET name = '$name' WHERE id = $linkId";
		
		return $result = $con->query($sql);
		}
		public function delete($linkId) {
			
			$con = $this->connect();
			$sql = "DELETE FROM links WHERE id = $linkId";
			$result = $con->query($sql);
			return $result;
		}	
	}
?>