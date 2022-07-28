<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\registerController;
use App\Models\product;
use Illuminate\Support\Facades\Route;

//LOGIN
Route::post('Login/Validar/',[loginController::class, 'validar'])->name('login.validar');
Route::get('Login/formRecover',[loginController::class,'formRecover'])->name('login.formRecover');
Route::post('Recover/Validar',[loginController::class, 'mailValidar'])->name('recover.validar');
Route::get('Login/CerrarSesion',[loginController::class, 'closeSession'])->name('close.session');

//REGISTER
Route::get('Register',[registerController::class, 'index'])->name('Register.formulario');
Route::post('Register/Validar',[registerController::class, 'validarRegistrar'])->name('Register.validar');

//PRODUCTS
Route::get('/',[productsController::class, '__invoke'])->name('main');
Route::get('Login',[productsController::class, 'irLogin'])->name('login');
Route::get('Category/lista',[productsController::class, 'index'])->name('category.list');
Route::get('Category/Products/{categories}',[productsController::class, 'productByCategory'])->name('category.products');
Route::get('Products/Detalles/{id}',[productsController::class, 'productDetail'])->name('product.detail');

//AJAX
Route::post('ajax',[productsController::class, 'ajax'])->name('ajax');

