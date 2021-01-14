<?php
 class PokeView {
 	public function get($pokes) {
 		require '../../Templates/pokemon/get.php';
 	}
 	public function add() {
 		require '../../Templates/pokemon/add.php';
 	}
 	public function edit($item) {
 		require '../../Templates/pokemon/edit.php';
 	}
 	public function list($pokes) {
 		require '../../Templates/pokemon/listpoke.php';
 	}
 	public function listID($item) {
 		require '../../Templates/pokemon/pokeId.php';
 	}
 }
?>