<?php

	class Book {

		private $name;
		private $author;
		private $price;

		public function __construct($name, $author, $price) {

			$this->name = $name;
			$this->author = $author;
			$this->price = $price;

		}

		public function getName() {

			return $this->name;

		}

		public function getAuthor() {

			return $this->author;

		}

		public function getPrice() {

			return (string)$this->price;

		}
	}