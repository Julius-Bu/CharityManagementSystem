<?php

use App\Controller\Admin\AdminDashboard;
use App\Controller\Admin\DonationChart;
use App\Controller\AuthController;
use App\Controller\DonationController;
use App\Controller\Home;
use App\Controller\PaymentController;
use App\Controller\UserController;
use App\Controller\UserDashboard;
use System\Routes\Route;

Route::get('/', [Home::class, 'index']);
Route::group(['middleware' => 'auth'], function () {
// donation routes
	Route::group(['prefix' => 'donations'], function(){

		Route::get('/funds', [DonationController::class, 'donateMoney']);
		Route::get('/account', [DonationController::class, 'createAccount']);
		Route::get('/clothes', [DonationController::class, 'donateClothes']);
		Route::get('/food', [DonationController::class, 'donateFood']);
		Route::get('/shoes', [DonationController::class, 'donateShoes']);
		Route::get('/others', [DonationController::class, 'otherDonations']);
		Route::post('/save', [DonationController::class, 'storeDonations']);
		Route::get('/items/{item}', [DonationController::class, 'donatedItems']);
		Route::get('/money/success', [DonationController::class, 'successfullMoneyDonation']);
	});

	//payment routes
	Route::group(['prefix' => 'payments'], function(){

		Route::post('/init', [PaymentController::class, 'initPaymentProcess']);
		Route::get('/verify', [PaymentController::class, 'verifyPayment']);
	});

	//users routes
	Route::group(['prefix' => 'user'], function(){

		Route::post('/store', [UserController::class, 'store']);
		Route::get('/dashboard', [UserDashboard::class, 'index']);
		Route::get('/charts', [DonationChart::class, 'donationsCharts']);
		Route::get('/donations/{item}', [UserDashboard::class, 'userDonations']);
		Route::get('/dashboard/charts', [UserDashboard::class, 'userDonationCharts']);
	});

	//admin routes
	Route::group(['prefix' => 'admin'], function(){

		Route::get('/dashboard', [AdminDashboard::class, 'index']);
		Route::get('/donations/{item}', [AdminDashboard::class, 'donations']);
		Route::get('/donations/report', [AdminDashboard::class, 'donationsReport']);
		Route::get('/dashboard/charts', [AdminDashboard::class, 'donationCharts']);
		Route::get('/dashboard/users', [UserController::class, 'index']);
		Route::post('/dashboard/user/edit', [UserController::class, 'update']);
		Route::get('/charts', [DonationChart::class, 'donationsCharts']);
		Route::get('/update_satus/{id}/{table_name}', [DonationController::class, 'updateStatus']);
	});

	//auth route
	Route::group(['prefix' => 'auth'], function(){
		Route::post('/user', [AuthController::class, 'authenticate']);
		Route::get('/user/logout', [AuthController::class, 'logout']);
	});

});