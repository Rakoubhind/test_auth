<?php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\User;
use App\Models\Role;
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

Route::get('/students',[StudentController::class,'index'])->middleware('auth');

Route::post('/ajouter-etudiant',[StudentController::class,'store'])->name('store.students');

Route::get('/students/{id}',[StudentController::class,'edit'])->name('edit.students');

Route::put('/student',[StudentController::class,'update'])->name('update.students');

Route::delete('/students/{id}',[StudentController::class,'delete']);

Route::delete('/selected-students',[StudentController::class,'deletecheckedStudents'])->name('delete.students');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');

Route::get('/accueil', [App\Http\Controllers\HomeController::class,'getIndex']);
