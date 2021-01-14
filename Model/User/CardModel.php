<?php
    require_once 'Model/DbModel.php';
    class CardModel extends DbModel
    {
    	public function addCard($name, $seri, $code) {
    		$con = $this->connect();
    		$sql = "select * from cards where name = '$name' and seri = '$seri' and code = '$code'";
    		$query = mysqli_query($con,$sql);
            $num_rows = mysqli_num_rows($query);

            return $num_rows;
    	}

        public function checkCard($name, $seri, $code) {
           $con = $this->connect();
            $sql = "select * from cards where name = '$name' and seri = '$seri' and code = '$code'";
            $query = mysqli_query($con,$sql);
            $data = mysqli_fetch_row($query);
  
            return $data;
        }
        public function update($status, $name, $seri, $code) {
            $con = $this->connect();
            $sql = "UPDATE cards SET status = '$status' Where name = '$name' and seri = '$seri' and code = '$code'";
                                            
            $result= $con->query($sql);
            
            return $result;
        }
    }
?>