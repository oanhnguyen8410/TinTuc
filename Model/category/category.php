<?php
	require_once '../../Model/DbModel.php';
	class CateModel extends DbModel {
		public function add($name, $slug) {
			$con = $this->connect();
			$sql = "INSERT INTO categories (name, slug)
								VALUES ('$name', '$slug')";
			$result = $con->query($sql);
			return $result;
		}
		public function get() {
			$con = $this->connect();

			$sql = "SELECT * FROM categories";
		$result = $con->query($sql);
		$list = array();
		while($data = $result->fetch_array()) {
			$list[] = $data;
		}

		return $list;
		}
		public function getById($categoryId) {
			$con = $this->connect();
			$sql = "SELECT * FROM categories WHERE id = $categoryId";
			$result = $con->query($sql);
			$data = $result->fetch_array();

			return $data;
		}
		public function edit($name, $slug, $categoryId) {
			$con = $this->connect();
			$sql = "UPDATE categories SET name = '$name' WHERE id = $categoryId";
		
		return $result = $con->query($sql);
		}
		public function delete($categoryId) {
			
			$con = $this->connect();
			$sql = "DELETE FROM categories WHERE id = $categoryId";
			$result = $con->query($sql);
			return $result;
		}

	}
?>