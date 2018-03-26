<?php

Route::get('/', 'PostController@index');

Route::get('/posts/create', 'PostController@create');

//Route::post('/posts', 'PostController@create');//The @create is why my page was not doing the same thing as the demo.

Route::post('/posts', 'PostController@store');

//Route::get('/posts/{post}', 'PostController@show');
