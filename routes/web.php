<?php

use Illuminate\Support\Facades\Route;

Route::get('/signin', function () {
    return view('signin');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/reset-password', function () {
    return view('R-password');
});
Route::get('/enter-new-password', function () {
    return view('enter-new-password');
});
Route::get('/', function () {
    return view('Homepage');
});
Route::get('/search', function () {
    return view('Search');
});
Route::get('/shippinghelp', function () {
    return view('ShippingHelp');
});
Route::get('/shippingpolicy', function () {
    return view('ShippingPolicy');
});
Route::get('/TermsOfService', function () {
    return view('Terms');
});
Route::get('/PrivacyPolicy', function () {
    return view('Privecy');
});

Route::get('/Categories', function () {
    return view('CategoryOverview');
});
Route::get('/Category', function () {
    return view('CategoryPages');
});
Route::get('/Address', function () {
    return view('Addresses');
});
Route::get('/Cart', function () {
    return view('CartPage');
});
Route::get('/payments', function () {
    return view('Payment');
});
Route::get('/orderview', function () {
    return view('OrderView');
});
Route::get('/Cart', function () {
    return view('CartPage');
});
Route::get('/e-order', function () {
    return view('EmailOrder');
});
Route::get('/orderhistory', function () {
    return view('OrdersHistory');
});
Route::get('/checkout', function () {
    return view('CheckoutPage');
});

Route::get('/ProductPage', function () {
    return view('ProductPages');
});
Route::get('/profile', function () {
    return view('Profile');
});
Route::get('/settings', function () {
    return view('settings');
});
Route::get('/contact', function () {
    return view('ContactUs');
});
Route::get('/Dashboard', function () {
    return view('dashboard');
});
Route::get('/Products', function () {
    return view('products');
});
Route::get('/AboutUs', function () {
    return view('StoreDetails');
});
Route::get('/FAQ', function () {
    return view('FAQPage');
});
Route::get('/WishList', function () {
    return view('WishListPage');
});
Route::get('/AnalyticsReports', function () {
    return view('AnalyticsReports');
});
Route::get('/a-orders', function () {
    return view('a-Orders');
});
Route::get('/a-Order', function () {
    return view('a-Order');
});
Route::get('/a-Product', function () {
    return view('a-Product');
});
