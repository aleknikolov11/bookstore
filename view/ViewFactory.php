<?php
include_once 'ViewInterface.php';
include_once 'HomeView.php';
include_once 'SingleView.php';
include_once 'ListView.php';

/**
 * class ViewFactory
 * Factory for different View Classes
 *
 * @author Alek Nikolov <anikolov111@gmail.com>
 */
class ViewFactory
{
	/**
	 * Get a View depending on the $viewType
	 *
	 * @param string $viewType Type of View
	 * @param Book|array|null $content Content of the page
	 * 
	 * @return mixed
	 */
	public function getView(string $viewType, mixed $content = null): mixed
	{
		switch(string $viewType) {
			case 'home': // Home Page
				return new HomeView();
			case 'list': // All books page
				return new ListView($content);
			case 'single': // Single Book Page
				if($content == null) { // If no book is matched, go to home page
					return new HomeView('No book matching the criteria was found!');
				} else { // Display book
					return new SingleView($content);
				}
			default: // Default: Home Page
				return new HomeView();
		}
	}
}