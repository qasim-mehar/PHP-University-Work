<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/



Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');

Route::get('/', function () {
    return view('welcome');
});

// Pages
Route::view('/Students', 'Students');
Route::view('/Page1', 'Page1');
Route::view('/test1', 'test1');
Route::view('/app', 'layout.app');
Route::view('/home', 'layout.home');
Route::view('/about', 'layout.about');
Route::view('/contact', 'layout.contact');

// Products Demo
Route::get('/products', function () {
    $products = [
        ['name' => 'Laptop', 'price' => 1500],
        ['name' => 'Phone', 'price' => 800],
        ['name' => 'Tablet', 'price' => 600],
    ];
    return view('layout.products', compact('products'));
});

// Students
Route::get('/students', [StudentController::class, 'index'])->name('students.index');  // Show students + form
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');  // Handle form submission
