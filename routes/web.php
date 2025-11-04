<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\BlogsController;
use App\Http\Controllers\backend\BookAcall;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\TokenSale;
use App\Http\Controllers\backend\TokenSaleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BuyTokenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index'])->name('homepage');
Route::get('company',[HomeController::class,'company'])->name('company');
Route::get('investment',[HomeController::class,'investment'])->name('investment');
Route::get('advisory',[HomeController::class,'advisory'])->name('advisory');
Route::get('tokenization',[HomeController::class,'tokenization'])->name('tokenization');

Route::get('buy-token',[BuyTokenController::class,'index'])->name('home.buy');
Route::post('buy-token',[BuyTokenController::class,'buyTXsubmit'])->name('home.buy.submit');

//cached url
// Route::get('faq',[HomeController::class,'faq'])->name('home.faq');
// Route::post('faqstore',[HomeController::class,'faqStore'])->name('home.store.faq');

// Route::get('contact',[HomeController::class,'contact'])->name('home.contact');
Route::post('contact',[HomeController::class,'contactStore'])->name('home.contact.store');

// Route::post('subscrib',[HomeController::class,'subuStore'])->name('home.sabu.store');

// Route::get('blogs',[BlogController::class,'index'])->name('home.blogs');
// Route::get('blog-details/{cat_slug}/{slug}',[BlogController::class,'blogDetails'])->name('home.blog.details');
// Route::get('category/{slug}',[BlogController::class,'allCategoryPost'])->name('home.allcat.post');

Route::get('ucbi_login',[LoginController::class,'login'])->name('admin.login');
Route::post('oklogin',[LoginController::class,'submitLogin'])->name('admin.login');



//admin controller
Route::group(['prefix' => 'admin', 'middleware' => 'isAdmin'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('myadmin');
    Route::get('oksignup',[LoginController::class,'signup'])->name('admin.signup');
    Route::post('oksignup',[LoginController::class,'store'])->name('admin.signup');
    Route::get('logout',[LoginController::class,'submitLogout'])->name('admin.logout');

    Route::group(['prefix'=> 'category'], function(){
        Route::get('/',[CategoryController::class,'Index'])->name('admin.category');
        Route::post('store',[CategoryController::class,'store'])->name('admin.category.store');
        Route::put('update/{id}',[CategoryController::class,'update'])->name('admin.category.update');
        Route::post('delete/{id}',[CategoryController::class,'destroy'])->name('admin.category.destroy');
    });

    Route::group(['prefix'=> 'blogs'], function(){
        Route::get('/',[BlogsController::class,'index'])->name('admin.all.blogs');
        Route::get('create',[BlogsController::class,'create'])->name('admin.blogs.store');
        Route::post('create',[BlogsController::class,'store'])->name('admin.blogs.store');
        Route::get('edit/{id}',[BlogsController::class,'edit'])->name('admin.blogs.edit');
        Route::put('update/{id}',[BlogsController::class,'update'])->name('admin.blogs.update');
        Route::post('delete/{id}',[BlogsController::class,'destroy'])->name('admin.blogs.destroy');

        Route::get('date-filter',[BlogsController::class,'dateWillShow'])->name('admin.blogs.date');
    });


    Route::group(['prefix'=> 'contact'], function(){
        Route::get('/', [BookAcall::class, 'index'])->name('admin.all.contact');
        Route::post('/', [BookAcall::class, 'status'])->name('admin.all.msg.status');
        Route::post('read/{id}',[BookAcall::class,'readMsg'])->name('admin.all.msg.read');
        Route::post('destroy/{id}',[BookAcall::class,'destroy'])->name('admin.all.msg.destroy');

        Route::get('subscriber',[BookAcall::class,'allSubscriber'])->name('admin.all.subscriber');
        Route::post('subdelete/{id}',[BookAcall::class,'subDestroy'])->name('admin.all.subscriber.destroy');
    });

    Route::group(['prefix'=> 'token-sales'], function(){
        Route::get('/',[TokenSaleController::class,'index'])->name('admin.token-sales');
        Route::post('/',[TokenSaleController::class,'store'])->name('admin.token-sales.store');
        Route::post('update/{id}',[TokenSaleController::class,'update'])->name('admin.token-sales.update');
        Route::post('delete/{id}',[TokenSaleController::class,'destroy'])->name('admin.token-sales.destroy');

        Route::get('token-info',[TokenSaleController::class,'tokenInfo'])->name('admin.token-info');
        Route::post('token-info',[TokenSaleController::class,'updateTokenInfo'])->name('admin.update.token-info');
    });

    Route::group(['prefix'=> 'setting'], function(){
        Route::get('/',[SettingController::class,'index'])->name('admin.setting');
        Route::post('/',[SettingController::class,'updateSetting'])->name('admin.update.setting');

        Route::get('profile',[SettingController::class,'profile'])->name('admin.profile');
        Route::post('profile',[SettingController::class,'updateProfile'])->name('admin.profile');
        Route::post('forget',[SettingController::class,'updatePassword'])->name('admin.forget');

        Route::get('socials',[SettingController::class,'socials'])->name('admin.socials');
        Route::post('socials',[SettingController::class,'updateSocials'])->name('admin.socials');
    });
});
