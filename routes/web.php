<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\User\Home\HomeController;
use App\Http\Controllers\Admin\Service\ServiceController;
use App\Http\Controllers\Admin\Term\TermController;
use App\Http\Controllers\Admin\Doctor\DoctorController;
use App\Http\Controllers\Admin\Panel\PanelController;
use App\Http\Controllers\User\Visit\VisitController;
use App\Http\Controllers\Admin\Term\TermsGeneratorController;
use App\Http\Controllers\Mail\ContactController;
use App\Http\Controllers\User\Faq\FaqController;
use App\Http\Controllers\User\Locales\LocalesController;
use App\Http\Controllers\User\Management\ChangePasswordController;
use App\Http\Controllers\User\Management\HistoryController;
use App\Http\Controllers\User\Management\ReservationController;
use App\Http\Controllers\User\Offer\OfferController;
use App\Http\Controllers\User\Team\TeamController;

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
    return view('main.index');
})->name('welcome');
Route::get('/test', function () {
    return view('user.faq.index');
});

Route::post('/send', [ContactController::class, 'send'])->name('send.email');

Auth::routes([
    'verify' => true
]);

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/faq', FaqController::class);
Route::get('/team', TeamController::class);
Route::get('/offer', OfferController::class);
Route::post('/changePassword', ChangePasswordController::class);


// ------users-----------


Route::resource('users', UserController::class);

// ------categories-----------


Route::get('categories/{category}/restore', [CategoryController::class, 'restore'])->name('categories.restore');
Route::resource('categories', CategoryController::class);


// ------services-----------

Route::get('services/{service}/restore', [ServiceController::class, 'restore'])->name('services.restore');
Route::resource('services', ServiceController::class);

// ------doctors-----------

Route::resource('doctors', DoctorController::class);

// ------Terms-----------

Route::resource('terms', TermController::class);

// ------termsgenerator-----------

Route::resource('termsGenerators', TermsGeneratorController::class)->only(['create', 'store']);

// ------Visit-----------

Route::resource('visits', VisitController::class)->only(['index', 'update']);

// ======history===========

Route::resource('histories', HistoryController::class)->only(['index', 'show']);

// ======reservation===========

Route::resource('reservations', ReservationController::class)->only(['index', 'show', 'update']);

// ======AdminPanel===========

Route::resource('panels', PanelController::class)->only(['index']);

// ======locales===========

Route::get('/locales', [LocalesController::class, 'locales'])->name('locales');
