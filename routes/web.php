<?php

use App\Http\Controllers\abonnementsController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\accountController;
use App\Http\Controllers\accountInfosByMenuController;
use App\Http\Controllers\achatsController;
use App\Http\Controllers\AdresseController;
use App\Http\Controllers\articlesController;
use App\Http\Controllers\articlesHomeController;
use App\Http\Controllers\authenticationController;
use App\Http\Controllers\boutiquesController;
use App\Http\Controllers\clientsController;
use App\Http\Controllers\clientUtilisateurController;
use App\Http\Controllers\commandesController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\descriptionController;
use App\Http\Controllers\fournisseursController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\imagesController;
use App\Http\Controllers\liensController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\paypalCtr;
use App\Http\Controllers\profileController;
use App\Http\Controllers\promotionsController;
use App\Http\Controllers\requisitionsController;
use App\Http\Controllers\reservationsController;
use App\Http\Controllers\userController;
use App\Http\Controllers\ventesController;
use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\search;

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
Route::get('/account-articles', [articlesController::class, 'accountArticles'])->name('articles');

Route::post('/boutiqueExist', [boutiquesController::class, 'boutiqueExist']);


Route::get('/about', [aboutController::class, 'show'])->name('about');

Route::get('/promotions', [promotionsController::class, 'show'])->name('promotions');
Route::get('/promotions/{id}', [promotionsController::class, 'moreInfos'])->name('promotions.infos');
Route::get('/account-infos-menu', [accountInfosByMenuController::class, 'show'])->name('account.infos.menu.show');
Route::get('/menu', [menuController::class, 'show'])->name('menu.show');

Route::get('/abonnements', [abonnementsController::class, 'show'])->name('abonnements.show');
Route::post('/abonnements', [abonnementsController::class, 'create'])->name('abonnements.create');


Route::middleware(['auth'])->group(function () {


    Route::post('paypal', [paypalCtr::class, 'paypal'])->name('paypal');
    Route::get('success', [paypalCtr::class, 'success'])->name('success');
    Route::get('cancel', [paypalCtr::class, 'cancel'])->name('cancel');



    Route::get('/dashboard', [dashboardController::class, 'show'])->name('dashboard');
    
    Route::get('/articles', [articlesController::class, 'show'])->name('articles.show');
    Route::post('/articles', [articlesController::class, 'create'])->name('articlesManagment');
    Route::put('/articles', [articlesController::class, 'update'])->name('articlesManagment');
    Route::delete('/articles', [articlesController::class, 'remove'])->name('articlesManagment');    
    Route::get('/articles/{id}', [articlesController::class, 'showMore'])->name('articles.show.more');
    // Route::get('/articles/{id}', [articlesController::class, 'listPromotion'])->name('list.promotion');
    
    // Route::get('/articles/{id}', [descriptionController::class, 'index']);
    Route::post('/descriptions', [descriptionController::class, 'store']);
    Route::put('/descriptions', [descriptionController::class, 'update']);
    Route::delete('/descriptions', [descriptionController::class, 'remove']);

    Route::get('/images-articles', [imagesController::class, 'index']);
    Route::post('/images-articles', [imagesController::class, 'create']);
    Route::put('/images-articles', [imagesController::class, 'update']);
    Route::delete('/images-articles', [imagesController::class, 'remove']);

    
    // achats
    Route::get('/achats', [achatsController::class, 'show'])->name('achats.show');
    Route::post('/achats', [achatsController::class, 'create'])->name('achats.create');
    Route::put('/achats', [achatsController::class, 'put'])->name('achats.put');
    Route::delete('/achats', [achatsController::class, 'delete'])->name('achats.delete');


    // ventes
    Route::get("/ventes", [ventesController::class, 'show'])->name('ventes.show');
    Route::put('/ventes', [ventesController::class, 'put'])->name('ventes.put');
    Route::delete('/ventes', [ventesController::class, 'delete'])->name('ventes.delete');
    Route::post('/ventes', [ventesController::class, 'create'])->name('ventes.delete');
    Route::get('/ventes/historique', [ventesController::class, 'historique'])->name('ventes.historique');
    

    // commandes
    Route::get('/commandes', [commandesController::class, 'show'])->name('commandes.show');
    Route::post('/commandes', [commandesController::class, 'create'])->name('commandes.create');
    Route::put('/commandes', [commandesController::class, 'put'])->name('commandes.put');
    Route::delete('/commandes', [commandesController::class, 'delete'])->name('commandes.delete');


    // reservations
    Route::get('/reservations', [reservationsController::class, 'show'])->name('reservations.show');
    Route::post('/reservations', [reservationsController::class, 'create'])->name('reservations.create');
    Route::put('/reservations', [reservationsController::class, 'put'])->name('reservations.put');
    Route::delete('/reservations', [reservationsController::class, 'delete'])->name('reservations.delete');


    // Tous les fournisseurs
    Route::get('/fournisseurs', [fournisseursController::class, 'show'])->name('fournisseurs.show');
    Route::post('/fournisseurs', [fournisseursController::class, 'create'])->name('fournisseurs.create');
    Route::put('/fournisseurs', [fournisseursController::class, 'put'])->name('fournisseurs.put');
    Route::put('/fournisseurs-profile', [fournisseursController::class, 'uploadProfile'])->name('fournisseurs.upload.profile');
    Route::delete('/fournisseurs', [fournisseursController::class, 'delete'])->name('fournisseurs.delete');
    Route::get('/fournisseurs/{id}', [fournisseursController::class, 'moreInfos'])->name('fournisseur.informations.show');


    Route::post('/promotions', [promotionsController::class, 'create'])->name('promotions.create');
    Route::delete('/promotions', [promotionsController::class, 'delete'])->name('promotions.delete');

    
    // Tous les clients
    Route::get('/clients', [clientsController::class, 'show'])->name('clients.show');
    Route::post('/clients', [clientsController::class, 'create'])->name('clients.create');
    Route::get('/clients/{id}', [clientsController::class, 'showInfos'])->name('clients.informations.show');
    Route::put('/clients', [clientsController::class, 'put'])->name('clients.put');
    Route::put('/clients-profile', [clientsController::class, 'uploadProfile'])->name('client.upload.profile');
    Route::delete('/clients', [clientsController::class, 'delete'])->name('clients.delete');

    // Tous les contacts
    Route::get('/contacts', [contactController::class, 'show'])->name('contacts.show');
    Route::post('/contacts', [contactController::class, 'create'])->name('contacts.create');
    Route::put('/contacts', [contactController::class, 'update'])->name('contacts.put');
    Route::delete('/contacts', [contactController::class, 'remove'])->name('contacts.delete');
    
    
    Route::get('/client-utilisateur', [clientUtilisateurController::class, 'index'])->name('client.existant');
    Route::get('/joindre-client-existant', [clientsController::class, 'joindreClientExistant'])->name('joindre.client.existant');
    
    
    // Les réquisitions
    // Route::get('/requisitions', [requisitionsController::class, 'show']);
    Route::post('/requisitions', [requisitionsController::class, 'create']);
    Route::put('/requisitions', [requisitionsController::class, 'update']);
    Route::get('/cancel-requisitions', [requisitionsController::class, 'cancel']);
    Route::delete('/requisitions', [requisitionsController::class, 'delete']);


    Route::get('/profile', [profileController::class, 'show'])->name('profile');
    Route::post('/profile', [profileController::class, 'update']);


    // Adresse....
    Route::get('/adresse', [AdresseController::class, 'get'])->name('adresse.get');
    Route::post('/adresse', [AdresseController::class, 'create'])->name('adresse.create');
    Route::put('/adresse', [AdresseController::class, 'update'])->name('adresse.update');
    Route::delete('/adresse', [AdresseController::class, 'delete'])->name('adresse.delete');


    // liens....
    Route::get('/liens', [liensController::class, 'show'])->name('liens.show');
    Route::post('/liens', [liensController::class, 'create'])->name('liens.create');
    Route::put('/liens', [liensController::class, 'update'])->name('liens.update');
    Route::delete('/liens', [liensController::class, 'delete'])->name('liens.delete');


    Route::post('/contact', [contactController::class, 'create'])->name('contact');
    Route::post('/userInformations', [userController::class, 'userInformations']);

    Route::post('/boutique-profile-img', [boutiquesController::class, 'boutiqueProfileImg']);

    Route::get('/boutique', [boutiquesController::class, 'show'])->name('boutique.show');
    Route::post('/boutique', [boutiquesController::class, 'create'])->name('boutique.create');
    Route::put('/boutique', [boutiquesController::class, 'update'])->name('boutique.update');
    Route::delete('/boutique', [boutiquesController::class, 'delete'])->name('boutique.delete');
    
});

