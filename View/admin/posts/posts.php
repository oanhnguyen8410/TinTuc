<?php
    class PostView {
    	public function showAllNews($posts) {
    		require '../../Templates/posts/getnews.php';
    	}
        public function listNews($posts) {
            require '../../Templates/posts/listnews.php';
            
        }
        public function newsID($item) {
            require '../../Templates/posts/newsID.php';
        }
        public function addNews($categories) {
           
            require '../../Templates/posts/addnews.php';
        }
        public function editNews($item, $categories) {
        	require '../../Templates/posts/editnews.php';
        }
    }
?>