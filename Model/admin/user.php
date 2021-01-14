<?php
	require_once '../../Model/DbModel.php';
	class UserModel extends DbModel {
		public function get() {
			$con = $this->connect();

			$result = $con->query('SELECT * FROM user');
			$users = array();

			if($result->num_rows > 0) {
				while($user = mysqli_fetch_assoc($result)) {
					$users[]= $user;
				}
			}
			return $users;
		}
		public function getById($userId) {
		
			$con = $this->connect();
			$sql = "SELECT * FROM user WHERE id = $userId";
			$result = $con->query($sql);
			$data = $result->fetch_array();
			
			return $data;
			
		}
		public function edit($id, $full_name, $username, $email, $tel, $password, $confirm, $slug) {
	
			
			$con = $this->connect();
			
			$sql = "UPDATE user SET full_name = '$full_name',
									username = '$username',
									email = '$email',
									tel = '$tel',
									password = '$password',
									confirm = '$confirm',
									slug = '$slug'
									WHERE id = $id";			
			$result= $con->query($sql);
			
			return $result;
		}
		public function delete($userId) {
			
			$con = $this->connect();
			$sql = "DELETE FROM user WHERE id = $userId";
			$result = $con->query($sql);
			return $result;
		}

	}
?>