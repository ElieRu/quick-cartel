<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\accountController;
use App\Http\Controllers\AdresseController;
use App\Http\Controllers\articlesController;
use App\Http\Controllers\articlesManagmentController;
use App\Http\Controllers\authenticationController;
use App\Http\Controllers\boutiquesController;
use App\Http\Controllers\buyingController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\detailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\promotionsController;
use App\Http\Controllers\sellingController;
use App\Http\Controllers\userController;
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


Route::get('/', [HomeController::class, 'show'])->name('home');


// Route::middleware(['guest'])->group(function () {
    Route::get('/login', [authenticationController::class, 'login'])->name('login');
    Route::post('/passwords', [authenticationController::class, 'passwords']);
    Route::get('/register', [authenticationController::class, 'register'])->name('register');
    Route::get('/forgot-password', [authenticationController::class, 'forgot_password'])->name('forgot-password');
    Route::get('/password/reset/{token}', [authenticationController::class, 'reset_password'])->name('password.reset');
// });


Route::get('/account', [accountController::class, 'show'])->name('account');
// Route::get('/articles', [articlesController::class, 'show'])->name('articles');
Route::get('/promotions', [promotionsController::class, 'show'])->name('promotions');

Route::post('/boutiqueExist', [boutiquesController::class, 'boutiqueExist']);



Route::get('/about', [aboutController::class, 'show'])->name('about');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [dashboardController::class, 'show'])->name('dashboard');
    
    
    
    Route::get('/boutique/articles', [articlesController::class, 'show'])->name('articles.show');
    Route::post('/boutique/articles', [articlesController::class, 'store'])->name('articlesManagment');
    Route::put('/boutique/articles', [articlesController::class, 'update'])->name('articlesManagment');
    Route::delete('/boutique/articles', [articlesController::class, 'remove']);


    
    Route::get('/articles/details', [detailsController::class, 'index'])->name('articlesManagment');
    Route::post('/articles/save-details', [detailsController::class, 'store']);
    Route::delete('/articles/delete-details', [detailsController::class, 'remove']);

    
    // Route::post('/articles/description', [articlesManagmentController::class, 'image']);
    Route::post('/articles/catacters', [articlesManagmentController::class, 'caracters'])->name('caracters');

    
    
    Route::get('/buying', [buyingController::class, 'show'])->name('buying');
    Route::get('/selling', [sellingController::class, 'show'])->name('selling');
    Route::get('/profile', [profileController::class, 'show'])->name('profile');

    
    Route::post('/profile', [profileController::class, 'update']);
    
    
    Route::post('/adresse', [AdresseController::class, 'show'])->name('adresse');
    Route::post('/adresseCreate', [AdresseController::class, 'update'])->name('adresse.update');

    
    Route::post('/contact', [contactController::class, 'create'])->name('contact');
    Route::delete('/remove-contact', [contactController::class, 'remove'])->name('contact');



    // 
    Route::post('/userInformations', [userController::class, 'userInformations']);










































Route::get('/boutique', [boutiquesController::class, 'show'])->name('boutique.show');
Route::post('/boutique', [boutiquesController::class, 'create'])->name('boutique.create');
Route::put('/boutique', [boutiquesController::class, 'update'])->name('boutique.update');
Route::delete('/boutique', [boutiquesController::class, 'delete'])->name('boutique.delete');


});
