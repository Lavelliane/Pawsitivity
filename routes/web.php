<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
use App\Http\Controllers\UserController;

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

//Show home page
Route::get('/', [PetController::class, 'index']);

//Show create pet form
Route::get('/pets/add', [PetController::class, 'create'])->middleware('auth');

//Show details for pet
Route::get('/pets/{pet}', [PetController::class, 'show']);

//Show pet list
Route::get('/pets', [PetController::class, 'petsList']);


//Store pet on database
Route::post('/pets', [PetController::class, 'store'])->middleware('auth');


//Show register form
Route::get('/register', [UserController::class, 'register']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'login'])->middleware('guest');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);