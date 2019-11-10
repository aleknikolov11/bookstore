<?php
	
	include_once 'ViewInterface.php';

	// View for Home Page
	class HomeView implements ViewInterface {

		private $err_msg;

		public function __construct($err_msg = null) {

			$this->err_msg = $err_msg;

		}


		public function display() {

			$display_content = "<form action='search.php' method='post'>
						<input type='text' name='book_name' placeholder='Search for a book'>
						<button type='submit' name='search_button'>Search</button>
						<button type='submit' name='showall_button'>Show all</button>
						</form>";

			if($this->err_msg != null) 
				$display_content .= "<p style='color:red;'>".$this->err_msg."</p>";

			echo $display_content;

		}
	}