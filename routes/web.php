<?php

use App\Http\Controllers\Controller_movie;
use App\Http\Controllers\ViDuController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD

=======
>>>>>>> 71045c12d59e7d48c4f2a605f02ba6da4a4d6d37
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

Route::get('/vananh', function () {
    return 'Nguyễn Trần Vân Anh';
});

Route::get('/baoquoc', function () {
    return "Bao Quoc";
<<<<<<< HEAD
});

<<<<<<< HEAD
Route::get('/vananh2', function () {
    return "Nguyen Tran Van Anh";
});


Route::get('/genres', function(){
    $genres = DB::table('genre')->get();
    return view('viewmovie.genres', compact('genres'));
});
Route::get('/topvote', function () {
    $movies = DB::table('movie')
            ->orderBy('vote_average', 'desc')
            ->limit(10)
            ->get();
    return view('viewmovie.topvote', compact('movies'));
});
Route::get('/topbudget', function () {
    $movies = DB::table('movie')
            ->orderBy('budget', 'desc')
            ->limit(10)
            ->get();
    return view('viewmovie.topbudget', compact('movies'));
});
Route::get('/runtime', function () {
    $movies = DB::table('movie')
            ->where('runtime', '>', 120)
            ->limit(10)
            ->get();
    return view('viewmovie.runtime', compact('movies'));
});

Route::get('/country', function () {
    $countries = DB::table('movie')
            ->select('country_name')
            ->distinct()
            ->get();
    return view('viewmovie.country', compact('countries'));
});
Route::post('/country_result', function (Illuminate\Http\Request $request) {
    $movies = DB::table('movie')
            ->where('country_name', $request->country)
            ->select('movie_name', 'release_date', 'runtime')
            ->get();
    return view('viewmovie.country_result', compact('movies'));
});

Route::get('/genre', function () {
    $genres = DB::table('genre')->get();
    return view('viewmovie.genre', compact('genres'));
});
Route::post('/genre_result', function (Illuminate\Http\Request $request) {
    $movies = DB::table('movie')
            ->where('movie_name', 'like', '%') // fallback nếu chưa có bảng trung gian
            ->get();
    return view('viewmovie.genre_result', compact('movies'));
});

Route::get('/hotmovie', function () {
    $movies = DB::table('movie')
            ->where('vote_average', '>', 8)
            ->where('vote_count', '>', 10000)
            ->get();
    return view('viewmovie.hotmovie', compact('movies'));
});
=======
>>>>>>> main

//Thao tác với moviedb

//Lấy danh sách thể loại phim
Route::get('/7.1', [Controller_movie::class, 'ds_theloai']);

//Lấy top 10 phim có lượt vote cao nhất
Route::get('/7.2', [Controller_movie::class, 'topvote']);

//Lấy top 10 phim có doanh thu cao nhat
Route::get('/7.3', [Controller_movie::class, 'topbudget']);

//Lấy 10 bộ phim có thời lượng lớn hơn 120p
Route::get('/7.4', [Controller_movie::class, 'topruntime']);

//Lấy các bộ phim của canada
Route::get('/7.5', [Controller_movie::class, 'canada_movie']);

//Lấy các bộ phim có thể loại là action
Route::get('7.6', [Controller_movie::class, 'action_movie']);

//Lấy các bộ phim có điểm bình chọn lớn hơn 8.0 và số lượt bình chọn trung bình lớn hơn 10000
Route::get('7.7', [Controller_movie::class, 'vote_movie']);

<<<<<<< HEAD
Route::get('/sach', [BookController::class, 'book']);
Route::get('/sach/theloai/{id}', [BookController::class, 'theloai']);
Route::get('/sach/chitiet/{id}', [BookController::class, 'chitiet']);
=======
Route::get('/vananh2', function () {
    return "Nguyen Tran Van Anh";
});

Route::get('quynhnhu', function () {
    return 'Nguyễn Võ Quỳnh Như';
});

Route::get('/cau8', function () {
    return "Câu 8: Trong quá trình làm bài, các thành viên không ghi đè code và mỗi người làm mỗi nhánh riêng biệt, code trên Github không thay đổi so với lúc clone về. Không có sự khác biệt về lịch sử commit, vì vậy khi push lên vẫn hợp lệ và không cần pull trước";
});
<<<<<<< HEAD
>>>>>>> main
=======
=======
});
>>>>>>> 048acd01e39c3cd077d148a1116298b3f4a6cf92
>>>>>>> 71045c12d59e7d48c4f2a605f02ba6da4a4d6d37
