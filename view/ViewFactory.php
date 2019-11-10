<?php

	include_once 'ViewInterface.php';
	include_once 'HomeView.php';
	include_once 'SingleView.php';
	include_once 'ListView.php';

	// Factory for different View Classes
	class ViewFactory {

		public function getView($view_type, $content = null) {

			switch($view_type) {

				// Home Page
				case 'home':
					return new HomeView();

				// All books page
				case 'list':
					return new ListView($content);

				// Single Book Page
				case 'single':

					// If no book is matched, go to home page
					if($content == null)
						return new HomeView('No book matching the criteria was found!');

					// Display book
					else
						return new SingleView($content);

				// Default: Home Page
				default:
					return new HomeView();

			}
		}
	}