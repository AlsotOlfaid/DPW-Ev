<?php

use Illuminate\Support\Facades\Route;
use App\Models\Foods;
use App\Http\Controllers\FoodController;

Route::get('/foods_view', [FoodController::class, 'index'])->name('foods.index');

Route::get('/foods_view/details/{id}', [FoodController::class, 'show'])->name('food.details');

Route::delete('/foods_view/{id}', [FoodController::class, 'destroy'])->name('food.destroy');

Route::get('/food/edit/{id}', [FoodController::class, 'edit'])->name('food.edit');
Route::put('/food/update/{id}', [FoodController::class, 'update'])->name('food.update');

Route::get('/', function () {
    return view('welcome');
});
