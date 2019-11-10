<?php

	include_once 'ViewInterface.php';

	class ListView implements ViewInterface {

		private $content;

		public function __construct($content) {

			$this->content = $content;

		}

		public function display() {

			$display_content = '';

			foreach($this->content as $value) {

				$display_content .= '<h2>Name: '.$value->getName().'</h2>
									<p>Author: '.$value->getAuthor().'</p>
									<p>Price: '.$value->getPrice().'</p>';

			}

			$display_content .= '<a href="index.php"><button>Home</button></a>';

			echo $display_content;

		}
	}