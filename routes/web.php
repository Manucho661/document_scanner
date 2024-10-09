<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\DocumentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Employee Routes with Admin prefix
Route::resource('admin/employees', EmployeeController::class)->names([
    'index' => 'admin.employees.index',
    'store' => 'admin.employees.store',
    'show' => 'admin.employees.show',
    'update' => 'admin.employees.update',
    'destroy' => 'admin.employees.destroy',
    'create' => 'admin.employees.create',
    'edit' => 'admin.employees.edit',
]);

// Document Routes with Admin prefix
Route::resource('admin/documents', DocumentController::class)->names([
    'index' => 'admin.documents.index',
    'store' => 'admin.documents.store',
    'show' => 'admin.documents.show',
    'update' => 'admin.documents.update',
    'destroy' => 'admin.documents.destroy',
    'create' => 'admin.documents.create',
    'edit' => 'admin.documents.edit',
]);
