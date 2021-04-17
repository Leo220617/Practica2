<?php
    Route::get('/',function() { return view('index'); });
    Route::resource('book', 'BookController');
    Route::resource('autor', 'AutoresController');
    Route::resource('editorial', 'EditorialesController');
    Route::dispatch();
?>
