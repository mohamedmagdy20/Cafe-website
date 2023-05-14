<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\MenuController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\WebsiteController;
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

Route::get('/',[WebsiteController::class,'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('menu',[WebsiteController::class,'menu'])->name('menu');
Route::group(['middleware' => 'auth','prefix'=>'admin'],function(){

    Route::group(['prefix' => 'users'], function (){
        $route = 'dashboard.users.';
        Route::get('/',[UserController::class,'index'])->name($route.'index');
        Route::get('data',[UserController::class,'data'])->name($route.'data');
        Route::get('create',[UserController::class,'create'])->name($route.'create');
        Route::get('edit/{id}',[UserController::class,'edit'])->name($route.'edit');
        Route::get('delete/{id}',[UserController::class,'delete'])->name($route.'delete');
        Route::post('store',[UserController::class,'store'])->name($route.'store');
        Route::post('update/{id}',[UserController::class,'update'])->name($route.'update');
       
    });

    Route::group(['prefix' => 'category'], function (){
        $route = 'dashboard.category.';
        
        Route::get('/',[CategoryController::class,'index'])->name($route.'index');
        Route::get('data',[CategoryController::class,'data'])->name($route.'data');
        Route::get('create',[CategoryController::class,'create'])->name($route.'create');
        Route::get('edit/{id}',[CategoryController::class,'edit'])->name($route.'edit');
    
        Route::get('delete/{id}',[CategoryController::class,'delete'])->name($route.'delete');
        Route::post('store',[CategoryController::class,'store'])->name($route.'store');
        Route::post('update/{id}',[CategoryController::class,'update'])->name($route.'update');
    
    });


    Route::group(['prefix' => 'menu'], function (){
        $route = 'dashboard.menu.';
        
        Route::get('/',[MenuController::class,'index'])->name($route.'index');
        Route::get('data',[MenuController::class,'data'])->name($route.'data');
        Route::get('create',[MenuController::class,'create'])->name($route.'create');
        Route::get('edit/{id}',[MenuController::class,'edit'])->name($route.'edit');
    
        Route::get('delete/{id}',[MenuController::class,'delete'])->name($route.'delete');
        Route::post('store',[MenuController::class,'store'])->name($route.'store');
        Route::post('update/{id}',[MenuController::class,'update'])->name($route.'update');
    
    });

});


require __DIR__.'/auth.php';
