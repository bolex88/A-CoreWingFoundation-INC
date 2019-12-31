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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-form', 'PostController@showAddForm')->name('forms.add');
Route::post('/add', 'PostController@addForm')->name('forms.save');
Route::get('add-contact', 'PostController@addContacts')->name('contact.add');
Route::post('/contact', 'PostController@Contacts')->name('contacts.save');
//Route::get('/blog', 'PostController@Blog')->name('blog.show');
Route::get('/comment-form', 'PostController@BlogComments')->name('comment.add');
Route::post('/comment', 'PostController@Comments')->name('comments.save');
Route::get('/checkout-form', 'PostController@CheckOutForm')->name('checkout-form.show');