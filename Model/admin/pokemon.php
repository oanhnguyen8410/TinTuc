<?php
	require_once '../../Model/DbModel.php';
	class PokeModel extends DbModel {
		public function get() {
			$con = $this->connect();

			$result = $con->query('SELECT * FROM pokemon');
			$pokes = array();

			if($result->num_rows > 0) {
				while($poke = mysqli_fetch_assoc($result)) {
					$pokes[]= $poke;
				}
			}
			return $pokes;
		}
		public function add($icon) {
			$con = $this->connect();
		
			$time = date('Y-m-d H:i:s');
			$sql = "INSERT INTO `pokemon` (`id`, `name`, `img`, `line`, `version`,`infor`, `power`, `time`) VALUES (NULL, '" . $icon['name'] . "', '" . $icon['img'] . "', '". $icon['line'] ."', '". $icon['version'] ."', '". $icon['infor'] ."', '". $icon['power'] ."', '" . $time ."');";
			$rs = $con->query($sql);
			return $rs;
		} 
		public function getById($pokeId) {
			
			$con = $this->connect();
			$sql = "SELECT * FROM pokemon WHERE id = $pokeId";
			$result = $con->query($sql);
			$data = $result->fetch_array();
			
			return $data;
			
		}
		public function edit($id, $name, $img, $line, $version, $infor, $power) {
			$con = $this->connect();
			
			$sql = "UPDATE pokemon SET name = '$name',
									img = '$img',
									line = '$line',
									version = '$version',
									infor = '$infor',
									power = '$power' 
									WHERE id = $id";			
			$result= $con->query($sql);
			
			return $result;

		}
		public function delete($pokeId) {
			$con = $this->connect();
			$sql = "DELETE FROM pokemon WHERE id = $pokeId";
			$result = $con->query($sql);
			return $result;
		}
		// public function search() {
		// 	$con = $this->connect();
		// 	$sql = "SELECT * FROM pokemon WHERE name like '%$search%'";
		// 	$result = $con->query($sql);
		// 	$num = mysql_num_rows($result);
		// 	return $num;
		// }
	}
?>