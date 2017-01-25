<?php

namespace App\Controllers;

use App\Models\Book;
use App\Support\View;
use App\Controllers\Controller;

class BookController extends Controller
{
	public function index() {
		$book = new Book();
		$books = $book->all();
		View::render('books.list', ['books' => $books]);
	}
}