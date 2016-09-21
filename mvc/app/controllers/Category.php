<?php

	/**
	* Category Controller
	*/
	class Category extends Dcontroller {
		
		public function __construct() {
			parent::__construct();
		}



		public function categoryList() {
			$data = array();
			$table = "category";
			$catModel = $this->load->model("CatModel");
			$data['cat'] = $catModel->catList($table);
			$this->load->view("category", $data);
		}

		public function catById() {
			$data = array();
			$table = "category";
			$id = 1;
			$catModel = $this->load->model("CatModel");
			$data['catById'] = $catModel->catById($table, $id);
			$this->load->view("catById", $data);
		}

		public function addCategory() {
			$this->load->view("addCategory");
		}

		public function insertCategory() {
			$table = "category";
			$name = $_POST['name'];
			$title = $_POST['title'];
			$data = array(
				'name' => $name,
				'title' => $title
				);
			$catModel = $this->load->model("CatModel");
			$result = $catModel->insertCat($table, $data);

			$mdata = array();
			if($result == 1) {
				$mdata['msg'] = "Category Added Sucessfully";
			} else {
				$mdata['msg'] = "Category Not Added";
			}

			$this->load->view("addCategory", $mdata);
		}

		public function updateCategory() {
			$table = "category";
			$id = 7;
			$catModel = $this->load->model("CatModel");
			$data = array();
			$data['catById'] = $catModel->catById($table, $id);
			$this->load->view("catupdate", $data);
		}

		public function updateCat() {
			$table = "category";
			$id = $_POST['id'];
			$name = $_POST['name'];
			$title = $_POST['title'];
			$cond = "id=$id";
			$data = array(
				'name' => $name,
				'title' => $title
				);
			$catModel = $this->load->model("catModel");
			$result = $catModel->catUpdate($table, $data, $cond);

			$mdata = array();
			if($result == 1) {
				$mdata['msg'] = "Category Update Sucessfully";
			} else {
				$mdata['msg'] = "Category Not Update";
			}

			$this->load->view("catupdate", $mdata);
		}

		public function deleteCatById() {
			$table = "category";
			$cond = "id=9";
			$catModel = $this->load->model("CatModel");
			$catModel->delCatById($table, $cond);
		}
	}

?>