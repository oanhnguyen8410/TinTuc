<?php
	require_once '../../Model/DbModel.php';
	class CardModel extends DbModel {
		public function get() {
			$con = $this->connect();

			$result = $con->query('SELECT * FROM cards');
			$cards = array();

			if($result->num_rows > 0) {
				while($card = mysqli_fetch_assoc($result)) {
					$cards[]= $card;
				}
			}
			return $cards;
		}
	}
?>