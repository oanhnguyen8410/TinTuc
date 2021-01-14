<?php

class CardController {
	public function add() {
		require 'View/admin/CardView.php';
		$cardView = new CardView();
		$cardView->addCard();
		if(isset($_POST['button-card'])) {
			$cardname = $_POST['name'];
			$seri = $_POST['seri'];
			$code = $_POST['code'];

			require ('Model/User/CardModel.php');
			$cardModel = new CardModel();
			$data = $cardModel->checkCard($cardname, $seri, $code);
			require ('Model/User/LoginModel.php');
			$loginModel = new LoginModel();
			$name = null;
			if(isset($_SESSION['username'])) {
				$name = $_SESSION['username'];
			}
			
			$value = $loginModel->getname($name);
			if(empty($name)) {
				echo "<script>alert('Bạn cần đăng nhập để nạp thẻ!')</script>";
			}
			elseif ($data == 0) {
				if($cardname == '' || $seri == '' || $code == '')
				{
					echo "<script>alert('Vui lòng nhập đầy đủ thông tin!')</script>";
				} else {
					echo "<script>alert('Vui lòng nhập chính xác thông tin thẻ!')</script>";
				}
			}
			if ($data) {
				if ($data[5] == 1) {
					echo "<script>alert('Thẻ đã được sử dụng trước đó!')</script>";
				} else {
					$name = $_SESSION['username'];
					// require ('Model/User/LoginModel.php');
					// $loginModel = new LoginModel();
					$value = $loginModel->getname($name);
					if(isset($name)) {
					
						$total = $data[4] + $value[7];
						$_SESSION['slug'] = $total;
						$loginModel->update($total, $name);
						$status = $data[5] = '1';
 						// $data[5]->$name;
 						
						$cardModel->update($status, $cardname, $seri, $code);
						echo("<script>alert('Nạp thẻ thành công!')</script>");
 						echo("<script>window.location = 'http://localhost/blog_thanthu/?controller=card&action=add';</script>");

					}
				}
			}
		}
	}
}
?>