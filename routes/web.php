<?php


use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
    Route::get      COnsultar
    Route::post     guardar
    Route::put      actualizar
    Route::delete   borrar
*/

/* Route::get('/', function () {
    return "<h1>Ruta home</h1>";
}); */

Route::get('/buscar', function (Request $request) {
    return $request;
});

/* 
Route::get('/blog/{id}', [pageController::class,'blog'])->name('blog');
Route::get('/home', [pageController::class,'home'])->name('home'); 
*/

Route::controller(PageController::class)->group(function () {     

    Route::get('/',                'home')->name('home');
    Route::get('blog/{post:slug}', 'post')->name('post');

});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::resource('/posts', PostController::class)->except('show');




require __DIR__.'/auth.php';
