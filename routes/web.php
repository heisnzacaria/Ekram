<?php
use App\Http\Controllers\produitController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('produits.home');
});
Route::get('/home', function () {
    return view('produits.home');
});
Route::get('/aboutus', function () {
    return view('produits.aboutus');
});



Route::get('/produit', [ProduitController::class,'index']);
Route::get('/produit/{produit}/edit', [ProduitController::class,'edit']);
Route::post('/produit/{produit}', [ProduitController::class,'update']);
Route::get('/produit/create', [ProduitController::class,'create']);
Route::post('/produit', [ProduitController::class,'store']);

Route::get('produit/{produit}', [ProduitController::class,'destroy']);