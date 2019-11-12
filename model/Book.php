<?php

/**
 * Class Book
 * Contains information for a single book
 *
 * @author Alek Nikolov <anikolov111@gmail.com>
 */
class Book
{
	/**
	 * @var string
	 */
	private $name;
	/**
	 * @var string
	 */
	private $author;
	/**
	 * @var float
	 */
	private $price;

	/**
	 * Book constructor
	 *
	 * @param string $name
	 * @param string $author
	 * @param float $price
	 */ 
	public function __construct(string $name, string $author, float $price)
	{
		$this->name = $name;
		$this->author = $author;
		$this->price = $price;
	}

	/**
	 * Get the name of the book
	 *
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * Get the author of the book
	 *
	 * @return string
	 */
	public function getAuthor(): string
	{
		return $this->author;
	}

	/**
	 * Get the price of the book
	 *
	 * @return float
	 */
	public function getPrice(): float
	{
		return $this->price;
	}
}