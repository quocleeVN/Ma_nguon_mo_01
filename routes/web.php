<?php

use App\Http\Controllers\ViDuController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
    return view('welcome');
});

Route::get('hello', 'App\Http\Controllers\ViDuController@hello');

Route::get('hub', [ViDuController::class, 'hubview']);

Route::prefix('/products')->group(function () {
    Route::get('/', function () {
        return 'Products';
    });
    Route::get('/{id}', function ($id) {
        return 'Products ' . $id;
    });
});

//Trang tính tổng
Route::get('tinhtong', function () {
    return view('sum');
});

Route::get('/sum', [ViDuController::class, 'sum']);

//Các yêu cầu liên quan đến BOOKDB
Route::get('tacphamkd', [ViDuController::class, 'tacphamkd']);

Route::get('/vananh', function () {
    return "Van Anh";
});

Route::get('/baoquoc', function () {
    return "Bao Quoc";
});

Route::get('/vananh2', function(){
    return "Nguyen Tran Van Anh";
});
Route::get('/quynhnhu',function(){
    return "Nguyễn Võ Quỳnh Như";
});
use App\Http\Controllers\MovieController;

Route::prefix('movies')->group(function () {
    Route::get('/genres', [MovieController::class, 'genres']);
    Route::get('/top-rated', [MovieController::class, 'topRated']);
    Route::get('/top-budget', [MovieController::class, 'topBudget']);
    Route::get('/long-movies', [MovieController::class, 'longMovies']);
    Route::get('/canada-movies', [MovieController::class, 'canadaMovies']);
    Route::get('/action-movies', [MovieController::class, 'actionMovies']);
    Route::get('/popular-movies', [MovieController::class, 'popularMovies']);
});