<?php

use App\Http\Controllers\TestController;
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
    return view('index');
});


Route::get('inscription', function () {
    return view('inscription');
});
Route::post('/traitement', [TestController::class, 'envoie']);


Route::get('reinscription', function () {
    return view('reinscription');
});
Route::post('/recherche', [TestController::class, 'search']);

Route::get('scolarite', function () {
    return view('scolarite');
});

Route::get('apropos', function () {
    return view('apropos');
});

Route::get('login', function () {
    return view('login');
});
Route::post('/admin', [TestController::class, 'search_admin']);

Route::get('traitement', function () {
    return view('traitement');
});


Route::post('/traitement_reinscri', function(){
    return view('traitement_reinscri');
});

