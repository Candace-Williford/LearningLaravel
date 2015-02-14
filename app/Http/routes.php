<?php

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

//Route::get('foo', function(){
//    return 'Bar';
//});

//Route::get('articles', 'ArticlesController@index');
//Route::get('articles/create', 'ArticlesController@create');
//Route::get('articles/{id}', 'ArticlesController@show');//{id} represents a wild card. give it a name and then wrap it in curly braces. will respond to articles/anything so make sure this goes last
//Route::post('articles', 'ArticlesController@store');
//Route::get('articles/{id}/edit', 'ArticlesController@edit');

Route::resource('articles', 'ArticlesController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);
