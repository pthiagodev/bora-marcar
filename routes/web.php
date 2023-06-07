<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\OrganizersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('/events', EventsController::class)
    ->except('show');

Route::resource('/locations', LocationsController::class)
    ->except('show');

Route::resource('/organizers', OrganizersController::class)
    ->except('show');
