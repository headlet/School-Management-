<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('public.index');
});


// admin
Route::get('/admin', function () {
    return redirect()->route('dashboard');
});
Route::get('/admin/dashboard', function(){
    return view('admin.components.dashboard');
})->name('dashboard');


// Students
Route::get('/admin/student', [StudentController::class, 'index'])->name('student');
Route::get('/admin/addstudent', [StudentController::class, 'create'])->name('addstudent');
Route::post('/addstd', [StudentController::class, 'store'])->name("studentstore");
Route::delete('/admin/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::get('/admin/{student}/view',);