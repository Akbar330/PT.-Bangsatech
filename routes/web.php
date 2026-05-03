<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Models\Customer;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'customers' => Customer::active()->ordered()->get(),
        'testimonials' => Testimonial::active()->ordered()->get(),
    ]);
});

Route::prefix('admin')->name('admin.')->group(function (): void {
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.store');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('admin')->group(function (): void {
        Route::get('/', DashboardController::class)->name('dashboard');
        Route::resource('customers', CustomerController::class)->except('show');
        Route::resource('testimonials', TestimonialController::class)->except('show');
    });
});
