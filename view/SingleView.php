<?php
include_once 'ViewInterface.php';

/**
 * Class SingleView
 * Responsible for displaying the page for a single book
 *
 * @author Alek Nikolov <anikolov111@gmail.com>
 */
class SingleView implements ViewInterface
{
	/**
	 * @var Book
	 */
	private $content;

	/**
	 * SingleView constructor
	 *
	 * @param Book $content
	 */
	public function __construct(Book $content)
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
		$displayContent = '<h2>Name: '.$this->content->getName().'</h2>
							<p>Author: '.$this->content->getAuthor().'</p>
							<p>Price: '.$this->content->getPrice().'</p>
							<a href="index.php"><button>Home</button></a>';

		echo $displayContent;
	}
}