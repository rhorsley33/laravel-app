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

// Example below shows us how to dynamically pass variables to the route
// Route::get('/users/{id}/{name}', function($id, $name) {
//     return 'This is user '.$name.' with an id of '.$id;
// });
// The original syntax for defining a route is below
// Route::get('/about', function() {
//     return view('pages.about');
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');