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

Route::get('/', function () {
    return view('home', [
        "title" => "home",
        "say" => "Hello, I'm",
        "name" => "Hana Nadira Savaira",
        "desc" => "Full Stuck Delevoper"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "about",
    ]);
});
Route::get('/resume', function () {
    return view('resume', [
        "title" => "resume"
    ]);
});
Route::get('/project', function () {
    return view('project', [
        "title" => "project"
    ]);
});
Route::get('/contact', function () {
    return view('contact', [
        "title" => "contact"
    ]);
});
