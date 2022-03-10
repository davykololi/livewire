<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowPosts;
use App\Http\Livewire\Posts;
use App\Http\Livewire\Detail;
use App\Http\Livewire\CategoryPosts;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\Authors;
use App\Http\Livewire\Author\AuthorDashboard;
use App\Http\Livewire\Author\CreatePost;
use App\Http\Livewire\Author\EditPost;
use App\Http\Livewire\Author\ListPost;
use App\Http\Livewire\Editor\EditorDashboard;

use App\Http\Livewire\Dashboard\FeaturedImageUpload;
use App\Http\Livewire\Dashboard\NewPost;

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

Route::get('/', ShowPosts::class)->name('home');

Route::get('categories/{slug}', CategoryPosts::class)->name('category');
Route::get('{slug}', Detail::class)->name('post-detail');

Route::group(['prefix' => 'admin', 'middleware' => ['auth:sanctum','admin']], function () {

	Route::get('/dashboard',[AdminDashboard::class,'__invoke']);//Admin Dashboard
	Route::get('/authors',[Authors::class,'__invoke']);//Authors

    Route::get('/', Posts::class)->name('dashboard');

    Route::get('post/add', NewPost::class)->name('new-post');

    Route::get('post/upload/{id}', FeaturedImageUpload::class)->name('upload-featured-image');

});

Route::group(['prefix' => 'author', 'middleware' => ['auth:sanctum','author']], function () {
	Route::get('/dashboard',[AuthorDashboard::class,'__invoke']);//Author Dashboard
	Route::get('/posts/create',[CreatePost::class,'__invoke'])->name('create.post');
	Route::get('/posts/{id}/edit',[EditPost::class,'__invoke'])->name('edit.post');
	Route::get('/posts',[ListPost::class,'__invoke']);
});

Route::group(['prefix' => 'editor', 'middleware' => ['auth:sanctum','editor']], function () {
	Route::get('/dashboard',[EditorDashboard::class,'__invoke']);//Editor Dashboard
});
