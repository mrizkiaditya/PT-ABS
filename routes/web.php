<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'home']);

Route::get('/about', [MainController::class, 'about']);

Route::get('/contact', function () {
    if ($locale = session('locale')) {
        app()->setLocale($locale);
    }
    return view('pages.contact', [
        "title" => "Contact"
    ]);
});

// Page Product
Route::get('/jumbo', [MainController::class, 'jumbo']);
Route::get('/sling', [MainController::class, 'sling']);
Route::get('/asphalt', [MainController::class, 'asphalt']);
Route::get('/geo-bag', [MainController::class, 'geobag']);
Route::get('/geo-nonwov', [MainController::class, 'geononwov']);
Route::get('/geo-tub', [MainController::class, 'geotub']);
Route::get('/geowov', [MainController::class, 'geowov']);
Route::get('/p-bag', [MainController::class, 'pbag']);
Route::get('/p-belt', [MainController::class, 'pbelt']);
Route::get('/pepp-rope', [MainController::class, 'pepprope']);
Route::get('/plastic', [MainController::class, 'plastic']);
Route::get('/others', [MainController::class, 'others']);

Route::get('/customer', [MainController::class, 'customer']);
Route::get('/factory', [MainController::class, 'factory']);


// BAHASA

Route::get('switch/{locale}', [MainController::class, 'switch']);