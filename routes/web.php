<?php

use App\Http\Controllers\Controller_movie;
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
<<<<<<< HEAD
});


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

Route::get('/vananh2', function () {
    return "Nguyen Tran Van Anh";
});

Route::get('quynhnhu', function () {
    return 'Nguyễn Võ Quỳnh Như';
});

Route::get('/cau8', function () {
    return "Câu 8: Trong quá trình làm bài, các thành viên không ghi đè code và mỗi người làm mỗi nhánh riêng biệt, code trên Github không thay đổi so với lúc clone về. Không có sự khác biệt về lịch sử commit, vì vậy khi push lên vẫn hợp lệ và không cần pull trước";
});
=======
});
>>>>>>> 048acd01e39c3cd077d148a1116298b3f4a6cf92
