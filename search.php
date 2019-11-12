<?php

include_once 'index.php';

if (isset($_POST['showall_button']))  { // If all books are requested
    header("Location: index.php?page=list");
} elseif (isset($_POST['search_button'])) { // If a single book is requested
    if (empty($_POST['book_name'])) { // If no name is provided, list all books
        header("Location: index.php?page=list");
    } else { // A book name is provided
        $bookName = $_POST['book_name'];
        header("Location: index.php?page=single&book_name=" . $bookName);
    }
    // Default is home page
} else {
    header("Location: index.php?page=home");
}