<?php
/* EPISODE 22:)
 * you can create own service providers and packages laravel, I didnt!
 * Laravel is constructed through a tonne of components which all contain a service
 * provider that knows how to register and bootstrap itself with the framework
 */

/* EPISODE 23:)
 * Config isn't really for development as it is an performance optimization
 */

Route::get('/', 'PagesController@home');

Route::get('/pink', 'PagesController@pink');
Route::get('/blue', 'PagesController@blue');


/*
 * GET /projects (index)
 * GET /projects/create (create)
 * GET /projects/1 (show)
 * POST /projects (store)
 * GET /projects/1/edit (edit)
 * PATCH /projects/1 (update)
 * DELETE /projects/1 (destroy)
 */

Route::resource('blogs', 'BlogsController');

Route::post('/blogs/{blog}/tasks', 'BlogTasksController@store');
Route::patch('/tasks/{task}', 'BlogTasksController@update');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
