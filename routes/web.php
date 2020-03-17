<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@welcome');
Route::get('/pink', 'PagesController@pink');
Route::get('/blue', 'PagesController@blue');

/*
 * GET /blogs (index)
 * GET /blogs/create (create)
 * GET /blogs/1 (show)
 * POST /blogs (store)
 * GET /blogs/1/edit (edit)
 * PATCH /blogs/1 (update)
 * DELETE /blogs/1 (destroy)
 */

Route::resource('/blogs', 'BlogsController');

Route::post('/blogs/{blog}/comments', 'BlogsCommentsController@store');
Route::patch('/comments/{comment}', 'BlogsCommentsController@update');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
