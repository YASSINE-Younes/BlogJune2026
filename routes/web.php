<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DeleteMeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


 
Route::view('/x', 'theme.master');
Route::view('/index', 'theme.index');


// THEME ROUTE 
Route::controller(ThemeController::class)->name('theme.')->group(function()
{
Route::get('/' , 'index')->name('index');
Route::get('/category' , 'category')->name('category');
Route::get('/contact' , 'contact')->name('contact');

Route::get('/single-blog' , 'singBlog')->name('singBlog');
});

// Route Store Subscriber
Route::post('/subsribe/post',[SubscriberController::class , 'store'])->name('subscriber.store');

 
// Route Store Contact
Route::post('/contact/post',[ContactController::class , 'store'])->name('contact.store');

//Route Resource Blog
Route::resource('blogs', BlogController::class);
Route::resource('deleteys', DeleteMeController::class);




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



