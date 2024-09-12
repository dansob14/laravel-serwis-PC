<?php

use App\Http\Controllers\RepairController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Models\Repair;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/admin', 'admin')->middleware('auth');
Route::view('/repairListing', 'repairListing');
Route::get('/admin/admin-employee', function () {
    $users = User::all();
    return view('admin/admin-employee', ['users'=> $users]);
    
})->middleware('auth');

Route::view('/admin/add-employee', 'admin/add-employee')->middleware('auth');

Route::controller(RepairController::class)->group(function (){
    Route::get('/employee', 'index')->middleware('auth');
    Route::get('edit-repair/{repair}','edit')->middleware('auth');
    Route::get('admin-edit-repair/{repair}','adminEdit')->middleware('auth');
    Route::patch('edit-repair/{repair}','update')->middleware('auth');
    Route::patch('/admin/admin-edit-repair/{repair}','adminUpdate')->middleware('auth');
    Route::get('/admin/admin-repair', 'adminIndex')->middleware('auth');
    Route::post('/repair', 'store')->middleware('auth');
    Route::delete('admin/admin-repair/{user}','destroy')->middleware('auth');
});
Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('auth');

Route::controller(SessionController::class)->group(function (){
    Route::get('/login', 'create')->name('login');
    Route::post('/login', 'store');
    Route::post('/logout','destroy');
});
Route::delete('admin/admin-employee/{user}', [UserController::class, 'destroy'])->middleware('auth');

Route::get('edit-user/{user}', [UserController::class, 'edit'])->middleware('auth');
Route::patch('edit-user/{user}', [UserController::class, 'update'])->middleware('auth');
