<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('public.index');
});
Route::get('/admin', function () {
    return redirect()->route('dashboard');
});
Route::get('/admin/dashboard', function(){
    return view('admin.components.dashboard');
})->name('dashboard');