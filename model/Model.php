<?php
include_once 'Book.php';

/**
 * Class Model
 * Database for the bookstore
 *
 * @author Alek Nikolov <anikolov111@gmail.com>
 */
class Model
{
	/**
	 * Get all books from the database
	 * @return array
	 */
	public function getAllBooks(): array
	{
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

	/**
	 * Get a book by name from the database
	 *
	 * @param string $bookName
	 * @return mixed
	 */
	public function getBook(string $bookName): mixed
	{
		$allBooks = array_change_key_case($this->getAllBooks(), CASE_LOWER);
		$bookName = strtolower($bookName);
		if(array_key_exists($bookName, $allBooks)) {
			return $allBooks[$bookName];
		}

		return null;
	}
} 