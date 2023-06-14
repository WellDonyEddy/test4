<?php

use App\Http\Controllers\CaretakerController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;

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

Route::get('/groups', [GroupController::class,'index'])->name('group.index');

Route::get('/groups/create',[GroupController::class,'create'])->name('group.create');
Route::get('/groups/{group}/teachers/create',[TeacherController::class,'create'])->name('teacher.create');
Route::get('/groups/{group}/children/create',[ChildController::class,'create'])->name('child.create');
Route::get('caretaker/create',[CaretakerController::class,'create'])->name('caretaker.create');
Route::get('/children/attach',[ChildController::class,'attach'])->name('child.attach');
Route::get('/children/{child}/detach/{caretaker}',[ChildController::class,'detach'])->name('child.detach');

Route::get('/caretakers',[CaretakerController::class,'list'])->name('caretaker.list');


Route::post('/groups',[GroupController::class,'store'])->name('group.store');
Route::post('/teachers',[TeacherController::class,'store'])->name('teacher.store');
Route::post('/children',[ChildController::class,'store'])->name('child.store');
Route::post('/caretakers',[CaretakerController::class,'store'])->name('caretaker.store');

Route::get('/groups/{group}',[GroupController::class,'show'])->name('group.show');
Route::get('/teachers/{teacher}',[TeacherController::class,'show'])->name('teacher.show');
Route::get('/children/{child}',[ChildController::class,'show'])->name('child.show');
Route::get('/caretakers/{caretaker}',[CaretakerController::class,'show'])->name('caretaker.show');

Route::get('/groups/{group}/edit',[GroupController::class, 'edit'])->name('group.edit');
Route::get('/teachers/{teacher}/edit',[TeacherController::class, 'edit'])->name('teacher.edit');
Route::get('/children/{child}/edit',[ChildController::class, 'edit'])->name('child.edit');
Route::get('/caretakers/{caretaker}/edit',[CaretakerController::class, 'edit'])->name('caretaker.edit');

Route::patch('/groups/{group}',[GroupController::class, 'update'])->name('group.update');
Route::patch('/children/{child}',[ChildController::class, 'update'])->name('child.update');
Route::patch('/teachers/{teacher}',[TeacherController::class, 'update'])->name('teacher.update');
Route::patch('/caretakers/{caretaker}',[CaretakerController::class, 'update'])->name('caretaker.update');

Route::delete('/groups/{group}',[GroupController::class,'destroy'])->name('group.destroy');
Route::delete('/teachers/{teacher}',[TeacherController::class,'destroy'])->name('teacher.destroy');
Route::delete('/caretakers/{caretaker}',[CaretakerController::class,'destroy'])->name('caretaker.destroy');
Route::delete('/children/{child}',[ChildController::class,'destroy'])->name('child.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
