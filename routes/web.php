<?php

use App\Http\Controllers\contactcontroller;
use Illuminate\Support\Facades\Route;



Route::get('/',[contactcontroller::class,'index']);
Route::get('contact', [contactcontroller::class,'contact']);
Route::post('store', [contactcontroller::class,'store']);
Route::put('edit/{id}', [contactcontroller::class,'edit']);
Route::patch('update/{id}', [contactcontroller::class,'update']);
Route::post('destroy/{id}', [contactcontroller::class,'destroy']);
