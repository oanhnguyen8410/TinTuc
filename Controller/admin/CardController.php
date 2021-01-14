<?php
class CardController {
	public function get() {
		require '../../Model/admin/cards.php';
		$cardModel = new CardModel();
		$cards = $cardModel->get();
		require '../../View/admin/cards/cards.php';
		$cardView = new CardView();
		$cardView->get($cards);
	}
}
?>