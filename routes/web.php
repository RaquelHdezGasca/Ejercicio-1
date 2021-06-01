<?php
/*
Route::get('/', function () {
    return view('welcome');
});
*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/home', [FormController::class, 'index']);
Route::get('/home/form', [FormController::class, 'create'])->name('form');
Route::post('/home/form', [FormController::class, 'store'])->name('store');
Route::get('/home/form/consult', [FormController::class, 'show'])->name('consult');
Route::post('/home/form/consult', [FormController::class, 'edit'])->name('edit');







