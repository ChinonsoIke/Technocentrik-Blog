<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@index')->name('index');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact', 'ContactController@store');

Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/blog/{slug}', 'BlogController@show')->name('blog.show');

Route::get('/posts/categories/{id}', 'Backend\PostController@getCategory')->name('posts.category');

Route::post('/comments/{post_id}', 'CommentsController@store')->name('comments.store');
Route::delete('/comments/{id}', 'CommentsController@destroy')->name('comments.destroy');
Route::get('/comments/{id}/delete', 'CommentsController@delete')->name('comments.delete');

Route::group(['prefix'=>'admin', 'namespace'=>'Backend'], function () {
    Route::group(['middleware'=>'auth'], function () {
        Route::get('/', 'DashboardController@index')->name('admin');
        Route::get('/posts', 'PostController@index')->name('admin.posts.index');
        Route::get('/posts/create', 'PostController@create')->name('admin.posts.create');
        Route::post('/posts/create', 'PostController@store')->name('admin.posts.store');
        Route::get('/posts/{posts}', 'PostController@show')->name('admin.posts.show');
        Route::get('/posts/{posts}/edit', 'PostController@edit')->name('admin.posts.edit');
        Route::post('/posts/{posts}', 'PostController@update')->name('admin.posts.update');
        Route::delete('/posts/{posts}', 'PostController@destroy')->name('admin.posts.destroy');
        Route::resource('categories', 'CategoryController', ['except'=> ['create']]);
        Route::resource('tags', 'TagController', ['except'=> ['create']]);
    });
});

Route::get('sitemap.xml', 'SitemapController@index');

Auth::routes([
    'register'=>false
]);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
