<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); });
Route::get('/showcases', function () {
    return view('showcases'); });
Route::get('/services', function () {
    return view('services'); });
Route::get('/blog', function () {
    return view('blog'); });
Route::get('/about', function () {
    return view('about'); });
Route::get('/contact', function () {
    return view('contact'); });