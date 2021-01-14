<?php
class LinkView {
	public function add() {
		require '../../Templates/link/add.php';
	}
	public function get($links) {
		require '../../Templates/link/get.php';
	}
	public function edit($item) {
		require '../../Templates/link/edit.php';
	}
}
?>