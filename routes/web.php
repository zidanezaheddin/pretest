<?php

use App\Http\Controllers\IngredientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\FoodController;


Route::get('/', 'App\Http\Controllers\FoodController@listFood');

//Route::get('/foods/{id}','FoodController@detailFood')->name('detail');
Route::get('/foods/{id}', [FoodController::class, 'detailFood'])->name('detail');


Route::resource('category', CategoryController::class)->middleware('auth');

Route::resource('food',FoodController::class)->middleware('auth');

Route::resource('ingredient', IngredientController::class);

Auth::routes(['register']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
