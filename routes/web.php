<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Icontroller;
use App\Http\Controllers\crudcontroller;
use App\Http\Controllers\authcontroller;
//return view routes of all pages 
Route::get('/',[Icontroller::class,'login'])->name('login');
Route::get('/addpage',[Icontroller::class,'addpage'])->name('add_page');
Route::get('/category',[Icontroller::class,'category'])->name('category');
Route::get('/categoryadd',[Icontroller::class,'categoryadd'])->name('category_add');
Route::get('/change',[Icontroller::class,'change'])->name('change');
Route::get('/pagesumm',[Icontroller::class,'pagesumm'])->name('page_summ');
Route::get('/product',[Icontroller::class,'product'])->name('product');
Route::get('/productadd',[Icontroller::class,'productadd'])->name('product_add');
//add page crud routes 
Route::any('/add-page',[crudcontroller::class,'insert'])->name('add-page');
Route::get('/page',[crudcontroller::class,'display'])->name('page');    
Route::get('delete/{id}',[crudcontroller::class,'delete'])->name('delete');
Route::get('edit/{id}',[crudcontroller::class,'edit'])->name('edit');
Route::post('edit-data/{id}',[crudcontroller::class,'edit_form'])->name('edit-form');
Route::post('/search',[crudcontroller::class,'search'])->name('searchdata');   
//category page crud routes
Route::any('/add-category',[crudcontroller::class,'category'])->name('category');
Route::get('/display',[crudcontroller::class,'show'])->name('show-category');
Route::get('del-cat/{id}',[crudcontroller::class,'del_cat'])->name('del-cat');
Route::get('edit-cat/{id}',[crudcontroller::class,'edit_cat'])->name('edit-cat');
Route::post('edit-cdata/{id}',[crudcontroller::class,'edit_cform'])->name('edit-cform');
Route::post('/find',[crudcontroller::class,'findcat'])->name('findcat');  
//product page crud routes
Route::any('/add-product',[crudcontroller::class,'product'])->name('product');
Route::get('/show-product',[crudcontroller::class,'showp'])->name('product-display');
Route::get('del-pro/{id}',[crudcontroller::class,'del_pro'])->name('delete-pro');
Route::get('edit-pro/{id}',[crudcontroller::class,'edit_pro'])->name('edit-prot');
Route::post('pro-display/{id}',[crudcontroller::class,'pro_display'])->name('pro-display');
Route::post('/record',[crudcontroller::class,'record'])->name('record');
//loginpage
Route::post('/postLogin',[authcontroller::class,'postLogin'])->name('login.post');
Route::get('logout', [authcontroller::class, 'logout'])->name('logout');
//chnagepassword
Route::post('/change-password',[crudcontroller::class,'change'])->name('change.          ');