<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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

Route::controller(IndexController::class)->name('index.')->group(function () {
   Route::get('/', 'index')->name('index.view');
   Route::get('/about-us', 'aboutUs')->name('about.us.view');
   Route::get('/vision-mission', 'visionMission')->name('vision.mission.view');
   Route::get('/management', 'management')->name('management.view');
   Route::get('/product-services', 'productServices')->name('product.services.view');
   Route::get('/our-client', 'ourClient')->name('our.client.view');
   Route::get('/our-partner', 'ourPartner')->name('our.partner.view');
   Route::get('/contact-us', 'contactUs')->name('contact.us.view');
});
