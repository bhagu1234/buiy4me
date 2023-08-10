<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\TripController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// HomeController==================
Route::get('/',[HomeController::class,"home"])->name('home');
        
// AuthController
Route::get('/registrion',[AuthController::class,"Registrion"])->name('registrion');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/user_login', [AuthController::class, 'User_Login'])->name('login.user'); 
Route::post('/user-registration', [AuthController::class, 'userRegistration'])->name('register.user');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// UserProfileController
Route::get('create_order',[UserProfileController::class,'create_order'])->name('user.create_order');
Route::get('treveller',[UserProfileController::class,'treveller_store'])->name('user.treveller');


// UserProfileController
Route::group(['middleware' => ['auth']], function() {

    Route::get('profile',[UserProfileController::class,'profile'])->name('user.profile');
    Route::post('edit_profile_data',[UserProfileController::class,'edit_profile_data'])->name('user.edit_profile_data');
    Route::get('setting',[UserProfileController::class,'setting'])->name('user.setting');
    Route::get('trip',[UserProfileController::class,'trip'])->name('user.trip');
    Route::post('create_trip',[UserProfileController::class,'create_trip'])->name('user.create_trip');
    Route::get('orders',[UserProfileController::class,'orders'])->name('user.orders');
    Route::get('order_details/{id}',[UserProfileController::class,'order_details'])->name('user.order_details');
    Route::get('order_cancle/{id}',[UserProfileController::class,'order_cancle'])->name('user.order_cancle');
    
    Route::get('edit_order/{id}',[UserProfileController::class,'edit_order'])->name('user.edit_order');
    Route::post('update_order',[UserProfileController::class,'update_order'])->name('user.update_order');
    Route::get('product_details',[UserProfileController::class,'product_details'])->name('user.product_details');
    Route::get('help_desk',[UserProfileController::class,'help_desk'])->name('user.help_desk');
    Route::get('firebase-phone-authentication', [UserProfileController::class, 'phone_verify']);
    Route::post('order_product', [UserProfileController::class, 'order_product'])->name('user.order_product');
    Route::get('matched_trip/{id}', [UserProfileController::class, 'matched_trip'])->name('user.matched_trip');
    Route::get('send_tripRequest/{id}', [UserProfileController::class, 'send_tripRequest'])->name('user.send_tripRequest');
    Route::get('check_trOffer/{id}', [UserProfileController::class, 'check_trOffer'])->name('user.check_trOffer');
    Route::get('travel_offer_reChange/{id}', [UserProfileController::class, 'travel_offer_reChange'])->name('user.travel_offer_reChange');
    Route::get('matched_order/{id}', [UserProfileController::class, 'matched_order'])->name('user.matched_order');

    // ProductController
    Route::get('fatch/product_detail', [ProductController::class, 'fatch_product_detail'])->name('product.fatch_product_detail');

    Route::get('stripe', [paymentController::class, 'stripe'])->name('stripe.index');
    Route::post('stripePost', [paymentController::class, 'stripePost'])->name('stripe.post');

    // VerificationController
    Route::get('email_verification', [VerificationController::class, 'email_verification'])->name('email_verification.index');
    Route::get('build', [VerificationController::class, 'build'])->name('build.index');
    Route::get('mobile_verification', [VerificationController::class, 'mobile_verification'])->name('mobile_verification.index');
    Route::post('processMobileVerification', [VerificationController::class, 'processMobileVerification'])->name('processMobileVerification.index');

    Route::get('stripeIdentity', [VerificationController::class, 'stripeIdentity'])->name('stripeIdentity.index');
    Route::get('create_verification_session', [VerificationController::class, 'create_verification_session'])->name('create_verification_session.index');
    Route::get('submitted', [VerificationController::class, 'submitted'])->name('submitted.index');

});
// TripController
Route::get('make_offer_html/{id}', [TripController::class, 'make_offer_html'])->name('make_offer_html');
Route::get('travel-create_offer/{id}', [TripController::class, 'create_offer'])->name('travel.create_offer');
