<?php

// class DbModel
// {
// 	public $conn = NULL;
// 	private $server = 'localhost';
// 	private $dbName = 'thanthu_db';
// 	private $user = 'root';
// 	private $password = '';
        
//         // Hàm kết nối CSDL
// 	public function connect()
// 	{
// 		$this->conn = new mysqli($this->server, $this->user, $this->password, $this->dbName);

// 		if ($this->conn->connect_error) {
// 			printf($this->conn->connect_error);
// 			exit();
// 		}
// 		$this->conn->set_charset("utf8");
// 	}
//         // Hàm đóng kết nối CSDL
//         public function closeDatabase()
// 	{
// 		if ($this->conn) {
// 			$this->conn->close();
// 		}
// 	}
// }
	class DbModel {
		public function connect() {
			$con = mysqli_connect('localhost','root','','thanthu_db');
			if (mysqli_connect_errno()) {
			  echo 'Connect error: ' .mysqli_connect_error();
			}
			return $con;
		}
	}

// class DbModel {
// 		public function connect() {
// 			$con = mysqli_connect('remotemysql.com','etTHVoJ4g3','76tEJonpoE','etTHVoJ4g3');
// 			if (mysqli_connect_errno()) {
// 			  echo 'Connect error: ' .mysqli_connect_error();
// 			}
// 			return $con;
// 		}
// 	}

?>