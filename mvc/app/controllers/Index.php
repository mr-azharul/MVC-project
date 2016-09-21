<?php

	/**
	* Index Controlller
	*/
	class Index extends Dcontroller {
		
		public function __construct() {
			parent::__construct();
		}

		public function home() {
			$this->load->view("header");

			$data = array();
			$table = "post";
			$postModel = $this->load->model("PostModel");
			$data['allPost'] = $postModel->getAllPost($table);
			$this->load->view("content", $data);

			$table = "category";
			$catModel = $this->load->model("CatModel");
			$data['cat'] = $catModel->catList($table);

			$this->load->view("sidebar");
			$this->load->view("footer");
		}

		public function postDetails($id) {
			$this->load->view("header");

			$data = array();
			$tablePost = "post";
			$tableCat = "category";
			$postModel = $this->load->model("PostModel");
			$data['postbyid'] = $postModel->getPostById($tablePost, $tableCat, $id);
			$this->load->view("details", $data);
			
			$this->load->view("sidebar");
			$this->load->view("footer");
		}

		public function postByCat($id) {
			$this->load->view("header");

			$data = array();
			$tablePost = "post";
			$tableCat = "category";
			$postModel = $this->load->model("PostModel");
			$data['getcat'] = $postModel->getPostByCat($tablePost, $tableCat, $id);
			$this->load->view("postByCat", $data);

			$this->load->view("sidebar");
			$this->load->view("footer");
		}
	}

?>