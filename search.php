<?php

	include_once 'index.php';

	// If all books are requested
	if(isset($_POST['showall_button']))
		header("Location: index.php?page=list");

	// If a single book is requested
	elseif(isset($_POST['search_button'])) {

		// If no name is provided, list all books
		if(empty($_POST['book_name']))
			header("Location: index.php?page=list");

		// A book name is provided
		else {

			$book_name = $_POST['book_name'];
			header("Location: index.php?page=single&book_name=".$book_name);

		}

	// Default is home page
	} else
		header("Location: index.php?page=home");