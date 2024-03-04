<?php

use App\Http\Controllers\ContactController;
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
Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');
