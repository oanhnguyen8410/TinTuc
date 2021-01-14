<?php
	require_once '../../Model/DbModel.php';
	class AdminModel extends DbModel {
		public function get() {
			$con = $this->connect();

			$result = $con->query('SELECT * FROM admin');
			$admins = array();

			if($result->num_rows > 0) {
				while($admin = mysqli_fetch_assoc($result)) {
					$admins[]= $admin;
				}
			}
			return $admins;
		}
	
		public function edit($full_name, $admin_user, $email, $tel, $password, $confirm ) {
			$con = $this->connect();
			
			$sql = "UPDATE admin SET full_name = '$full_name',
									admin_user = '$admin_user',
									email = '$email',
									tel = '$tel',
									password = '$password',
									confirm = '$confirm'";			
			$result= $con->query($sql);
			
			return $result;
		}
	}
?>