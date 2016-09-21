<?php

	/**
	* Load Class
	*/
	class Load {
		
		public function __construct() {
			# code...
		}

		public function view($fileName, $data = false) {
			if($data == true) {
				extract($data);
			}
			include "app/viwes/".$fileName.".php";
		}

		public function model($modelName) {
			include "app/models/".$modelName.".php";
			return new $modelName();
		}
	}

?>