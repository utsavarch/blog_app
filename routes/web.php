<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
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
    return view('home');
})->name('home') ;
Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginpost'])->name('login.post');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationpost'])->name('registration.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::group(['middleware'=>'auth'],function(){
    Route::get('/welcome', function () {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('welcome', ['blogs' => $blogs]);
    })->name('welcome');
    Route::get('/create', function(){
        return view('create');
    });
    Route::post('/create_blog',[BlogController::class, 'createBlog']);
    Route::get('/display', function(){
        $blogs= auth()-> user()->userposts()->latest()->get();
        return view('display',['blogs'=>$blogs]);
    });
    Route::get('/edit-blog/{blog}', [BlogController::class, 'showEditScreen']);
    Route::put('/edit-blog/{blog}', [BlogController::class, 'postEditedblog']);
    Route::delete('/delete-blog/{blog}', [BlogController::class, 'deleteblog']);
    Route::post('/upvote/{blog}', [BlogController::class, 'upvote'])->name('blog.upvote');
    Route::post('/downvote/{blog}', [BlogController::class, 'downvote'])->name('blog.downvote');

});


