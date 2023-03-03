<?php
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/indx', [PagesController::class,('index')]);


Route::get('/2', function () {
    return 'this is my route';
});

Route::get('/about', function () {
    return view('pages.about') ;
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/withparm/{id}',[PagesController::class,('withparm')]);

Route::get('v_with_par/{id}',[PagesController::class,('v_w_p')]);

Route::resource('product',ProductController::class);

Route::get('product/soft/delete/{id}',[ProductController::class,('softdelete')])->name('soft.delete');

Route::get('thetrash',[ProductController::class,('trash')])->name('product.trash');

Route::get('untrash/{id}',[ProductController::class,('unsoftdelete')])->name('product.unsoftdelete');

Route::get('forcedel/{id}',[ProductController::class,('deletetrashed')])->name('product.forcedel');

Route::get('create',[ProductController::class,('create')])->name('product.create');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
