<?php

use App\Models\Album;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PinController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\ChangepasswordController;
use App\Http\Controllers\ViewController;

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
    return view('page.index');
});

Route::get('/login', function () {
    return view('page.login');
})->name('login');
Route::get('/register', function () {
    return view('page.register');
});

Route::middleware('auth')->group(function(){

    Route::get('/explore', function () {
        return view('page.explore');
    });
    Route::get('/explore-detail/{id}', function () {
        return view('page.explore-detail');
    });
    Route::get('/getDataExplore', [ExploreController::class,'getdata']);
    Route::post('/likefotos',[ExploreController::class,'likefotos']);
    route::get('/other-pin/getDataPin/{id}', [PinController::class, 'getdatapin']);
    route::get('/getdataotherpinexplore', [PinController::class, 'getdata']);


    Route::get('/explore-detail/{id}/getdatadetail',[ExploreController::class,'getdatadetail']);

    Route::get('/explore-detail/getKomentar/{id}',[ExploreController::class,'ambildatakomentar']);

    Route::post('/explore-detail/kirimkomentar',[ExploreController::class,'kirimkomentar']);
    Route::get('/my-pin', function () {
        return view('page.my-pin');
    });
    Route::get('/my-pin', [ChangepasswordController::class, 'profil']);
    Route::get('/pin', function () {
        return view('page.pin');
    });
    Route::get('/profil', [ChangepasswordController::class, 'editprofil']);
    Route::get('/changepassword', function () {
        return view('page.changepassword');
    });
    Route::post('/changepassword', [ChangepasswordController::class, 'change']);
    Route::post('/update', [ChangepasswordController::class, 'update']);
    Route::get('/follower', function () {
        return view('page.follower');
    });
    Route::get('/following', function () {
        return view('page.following');
    });
    Route::get('/other-pin/{id}', function () {
        return view('page.other-pin');
    });

    Route::get('/pin', );
    Route::get('/pin', [ViewController::class, 'upload']);
    Route::get('/album', [UserController::class, 'album']);
    Route::get('/viewaddalbum', [AlbumController::class, 'ViewAddAlbum']);
    Route::post('/buat-album', [AlbumController::class, 'storeAlbum']);
    Route::get('/detailalbum/{id}', [AlbumController::class, 'detail']);
    Route::get('/buatalbum', [UserController::class, 'buatalbum']);

    Route::post('/Upload', [FotoController::class, 'upload_foto']);

    // End Web Route

});



// Controller
Route::post('/ProsesRegister', [AuthController::class, 'ProsesRegis']);

Route::post('/ProsesLogin', [AuthController::class, 'ProsesLogin']);

// End Controller
