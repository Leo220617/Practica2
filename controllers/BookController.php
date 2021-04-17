<?php
  // file: controllers/ProfessorController.php

  require_once('book.php');

  class BookController extends Controller {

    public function index() {  
      return view('book/index',
       ['books'=>book::all(),
        'title'=>'Book List']);
    }

    public function show($id) {
      $book = book::find($id);
      return view('book/show',
        ['book'=>$book,
         'title'=>'Book Detail']);
    }
  }
?>