<?php
	require_once 'Model/DbModel.php';
	class Login_adminModel extends DbModel {
		public function loginAdmin($admin_user, $password) {
			$con = $this->connect();

			$sql = "select * from admin where admin_user = '$admin_user' and password = '$password'";
			$query = mysqli_query($con,$sql);
			$num_rows = mysqli_num_rows($query);

			return $num_rows;
		}
		public function checkAdmin($admin_user, $password) {
			$con = $this->connect();
			$sql = "select * from admin where admin_user = '$admin_user' and password = '$password'";
			$query = mysqli_query($con,$sql);
			$value = mysqli_fetch_row($query);
            return $value;
		}
	}
?>