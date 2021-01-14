<?php
	class ImgView {
		public function add() {
			require '../../Templates/images/add.php';
		}
		public function get($imgs) {
			require '../../Templates/images/get.php';
		}
		public function edit($item) {
			require '../../Templates/images/edit.php';
		}
	}
?>