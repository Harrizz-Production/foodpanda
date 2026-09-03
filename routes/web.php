<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdmin\SuperAdminViewController;

Route::get('/restaurant1', [SuperAdminViewController::class, 'restaurant1'])->name('restaurant1');