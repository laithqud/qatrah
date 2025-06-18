<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('public.home');
});
Route::get('/about-us', function () {
    return view('public.about-us');
});
Route::get('/contact-us', function () {
    return view('public.contact-us');
});
Route::get('/join-us', function () {
    return view('public.join-us');
});
Route::get('/testimonials', function () {
    return view('public.testimonials');
});
Route::get('/gallery', function () {
    return view('public.gallery');
});