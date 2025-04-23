<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
 

Route::get('/', [HomepageController::class, 'index']); 
Route::get('products', [HomepageController::class, 'products']); 
Route::get('product/{slug}', [HomepageController::class, 'product']); 
Route::get('categories',[HomepageController::class, 'categories']); 
Route::get('category/{slug}', [HomepageController::class, 'category']); 
Route::get('cart', [HomepageController::class, 'cart']); 
Route::get('checkout', [HomepageController::class, 'checkout']); 

























// Route::get('products', function(){
//     $title = "Products";
//     return view('web.products',['title'=>$title]);
//     });

// Route::get('product/{slug}', function($slug){
//     $title = "Single Product";
//     return view('web.single_product',['title'=>$title,'slug'=>$slug]);
//     });

// Route::get('categories', function(){
//     $title = "Categories";
//     return view('web.categories',['title'=>$title]);
//     });

// Route::get('category/{slug}', function($slug){
//     $title = "Single Category";
//     return view('web.single_category',['title'=>$title,'slug'=>$slug]);
//     });

// Route::get('cart', function(){
//     $title = "Cart";
//     return view('web.cart',['title'=>$title]);
//     });
    
// Route::get('checkout', function(){
//     $title = "Checkout";
//     return view('web.checkout',['title'=>$title]);
//     });
