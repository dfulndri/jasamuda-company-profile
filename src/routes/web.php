<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/services/details', function () {
    return view('pages.service-details');
})->name('service.details');

Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');

Route::get('/portfolio/single', function () {
    return view('pages.portfolio-single');
})->name('portfolio.single');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/blog/details', function () {
    return view('pages.blog-details');
})->name('blog.details');

Route::get('/pricing', function () {
    return view('pages.pricing');
})->name('pricing');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
