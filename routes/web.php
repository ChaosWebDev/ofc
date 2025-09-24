<?php

use App\Livewire\Dashboard;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

require_once __DIR__ . "/_console.php";
require_once __DIR__ . "/_dev.php";


Route::middleware('auth')->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');
});

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)->name("login");
});