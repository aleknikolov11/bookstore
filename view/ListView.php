<?php
include_once 'ViewInterface.php';

/**
 * Class ListView
 * View for a list page
 *
 * @author Alek Nikolov <anikolov111@gmail.com>
 */
class ListView implements ViewInterface
{
	/**
	 * Array of books
	 *
	 * @var array
	 */
	private $content;

	/**
	 * ListView constructor
	 *
	 * @param array $content
	 */
	public function __construct(array $content)
	{
		$this->content = $content;
	}

	/**
	 * Implements ViewInterface::display()
	 *
	 * @return void
	 */
	public function display(): void
	{
		$displayContent = '';

		foreach($this->content as $book) {
			$displayContent .= '<h2>Name: '.$book->getName().'</h2>
								<p>Author: '.$book->getAuthor().'</p>
								<p>Price: '.$book->getPrice().'</p>';
		}
		$displayContent .= '<a href="index.php"><button>Home</button></a>';
		
		echo $displayContent;
	}
}