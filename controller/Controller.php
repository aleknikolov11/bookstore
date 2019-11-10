<?php

	include_once 'model/Model.php';
	include_once 'view/ViewFactory.php';

	class Controller {

		private $model;
		private $view_factory;
		private static $inst;

		private function __construct() {

			$this->model = new Model();
			$this->view_factory = new ViewFactory();

		}

		// Create static instance of Controller class
		public static function instance() {

			if(self::$inst == null) {

				self::$inst = new Controller();

			}

			return self::$inst;

		}

		// Get the required page from the request and create a View
		public function createPage() {
			$content = null;
			$page_type = null;

			if(isset($_GET['page'])) {

				if($_GET['page'] == 'list')
					$content = $this->model->getAllBooks();
				else 
					$content = $this->model->getBook($_GET['book_name']);

				$page_type = $_GET['page'];

			}

			$view = $this->view_factory->getView($page_type, $content);

			$this->display($view);

		}

		// Print page
		private function display(ViewInterface $view) {

			$view->display();

		}

	}