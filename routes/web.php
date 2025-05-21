<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Students', function () {
   return view('Students');

  // return "<h1>This is direct return of haeding without any view page</h1>";
});

Route::get('/Page1', function () {
        return view('Page1');
    });

    Route::get('/products', function () {
        $products = [
        ['name' => 'Laptop', 'price' => 1500],
        ['name' => 'Phone', 'price' => 800],
        ['name' => 'Tablet', 'price' => 600],
        ];
        return view('layout.products', compact('products'));
       });


    Route::get('/test1', function () {
        return view('test1');
    });


    // use App\Http\Controllers\UserController;

// Route::get('/result', 'App\Http\Controllers\UserController@index');

  Route::get('/app', function () {
        return view('layout/app');
    });
Route::get('/home', function () {
    return view('layout.home');
});

Route::get('/about', function () {
    return view('layout.about');
});
Route::get('/contact', function () {
    return view('layout.contact');
});



      
      
      
    
    