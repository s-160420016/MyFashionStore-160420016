<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('supplier', SupplierController::class);
Route::resource('transaction', TransactionController::class);

Route::get('/report/showclothes/{category_id}', [CategoryController::class, 'showProduct'])->name('reportShowProduct');

Route::get('/report/category/averageprice', [CategoryController::class, 'averagePrice'])->name('reportShowAverage');

Route::get('/report/product/showleaststock', [ProductController::class, 'leastStock'])->name('reportShowLeastStockPerSupplier');

Route::post('/product/showInfo', [ProductController::class,'showInfo'])->name('products.showInfo');

Route::post('/product/mostExpensive', [ProductController::class,'mostExpensive'])->name('products.mostExpensive');

Route::post('/category/showproducts', [CategoryController::class,'showProducts'])->name('category.showProducts');

Route::post('/transaction/detailtransaction', [TransactionController::class,'detailTransaction'])->name('transaction.detailTransaction');

Route::get('/', function () {
    return view('layout.example');
});

Route::get('/kategori/{kategori?}', function ($kategori = "")
{
    if (!$kategori)
    {
        return view('kategori',
        [
            "array_kategori" =>
            [
                0 =>
                [
                    "nama" => "Bayi",
                    "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTg8M9YYcFUcFlmKA4RjSgo9_OTqYm7v2vQPQ&usqp=CAU"
                ],
                1 =>
                [
                    "nama" => "Remaja",
                    "gambar" => "https://www.gant.ae/images/regular-fit-linen-short-sleeve-shirt-p5321-436109_thumb.jpg"
                ]
            ]
        ]);
    } else
    {
        if ($kategori == "remaja")
        {
            return view("kategori",
            [
                "kategori" => "remaja",
                "array_item" =>
                [
                    0 =>
                    [
                        "nama" => "T-Shirt",
                        "deskripsi" => "Ini adalah T-Shirt berwarna biru",
                        "harga" => 100000,
                        "gambar" => "https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/452402/sub/goods_452402_sub14.jpg?width=750"
                    ],
                    1 =>
                    [
                        "nama" => "Shirt",
                        "deskripsi" => "Ini adalah Shirt berwarna hitam",
                        "harga" => 100000,
                        "gambar" => "https://zajo.bwcdn.net/media/2022/06/1/5/sk-leon-t-shirt-ss-15869-size-large-v-2.jpg"
                    ],
                    2 =>
                    [
                        "nama" => "Outer",
                        "deskripsi" => "Ini adalah Outer batik",
                        "harga" => 100000,
                        "gambar" => "https://batikunik.com/userfiles/uploads/outer-batik-katun-94875-4.jpg"
                    ],
                    3 =>
                    [
                        "nama" => "T-Shirt",
                        "deskripsi" => "Ini adalah T-Shirt berwarna merah",
                        "harga" => 100000,
                        "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSibeTSaTl690EVNqIVDQf4fqrUKurql-rNyg&usqp=CAU"
                    ],
                    4 =>
                    [
                        "nama" => "Shirt",
                        "deskripsi" => "Ini adalah Shirt berwarnah hijau",
                        "harga" => 100000,
                        "gambar" => "https://www.gant.ae/images/regular-fit-linen-short-sleeve-shirt-p5321-436109_thumb.jpg"
                    ],
                    5 =>
                    [
                        "nama" => "Outer",
                        "deskripsi" => "Ini adalah Outer batik",
                        "harga" => 100000,
                        "gambar" => "https://batikunik.com/userfiles/uploads/outer-batik-katun-94875-4.jpg"
                    ]
                ]
            ]);
        } else
        {
            return view("kategori",
                [
                    "kategori" => "bayi"
                ]
            );
        }
    }
});
