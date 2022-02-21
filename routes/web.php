<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\loginController;
use App\Http\controller\AdminController;


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
    return view('user.dashboard.login');
});


//admin routes
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/',[loginController::class, 'login'])->name('login');

    //add user routes
    Route::prefix('/user')->name('users.')->group(function(){
        Route::get('/add','AddUserController@addUser')->name('add');
        Route::post('/store','AddUserController@store')->name('store');
        Route::get('/view','AddUserController@viewUser')->name('view');
        Route::get('/update-account-status/{id}/{status}','AddUserController@updateAccountStatus')->name('account_status.update');
        Route::get('/edit/{id}','AddUserController@editUser')->name('edit');
        Route::get('/delete/{id}','AddUserController@deleteUser')->name('delete');
        //cashbox
        Route::get('/Cashbox','PaymentController@cashbox')->name('cashbox');
        //deposite
        Route::get('/Deposite','PaymentController@deposite')->name('deposite');
        //Profit
        Route::get('/Profit','PaymentController@profit')->name('profit');
        
        
    });

    //package routes
    Route::prefix('/prefix')->name('packages.')->group(function(){
        Route::get('/add','PackageController@addPackage')->name('add'); 
        Route::post('/store','packageController@store')->name('store');
        Route::get('/view','PackageController@viewPackage')->name('view');
        Route::get('/update-status/{id}/{status}','PackageController@updatePackageStatus')->name('status.update');
        Route::get('/edit/{id}','PackageController@editPackage')->name('edit');
        Route::get('/delete/{id}','PackageController@deletePackage')->name('delete');
    });
});

//user dashborad routes
Route::namespace('User')->prefix('users')->name('users.')->group(function(){
    Route::post('/check',[loginController::class, 'check'])->name('check');
    Route::post('/logout',[loginController::class,'logout'])->name('logout');
    
    Route::middleware('UserAuth')->group(function(){
        Route::get('/','UserDashBoardController@index')->name('dashboard');
        Route::get('/Profile','UserDashBoardController@profile')->name('profile');
    });

    //user packages routes
    Route::prefix('/user-package')->name('user_packages.')->group(function(){
        Route::get('/buy','UserPackageController@buyPackage')->name('buy');
        Route::get('/view','UserPackageController@viewPackage')->name('view');
    });

    //user profit routes
    Route::prefix('/user-profit')->name('user_profits.')->group(function(){
        Route::get('/','UserProfitController@viewProfit')->name('view');
    });
    
});


//front routes
Route::namespace('Frontend')->name('fronts.')->group(function(){

    Route::post('/registration','HomeController@register_user')->name('registeration');
    
    Route::get('/','HomeController@index')->name('home');
    Route::get('/about','HomeController@about')->name('about');
    Route::get('/contact','HomeController@contact')->name('contact');
    Route::get('/faq','HomeController@faq')->name('faq');
    Route::get('/investment','HomeController@investment')->name('investment');
    Route::get('/login','HomeController@login')->name('login');
    Route::get('/referrals','HomeController@referral')->name('referral');
    Route::get('/register','HomeController@register')->name('register');
}); 