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

//manage pets
Route::get('/pets/manage', [PetController::class, 'manage'])->middleware('auth');

//Show details for pet
Route::get('/pets/{pet}', [PetController::class, 'show']);

//edit pet details
Route::get('/pets/{pet}/edit', [PetController::class, 'edit'])->middleware('auth');

//update pet info in database
Route::put('/pets/{pet}', [PetController::class, 'update'])->middleware('auth');

//delete
Route::delete('/pets/{pet}', [PetController::class, 'destroy'])->middleware('auth');

//Show pet list
Route::get('/pets', [PetController::class, 'petsList']);


//Store pet on database
Route::post('/pets', [PetController::class, 'store'])->middleware('auth');

//Show register form
Route::get('/register', [UserController::class, 'register']);

//Store user on database
Route::post('/users', [UserController::class, 'store']);

//login form
Route::get('/login', [UserController::class, 'login'])->middleware('guest');

//authenticate user and assign session
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//logout user
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/faq', function(){
    return view('pages.faq');
});

Route::get('/testimonies', function(){
    return view('pages.testimonial');
});