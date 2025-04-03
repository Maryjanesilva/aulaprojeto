<?php

use App\Livewire\Adimin\Dashboard;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;

Route::get('/',Login::class)->name('login');
Route::get('/admin/dashboard',Dashboard::class)->middleware(['auth','user_type:admin'])->name('admin.dashboard');