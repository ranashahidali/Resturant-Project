<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\restuController;
use App\Http\public\views;



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

// Route::get('/login', function () {
//     return view('login');
// })->name('login');

Route::group(['middleware'=>"web"],function(){

    Route::get('/',[restuController::class, 'index']);

    Route::get('/list',[restuController::class,'list']);
    
    Route::post('/add',[restuController::class,'add']);
    
    Route::get('/add', function () {
        return view('add');

 
    }); 
 
    Route::get('/delete/{id}',[restuController::class,'delete']); 

    Route::get('/edit/{id}',[restuController::class,'edit']); 
    Route::post('/edit',[restuController::class,'update']); 
    
    

    Route::view('register','/register');
    Route::post('register',[restuController::class,'register']);
    
    
    Route::view('login','/login');
    Route::post('login',[restuController::class,'login']);
    
    
    
    
   





}); 


