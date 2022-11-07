<?php

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


Route::view('/', 'pages.index2')->name('index');
Route::view('attorneys', 'pages.attorneys')->name('attorneys');
Route::view('services', 'pages.services')->name('services');
Route::view('services/business', 'pages.business')->name('business');
Route::view('services/trust-estate-law', 'pages.trust-estate-law')->name('trust-estate-law');
Route::view('contact', 'pages.contact')->name('contact');

Route::view('corporate-commercial', 'pages.corporate-commercial')->name('corporate_commercial');
Route::view('intellectual-property', 'pages.intellectual-property')->name('intellectual_property');

