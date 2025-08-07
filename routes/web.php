<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\AnimalSaleController;
use App\Http\Controllers\ProcedimentoController;
use App\Http\Controllers\GeraProcedimentoController;

Route::get('/home', function () {
    return view('home');
})->name('home');

// Route::view('/adoption', 'adoption');
Route::get('/adoption', [AnimalSaleController::class, 'allAnimals'])->name('adoption');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');
// Route::view('/blog', 'blog')->name('blog');
Route::get('/blogs', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/adoption/store', [AdoptionController::class, 'store'])->name('adoption.store');




Route::fallback(function () {
    return view('errors/404');
});

Route::get('/', function () {
    return view('home');
});

require __DIR__ . '/auth.php';


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::resource('/clientes', ClienteController::class)->name('clientes', '*');

    Route::resource('/animais', AnimalController::class)->name('animals', '*');

    Route::resource('/produtos', ProdutoController::class)->name('produtos', '*');

    Route::resource('/procedimentos', ProcedimentoController::class)->name('procedimentos', '*');

    Route::resource('/gera-procedimento', GeraProcedimentoController::class)->name('gera-procedimento', '*');

    Route::get('/generate-pdf/{type}', [PdfController::class, 'generate'])->name('generate-pdf');

    Route::get('/add-blog', [BlogController::class, 'create'])->name('add.blog');
    Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');


    Route::get('/admin/blogs', [BlogController::class, 'indexAdmin'])->name('admin.blogs');
    Route::get('/admin/blogs/edit/{id}', [BlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::post('/admin/blogs/update/{id}', [BlogController::class, 'update'])->name('admin.blogs.update');
    Route::delete('/admin/blogs/delete/{id}', [BlogController::class, 'destroy'])->name('admin.blogs.delete');

    Route::resource('animals', AnimalSaleController::class)->names('animalSales');

});
