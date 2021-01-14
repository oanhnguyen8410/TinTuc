<?php
	require_once 'Model/DbModel.php';
	class SignInModel extends DbModel {
		public function addUser($user) {
			$conn = $this->connect();
			$sql = "INSERT INTO `user` (`id`,  `full_name`, `username`, `email`, `tel`, `password`, `confirm`) VALUES (NULL, '" . $user['full_name'] . "', '". $user['username'] . "', '" . $user['email'] . "', '" . $user['tel'] ."', '". $user['password'] ."', '". $user['confirm'] ."');";
		$rs = $conn->query($sql);
		return $rs;
		}
	}
?>