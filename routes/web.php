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

Route::get('admin/login', function () {
    return view('admin/login');
});

Route::get('/admin/Announcemen', function () {
    return view('admin/adminAnnouncement');
});

Route::get('/admin/editprofile', function () {
    return view('admin/adminEditProfile');
});

Route::get('/admin/home', function () {
    return view('admin/adminHome');
});

Route::get('/admin/userreports', function () {
    return view('admin/adminUserReports');
});

Route::get('/admin/ViewAllTransaction', function () {
    return view('admin/adminViewAllTransaction');
});

Route::get('/admin/ViewAllUserInfo', function () {
    return view('admin/adminViewAllUserInfo');
});



// seller

Route::get('/seller/login', function () {
    return view('seller/login');
});
Route::get('/seller/register', function () {
    return view('seller/sellerRegister');
});

// Route::get('/seller/applyforprimeseller', function () {
//     return view('seller/applyForPrimeSeller');
// });


Route::get('/seller/home','SellerController@home')->name('seller.home');
Route::get('/seller/applyforprimeseller','SellerController@applyForPrimeSeller')->name('seller.apply.prime');
Route::get('/seller/createsellpost','SellerController@createSellPost')->name('seller.create.sell.post');
Route::get('/seller/myposts','SellerController@myPosts')->name('seller.posts');
Route::get('/seller/statements','SellerController@statements')->name('seller.statements');
Route::get('/seller/orders','SellerController@orders')->name('seller.orders');
Route::get('/seller/contactsupport','SellerController@contactSupport')->name('seller.contact.support');
Route::get('/seller/orderdetails','SellerController@orderDetails')->name('seller.order.details');
Route::get('/seller/editsellpost','SellerController@editSellPost')->name('seller.edit.sell.post');
Route::get('/seller/editprofile','SellerController@editProfile')->name('seller.edit.profile');
Route::get('/seller/statementdetails','SellerController@statementDetails')->name('seller.statement.details');






// user or buyer
Route::get('/user/editprofile', function () {
    return view('user/editProfile');
});
Route::get('/user/orderhistory', function () {
    return view('user/userorderHistory');
});
Route::get('/user/register', function () {
    return view('user/userRegister');
});
