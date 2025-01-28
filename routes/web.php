<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ConnexionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PdtController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;

Route::get('/home', [PagesController::class, 'home'  ] );
Route::prefix('produit')->group(function () {
    Route::get('/', [ProductController::class, 'produit'])->name('get.product');
    Route::get('/category/{id}', [ProductController::class, 'getProductFromCategoryId'])->name('category.product');
  
});
Route::get('/produit', [ProductController::class ,'produit']);
Route::get('/pdtform', [PdtController::class, 'pdtform']);
Route::post('/ajoutpdt', [PdtController::class, 'ajoutpdt']);


Route::get('/updatepdt/{id}', [PdtController::class, 'updatepdt']);
Route::post('/update', [PdtController::class, 'update']);

Route::post('/deletepdt/{id}', [PdtController::class, 'deletepdt']);




Route ::get('/signupform', [UsersController::class, 'signupform']);
Route::post('/ajoutuser', [UsersController::class, 'ajoutuser']);
Route::get('/signinform' ,  [ConnexionController::class, 'signin']);








