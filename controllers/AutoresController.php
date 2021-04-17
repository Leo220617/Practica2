<?php
  // file: controllers/ProfessorController.php

  require_once('autores.php');

  class AutoresController extends Controller {

    public function index() {  
      return view('autor/index',
       ['autores'=>autores::all(),
        'title'=>'Authors List']);
    }

    public function show($id) {
      $autores = autores::find($id);
      return view('autor/show',
        ['autores'=>$autores,
         'title'=>'Authors Detail']);
    }
  }
?>