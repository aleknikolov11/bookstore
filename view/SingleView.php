<?php

	include_once 'ViewInterface.php';

	class SingleView implements ViewInterface {

		private $content;

		public function __construct($content) {

			$this->content = $content;

		}

		public function display() {

			$display_content = '<h2>Name: '.$this->content->getName().'</h2>
								<p>Author: '.$this->content->getAuthor().'</p>
								<p>Price: '.$this->content->getPrice().'</p>
								<a href="index.php"><button>Home</button></a>';

			echo $display_content;

		}

	}