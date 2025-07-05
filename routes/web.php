<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $name = 'John Doe';
    $role = 'backend developer';

    return view('dashboard', [
        'title' => 'Dashboard',
    ], compact('name', 'role'));
})->name('dashboard');

Route::get('/page2', function () {
    return view('page2', [
        'title' => 'page2',
    ]);
})->name('page2');

// Route::prefix('admin')->group(function(){
//     Route::get('create', function () {
//         return view('Admin/create', [
//             'title' => 'Create Admin Page',
//         ]);
//     })->name('admin.create');

//     Route::get('update', function () {
//         return view('Admin/create', [
//             'title' => 'update Admin Page',
//         ]);
//     })->name('admin.update');
// });

//Route with parameters
Route::get('/user/{id}', function ($id) {
    return view('user', [
        'title' => 'User Page',
        'id' => $id,
    ]);
})->name('user');

// Route fallback
Route::fallback(function () {
    return view('404', [
        'title' => '404 Not Found',
    ]);
})->name('404');

// Route with controller

Route::get('/register',[RegisterController::class,'index']);


