<?php
	require_once './app/models/Category.php';
	class CategoryController{
		public function categories(){
			$categories=Category::all();
        include_once './app/views/Categories.php';
		}
	}
?>