<?php
	require_once 'Model/DbModel.php';
	class LoginModel extends DbModel {
		public function loginUser($username, $password) {
			$con = $this->connect();
			
			$sql = "select * from user where username = '$username' and password = '$password'";
			$query = mysqli_query($con,$sql);
			$num_rows = mysqli_num_rows($query);

			return $num_rows;
		}
		public function checkUser($username, $password) {
			$con = $this->connect();
			$sql = "select * from user where username = '$username' and password = '$password' ";
			$query = mysqli_query($con,$sql);
			$value = mysqli_fetch_row($query);
            return $value;
		}

		 public function getname($username) {
             $con = $this->connect();
          $sql = "select * from user where username = '$username'";
            $query = mysqli_query($con,$sql);
            $data = mysqli_fetch_row($query);
  
            return $data;
        }
        public function update($slug, $username) {
        	$con = $this->connect();
			$sql = "UPDATE user SET slug = '$slug' Where username = '$username'";
											
			$result= $con->query($sql);
			
			return $result;
        }
	}
?>