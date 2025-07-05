<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('dashboard', [
        'name' => 'Dashboard',
    ]);
})->name('dashboard');

Route::get('/page2', function () {
    return view('page2', [
        'name' => 'page2',
    ]);
})->name('page2');

Route::prefix('admin')->group(function(){
    Route::get('create', function () {
        return view('Admin/create', [
            'name' => 'Create Admin Page',
        ]);
    })->name('admin.create');

    Route::get('update', function () {
        return view('Admin/create', [
            'name' => 'update Admin Page',
        ]);
    })->name('admin.update');
});
