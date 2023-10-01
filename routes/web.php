<?php
use App\Http\Controllers\ComicProductController;
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
    return view('home');
});

Route::get('/', [ComicProductController::class, "index"])->name("admin.index");
Route::get('/create', [ComicProductController::class, "create"])->name("admin.create");
Route::get('/{comic}', [ComicProductController::class, "show"])->name("admin.show");
Route::post('/', [ComicProductController::class, "store"])->name("admin.store");
Route::get('/{comic}/edit', [ComicProductController::class, "edit"])->name("admin.edit");
Route::put('/{comic}', [ComicProductController::class, "update"])->name("admin.update");




