<?php

use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Home;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/',Home::class)->name('home');
Route::get('/about',About::class)->name('about');
Route::get('/contact',Contact::class)->name('contact');

// Auth Routes
Route::get('/login', \App\Livewire\Auth\Login::class)->name('login')->middleware('guest');
Route::post('/logout', function() {
    auth()->logout();
    session()->invalidate();
    session()->regenerateToken();
    return redirect()->route('home');
})->name('logout')->middleware('auth');

// Admin Routes (Protected)
Route::middleware('auth')->prefix('admin')->group(function() {
    Route::get('/contacts', \App\Livewire\Admin\Contact::class)->name('admin.contact');
});
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