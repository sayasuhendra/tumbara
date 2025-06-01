<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Volt::route('/', 'home')->name('home');
Volt::route('/home', 'home-baru');
Volt::route('/about-us', 'about-us');
Volt::route('/services', 'services');
Volt::route('/destination', 'destination');
Volt::route('/fresh', 'fresh');
Volt::route('/frozen', 'frozen');
Volt::route('/fruits', 'fruits');
Volt::route('/vegetables', 'vegetables');
Volt::route('/product', 'product');
Volt::route('/galery', 'galery');
Volt::route('/galery/photos/{id}', 'photos');
Volt::route('/contact-us', 'contact-us');

Route::get('/language/{locale}', function ($locale) {
    session()->put('locale', $locale);
    app()->setLocale($locale);

    return back();

})->name('locale');

Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');
