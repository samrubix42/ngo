<?php

use App\Livewire\About;
use App\Livewire\Home;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/',Home::class)->name('home');
Route::get('/about',About::class)->name('about');
Route::get('/cache-clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cache Cleared!";
});
Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return "Storage Linked!";
});