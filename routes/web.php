<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubscriptionPlanController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/submit-register', [AuthController::class, 'SubmitRegister'])->name('submit.register');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/submit-login', [AuthController::class, 'SubmitLogin'])->name('submit.login');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/subscription-plan', [SubscriptionPlanController::class, 'index'])->name('subscription.plan');

    Route::get('/get-plan-data' , [SubscriptionPlanController::class , 'getPlanData'])->name('get.plan.data');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
