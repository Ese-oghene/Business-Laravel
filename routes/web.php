<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', [HomeController::class, 'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
});

route::get('/redirect', [HomeController::class, 'redirect']);
route::get('/view_category', [AdminController::class, 'ViewCategory'])->name('view_category');
route::post('/add_category', [AdminController::class, 'AddCategory']);
route::get('/delete_category/{id}', [AdminController::class, 'DeleteCategory']);
route::get('/view_product', [AdminController::class, 'ViewProduct'])->name('view_product');
route::post('/add_product', [AdminController::class, 'AddProduct'])->name('add_product');
route::get('/show_product', [AdminController::class, 'ShowProduct'])->name('show_product');

route::post('/update_product_confirm/{id}', [AdminController::class, 'UpdateProductConfirm'])->name('update_product_confirm');

route::get('/delete_product/{id}', [AdminController::class, 'DeleteProduct'])->name('delete_product');
route::get('/update_product/{id}', [AdminController::class, 'UpdateProduct'])->name('update_product');
route::get('/order', [AdminController::class, 'Order'])->name('order');
route::get('/delivered/{id}', [AdminController::class, 'Delivered'])->name('delivered');
route::get('/print_pdf/{id}', [AdminController::class, 'PrintPdf'])->name('print_pdf');

route::get('/product_details/{id}', [HomeController::class, 'ProductDetails'])->name('product_details');
route::post('/add_cart/{id}', [HomeController::class, 'AddCart'])->name('add_cart');
route::get('/show_cart', [HomeController::class, 'ShowCart'])->name('show_cart');
route::get('/remove_cart/{id}', [HomeController::class, 'RemoveCart'])->name('remove_cart');
route::get('/cash_order', [HomeController::class, 'CashOder'])->name('cash_order');