<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\memberController;
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

/*Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
Route::get('/', [PostController::class, 'logout'])->name('home.login');
Route::get('/home', [PostController::class, 'index'])->name('home');
Route::get('/post/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/post', [PostController::class, 'store']);
Route::get('/post/{post}/edit', [PostController::class, 'edit']);
Route::get('/post/{post}', [PostController::class, 'show']);
Route::put('/post/{post}', [PostController::class, 'update']);
Route::delete('/post/{post}', [PostController::class, 'destroy']);
Route::get('/profile/{memberid}',[MemberController::class,'index'])->name('profile.index');

Route::get('/welcome',function(){
	return view('welcomeagain');
});
