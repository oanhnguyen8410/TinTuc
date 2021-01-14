<?php
    class UserView {
    	public function showAllUser($users) {
    		require '../../Templates/user/get.php';
    	}
        // public function listNews($posts) {
        //     require 'Templates/news/listnews.php';
            
        // }
        // public function newsID($item) {
        //     require 'Templates/news/newsID.php';
        // }
        // public function addNews() {
        //     require 'Templates/news/addnews.php';
        // }
        public function editUser($item) {
        	require '../../Templates/user/edit.php';
        }
    }
?>