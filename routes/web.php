<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::view('/', 'welcome')->name('home');
Route::view('/about-me', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');


Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employees/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('/employees/edit/{id}', [EmployeeController::class, 'update'])->name('employee.update');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});


require __DIR__.'/settings.php';
