<?php
class PokemonController {
	public function get() {
		require '../../Model/admin/pokemon.php';
		$pokeModel = new PokeModel();
		$pokes = $pokeModel->get();
		require '../../View/admin/pokemon/pokemon.php';
		$pokeView = new PokeView();
		$pokeView->get($pokes);

	}
	public function add() {
		require '../../View/admin/pokemon/pokemon.php';
		$pokeView = new PokeView();
		$pokeView->add();
		require '../../Model/admin/pokemon.php';
		$pokeModel = new PokeModel();
		if(isset($_POST['addPoke'])) {
			$name 			= $_POST['name'];
			$img = $_POST['img'];
			$line 		= $_POST['line'];
			$version 		= $_POST['version'];
			$infor 	= $_POST['infor'];
			$power 	= $_POST['power'];
			$icon = array(
				'name' => $name,
				'img' => $img,
				'line' => $line,
				'version' => $version,
				'infor' => $infor,
				'power' => $power,
			);

			$pokeModel->add($icon);
			echo("<script>alert('Thêm thành công!')</script>");
 			echo("<script>window.location = 'http://localhost/blog_thanthu/View/admin/?controller=pokemon&action=get';</script>");
		}
	}
	public function edit() {
		require '../../View/admin/pokemon/pokemon.php';
		$pokeView = new PokeView();
		
		require '../../Model/admin/pokemon.php';
		$pokeModel = new PokeModel();
		if(isset($_GET['pokeId'])) {
			$pokeId = $_GET['pokeId'];
			$item = $pokeModel->getById($pokeId);
			$pokeView->edit($item);

			if(isset($_POST['editPoke'])) {
				$name = $_POST['name'];
				$img = $_POST['img'];
				$line = $_POST['line'];
				$version 		= $_POST['version'];
				$infor = $_POST['infor'];
				$power = $_POST['power'];
				$pokeModel->edit($pokeId, $name, $img, $line, $version, $infor, $power);
				echo("<script>alert('Cập nhật thành công!')</script>");
 				echo("<script>window.location = 'http://localhost/blog_thanthu/View/admin/?controller=pokemon&action=get';</script>");
			}
		}
	}
	public function delete() {
		require '../../Model/admin/pokemon.php';
		$pokeModel = new PokeModel();
		if(isset($_GET['pokeId'])) {
			$pokeId = $_GET['pokeId'];
			$pokeModel->delete($pokeId);
			echo("<script>alert('Xóa thành công!')</script>");
 				echo("<script>window.location = 'http://localhost/blog_thanthu/View/admin/?controller=pokemon&action=get';</script>");
		}
	}
	public function list() {
		require '../../Model/admin/pokemon.php';
		$pokeModel = new PokeModel();
		$pokes = $pokeModel->get();
		require '../../View/admin/pokemon/pokemon.php';
		$pokeView = new PokeView();
		$pokeView->list($pokes);
	}
	public function listId() {
		require '../../Model/admin/pokemon.php';
		$pokeModel = new PokeModel();
		$pokes = $pokeModel->get();
		require '../../View/admin/pokemon/pokemon.php';
		$pokeView = new PokeView();
		if(isset($_GET['pokeId'])) {
			$pokeId = $_GET['pokeId'];
		
			$item = $pokeModel->getById($pokeId);
			$pokeView->listID($item);
		}
	}
	// public function search() {
	// 	if(isset($_GET['search'])) {
	// 		$search = addcslashes($_GET['search']);
	// 		if (empty($search)) {
	// 			echo 'Bạn cần tên Pokemon';
	// 		}
	// 		else {
	// 			require '../../Model/admin/pokemon.php';
	// 			$pokeModel = new PokeModel();
	// 			$pokes = $pokeModel->search();
	// 			if ($num > 0 && $search != "") {
	// 				echo '$num ket qua tra ve $search';
	// 			}
	// 		}
	// 	}
	// }
}
?>