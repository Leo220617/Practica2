<?php
  // file: controllers/ProfessorController.php

  require_once('editorial.php');

  class EditorialesController extends Controller {

    public function index() {  
      return view('editorial/index',
       ['editorial'=>editorial::all(),
        'title'=>'Editorials List']);
    }

    public function show($id) {
      $edit = editorial::find($id);
      return view('editorial/show',
        ['editorial'=>$edit,
         'title'=>'Editorials Detail']);
    }
  }
?>