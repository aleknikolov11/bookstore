<?php

	include_once 'Book.php';

	// Database for the bookstore
	class Model {

		// Get all books from the database
		public function getAllBooks() {

			$books = array(
				'The Hunger Games' => new Book('The Hunger Games', 'Suzanne Collins', 9.95),
				'Harry Potter' => new Book('Harry Potter', 'J. K. Rowling', 14.99),
				'To Kill a Mockingbird' => new Book('To Kill a Mockingbird', 'Harper Lee', 29.99),
				'Pride and Prejudice' => new Book('Pride and Prejudice', 'Jane Austen', 14.99),
				'The Book Theif' => new Book('The Book Thief', 'Marcus Zusak', 29.49),
				'Animal Farm' => new Book('Animal Farm', 'George Orwell', 19.99)
			);

			return $books;

		}

		// Get a book by name from the database
		public function getBook($book_name) {

			$all_books = array_change_key_case($this->getAllBooks(), CASE_LOWER);
			$book_name = strtolower($book_name);
			if(array_key_exists($book_name, $all_books)) {

				return $all_books[$book_name];

			}

			return null;

		}
	} 