<?php
	class CateView {
		public function addCate() {
			require '../../Templates/category/add.php';
		}
		public function getCate($categories) {
			require '../../Templates/category/get.php';
		}
		public function editCate($categoryOld) {
			require '../../Templates/category/edit.php';
		}

	}
?>