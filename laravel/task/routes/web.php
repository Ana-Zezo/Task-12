<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name("welcome.index");

// Route::get("/home", function () {
// return "<h1>Hello Laravel</h1>";
// })->name("home.index");

Route::get("/test/{id}/{name?}", function ($id, $name = "omr") {
    return "This is $id And Your Name Is $name";
})->name("home.test");

Route::get("/home", function () {
    return view("pages.index");
})->name("pages.index");
Route::get("about", function () {
    return view("pages.about");
})->name("pages.about");
Route::get("/contact", function () {
    return view("pages.contact");
})->name("pages.contact");


Route::get("/product/{id}", function ($id) {
    $products = [
        1 => [
            "title" => "Product Number One",
            "desc" => "Product Number One Desc",
            "is_new" => true
        ],
        2 => [
            "title" => "Product Number Two",
            "desc" => "Product Number Two Desc",
            "is_new" => false,
            "is_reviews" => true,

        ],
        3 => [
            "title" => "Product Number Three",
            "desc" => "Product Number Three Desc",
            "is_new" => true

        ],
    ];
    abort_if(!isset($products[$id]), 404);
    $product = $products[$id];

    // return view("products.show", ["product" => $product]);
    return view("products.show", compact("product"));
})->name("products.show");


Route::get("/products/{id}", function ($id) {
    $products = [
        1 => [
            "title" => "Product Number One",
            "desc" => "Product Number One Desc",
            "is_new" => true
        ],
        10 => [
            "title" => "Product Number Two",
            "desc" => "Product Number Two Desc",
            "is_new" => false,
            "is_reviews" => true,

        ],
        5 => [
            "title" => "Product Number Three",
            "desc" => "Product Number Three Desc",
            "is_new" => true

        ],
    ];
    return view("products.index", ["products" => $products]);
})->name("products.index");

Route::view("myTest", "welcome");