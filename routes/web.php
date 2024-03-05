<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('website.home', ['title' => 'Home']);
})->name('home');
Route::get('/about', function () {
    return view('website.about', ['title' => 'About']);
})->name('about');
Route::get('/contact', function () {
    return view('website.contact', ["title" => 'Contact']);
})->name('contact');
Route::get('/dashboard-status', function () {
    return view('website.dashboard-status', ["title" => 'Dashboard Status']);
})->name('dashboard-status');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
