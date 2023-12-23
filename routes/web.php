<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Models\User;

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

Route::get("/", [HomeController::class, "index"])->name('index');
Route::get("/menu", [HomeController::class, "menu"])->name('menu');
Route::get("/about", [HomeController::class, "about"])->name('about');
Route::get("/contact", [HomeController::class, "contact"])->name('contact');
Route::get("/blog", [HomeController::class, "blog"])->name('blog');
Route::get("/product_details/{id}", [HomeController::class, "productDetails"])->name('product');
Route::get("/kind/{id}", [HomeController::class, "kind"])->name('kind');
Route::get("/cart", [HomeController::class, "cart"])->name('cart');




// admin
Route::group(['middleware' => 'checkAdminSession'], function () {
    Route::prefix("/admin")->group(function(){
        Route::get("/", function () {
            return view('admin.layouts.home');
        })->name('admin'); 
        // category admin
        Route::prefix("/category")->group(function(){
            Route::get("/", [CategoryController::class, "list"]);
            Route::get("/create", [CategoryController::class, "create"]);
            Route::get("/edit/{id}", [CategoryController::class, "edit"]);
            Route::get("/remove/{id}", [CategoryController::class, "remove"]);
    
            // form action
            Route::post("/store", [CategoryController::class, "store"]);
            Route::get("/update/{id}", [CategoryController::class, "update"]);
        });
        // end category admin
    
        // product admin
        Route::prefix("/product")->group(function(){
            Route::get("/", [ProductController::class, "list"]);
            Route::get("/create", [ProductController::class, "create"]);
            Route::get("/edit/{id}", [ProductController::class, "edit"]);
            Route::get("/remove/{id}", [ProductController::class, "remove"]);
    
            // form action
            Route::post("/store", [ProductController::class, "store"]);
            Route::put("/update/{id}", [ProductController::class, "update"]);
        });
        // end product admin
    
        // order admin
        Route::prefix("/order")->group(function(){
            Route::get("/", [OrderController::class, "listOrder"]);
            Route::post("/detail/{id}", [
                'as' => 'order.detail',
                'uses' => 'OrderController@detail'
            ]);
            Route::get("/remove/{id}", [
                'as' => 'order.remove',
                'uses' => 'OrderController@remove'
            ]);
        });
        // end order admin
    
        // user admin
        Route::prefix("/user")->group(function(){
            Route::get("/", [UserController::class, "list"]);
            Route::get("/create", [
                'as' => 'user.create',
                'uses' => 'UserController@create'
            ]);
            Route::post("/update/{id}", [
                'as' => 'user.update',
                'uses' => 'UserController@update'
            ]);
            Route::get("/edit/{id}", [
                'as' => 'user.edit',
                'uses' => 'UserController@edit'
            ]);
        });
        // end user admin
    
    });
});
// end admin
Route::get('/register', [LoginController::class, "register"]);
Route::post('/postRegister', [LoginController::class, "postRegister"]);
Route::get('/login', [LoginController::class, "login"]);
Route::post('/postLogin', [LoginController::class, "postLogin"]);
Route::get('/logout', [LoginController::class, "logout"]);
Route::post('/addtocart', [CartController::class, 'addToCart']);
Route::get('/removecart/{id}', [CartController::class, 'removeCart']);
Route::get('/reducecart/{id}', [CartController::class, 'reduceCart']);
Route::get('/increasecart/{id}', [CartController::class, 'increaseCart']);


Route::post('/order/store', [OrderController::class, 'storeOrder'])->name('order.store');