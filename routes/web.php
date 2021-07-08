<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Route
|--------------------------------------------------------------------------
*/
Route::get('/','FrontendController@index');
Route::get('/offer','FrontendController@offer');
Route::get('/e-commerce/solution','EcommerceSolutionController@index');
Route::get('/international/e-commerce/{id}','EcommerceSolutionController@international_ecommerce');
Route::get('/about','AboutController@about');
Route::get('/contact-Us','ContactController@index');
Route::post('/message_post','ContactController@message_post');
Route::get('/board-of-director','BoardofDirectorController@index');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['auth','admin']],function() {
    Route::get('/users','AdminController@users');
    Route::get('/countrys','AdminController@countrys');
    Route::put('/bannedit','AdminController@userChangeStatus');
    Route::put('/countrycreate','AdminController@countrystore');
    Route::get('/viewcountries','AdminController@viewcountries');
    Route::get('/approve_country/{id}','AdminController@approve_country');
    Route::get('/approve_user/{id}','AdminController@approve_user');
    // Price Set
    Route::get('/createprice','PriceSetController@createprice');
    Route::get('/viewprice','PriceSetController@viewprice');
    Route::put('/pricecreate','PriceSetController@pricestore');
    Route::put('/priceupdate','PriceSetController@priceupdate');
    Route::delete('/deleteprice/{id}','PriceSetController@pricedelete');

    //Ecommerce section
    Route::resource('bdecommerce','BdecommerceController');
    Route::post('bdecommerce/delete/{id}','BdecommerceController@delete')->name('bdecommerce.delete');
    Route::get('/bd_ecommerce/ChangeStatus/{id}','BdecommerceController@ChangeStatus');

    //Country Create
    Route::resource('country_create','CountryCreateController');
    Route::post('country/delete/{id}','CountryCreateController@delete')->name('country.delete');
    Route::get('/country_create/ChangeStatus/{id}','CountryCreateController@ChangeStatus');

    //International Company
    Route::resource('assign_country','AssignCountryController');
    Route::post('assign_country/delete/{id}','AssignCountryController@delete')->name('assign_country.delete');
    Route::get('/international_ecommerce/ChangeStatus/{id}','AssignCountryController@ChangeStatus');
    // Message View
    Route::get('/message-view','ContactController@message_view');
    Route::get('/delete_message/{id}','ContactController@delete_message');

});

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth','isUser']],function() {

});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/profileoverview', 'HomeController@profileoverview')->name('profileoverview');
Route::put('/editinfo/{id}', 'HomeController@editinfo')->name('editinfo');
Route::get('/changepassword', 'HomeController@changepassword')->name('changepassword');
Route::put('/updatepassword', 'HomeController@updatepassword')->name('updatepassword');
Route::post('/update_profile','HomeController@update_profile');


//Mohsin sikder
//Service COntroller
Route::get('/service','ServicesController@index')->name('services.index');
Route::post('/service/store','ServicesController@store')->name('services.store');
Route::post('/service/update/{id}', 'ServicesController@update')->name('services.update');
Route::get('/service/update-status/{id}/{status}','ServicesController@updateStatus')->name('service.update.status');
Route::post('/service/delete/{id}','ServicesController@delete')->name('services.delete');

//Slider COntroller

Route::get('/slider','SliderController@index')->name('sliders.index');
Route::post('/slider/store','SliderController@store')->name('sliders.store');
Route::post('/slider/update/{id}', 'SliderController@update')->name('sliders.update');
Route::get('/slider/update-status/{id}/{status}','SliderController@updateStatus')->name('sliderupdate.status');
Route::post('/slider/delete/{id}','SliderController@delete')->name('sliders.delete');
//Logo COntroller

Route::get('/logo','LogoController@index')->name('logoes.index');
Route::post('/logo/store','LogoController@store')->name('logoes.store');
Route::post('/logo/update/{id}', 'LogoController@update')->name('logoes.update');
Route::get('/logo/update-status/{id}/{status}','LogoController@updateStatus')->name('logoupdate.status');
Route::post('/logo/delete/{id}','LogoController@delete')->name('logoes.delete');
//Header COntroller

Route::get('/header','HeaderController@index')->name('headers.index');
Route::post('/header/store','HeaderController@store')->name('headers.store');
Route::post('/header/update/{id}', 'HeaderController@update')->name('headers.update');
Route::get('/header/update-status/{id}/{status}','HeaderController@updateStatus')->name('headerupdate.status');
Route::post('/header/delete/{id}','HeaderController@delete')->name('headers.delete');
//Body COntroller

Route::get('/body','BodyController@index')->name('bodies.index');
Route::post('/body/store','BodyController@store')->name('bodies.store');
Route::post('/body/update/{id}', 'BodyController@update')->name('bodies.update');
Route::get('/body/update-status/{id}/{status}','BodyController@updateStatus')->name('bodyupdate.status');
Route::post('/body/delete/{id}','BodyController@delete')->name('bodies.delete');
//patner COntroller

Route::get('/patner','PatnerController@index')->name('patners.index');
Route::post('/patner/store','PatnerController@store')->name('patners.store');
Route::post('/patner/update/{id}', 'PatnerController@update')->name('patners.update');
Route::get('/patner/update-status/{id}/{status}','PatnerController@updateStatus')->name('patnerupdate.status');
Route::post('/patner/delete/{id}','PatnerController@delete')->name('patners.delete');//Body COntroller
//footer COntroller
Route::get('/footer','FooterController@index')->name('footers.index');
Route::post('/footer/store','FooterController@store')->name('footers.store');
Route::post('/footer/update/{id}', 'FooterController@update')->name('footers.update');
Route::get('/footer/update-status/{id}/{status}','FooterController@updateStatus')->name('footerupdate.status');
Route::post('/footer/delete/{id}','FooterController@delete')->name('footers.delete');
//link COntroller
Route::get('/link','LinkController@index')->name('links.index');
Route::post('/link/store','LinkController@store')->name('links.store');
Route::post('/link/update/{id}', 'LinkController@update')->name('links.update');
Route::get('/link/update-status/{id}/{status}','LinkController@updateStatus')->name('linkupdate.status');
Route::post('/link/delete/{id}','LinkController@delete')->name('links.delete');
//link COntroller
Route::get('/quick_rate','QuickRateController@index')->name('quick_rates.index');
Route::post('/quick_rate/store','QuickRateController@store')->name('quick_rates.store');
Route::post('/quick_rate/update/{id}', 'QuickRateController@update')->name('quick_rates.update');
Route::get('/quick_rate/update-status/{id}/{status}','QuickRateController@updateStatus')->name('quick_rateupdate.status');
Route::post('/quick_rate/delete/{id}','QuickRateController@delete')->name('quick_rates.delete');

/*
|--------------------------------------------------------------------------
| Atikur Rahman
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Country
|--------------------------------------------------------------------------
*/
Route::get('/delete_country/{id}','AdminController@delete_country');
Route::post('/update_country','AdminController@update_country');
/*
|--------------------------------------------------------------------------
| User
|--------------------------------------------------------------------------
*/
Route::get('/delete_user/{id}','UserController@delete_user');
Route::post('/update_user','UserController@update_user');
/*
|--------------------------------------------------------------------------
| Profile Password Change
|--------------------------------------------------------------------------
*/
Route::get('/edit_profile','HomeController@edit_profile');
Route::post('/edit_profile_post','HomeController@edit_profile_post');
/*
|--------------------------------------------------------------------------
| Quick Rate
|--------------------------------------------------------------------------
*/
// Route::get('/quick_rate','QuickRateFormController@quick_rate');
Route::get('/quickrates', 'QuickRateFormController@quickrates')->name('quickrates');
/*
|--------------------------------------------------------------------------
| Become a Traveller
|--------------------------------------------------------------------------
*/
Route::get('/createtraveller','BecomeTravellerController@createtraveller');
Route::put('/travelercreate','BecomeTravellerController@travelerstore');
Route::get('/viewtraveller','BecomeTravellerController@viewtraveller');
Route::get('/traveleredit/{id}','BecomeTravellerController@traveleredit');
Route::put('/travelerupdate/{traveler}','BecomeTravellerController@travelersave');
Route::delete('/deletetraveler/{id}','BecomeTravellerController@travelerdelete');
Route::post('/show_price_value','PriceSetController@show_price_value');
/*
|--------------------------------------------------------------------------
| Online Booking
|--------------------------------------------------------------------------
*/
Route::get('/online_booking','OnlineBookingController@online_booking');
Route::post('/online_booking_post','OnlineBookingController@online_booking_post');
Route::get('searchajax', ['as'=>'searchajax','uses'=>'OnlineBookingController@searchResponse']);
Route::get('/view-booking-order','OnlineBookingController@view_booking_order');
Route::get('/view-order/{id}','OnlineBookingController@view_order');
Route::post('/update-order','OnlineBookingController@update_order');

/*
|--------------------------------------------------------------------------
| Show Price
|--------------------------------------------------------------------------
*/
Route::post('/show_value','FrontendController@show_value');
/*
|--------------------------------------------------------------------------
| Track
|--------------------------------------------------------------------------
*/
Route::post('/track_add','TrackController@track_add');
Route::get('/view-track-list','TrackController@view_track_list');
Route::get('/delete_track/{id}','TrackController@delete_track');
Route::post('/update_track','TrackController@update_track');
Route::post('/parcel_search','TrackController@parcel_search');
/*
|--------------------------------------------------------------------------
| Order
|--------------------------------------------------------------------------
*/
Route::get('/pending-order','OrderController@pending_order');
Route::get('/processing-order','OrderController@procesing_order');
Route::get('/ongoing-order','OrderController@ongoing_order');
Route::get('/completed-order','OrderController@completed_order');
Route::get('/cancel-order','OrderController@cancel_order');
/*
|--------------------------------------------------------------------------
| Vendor
|--------------------------------------------------------------------------
*/
Route::get('/vendor','VendorController@vendor');
Route::post('/add_vendor','VendorController@add_vendor');
// export file
Route::get('export', 'OrderExportController@export')->name('export');
Route::post('/download_report','ReportDownloadController@download_report');
Route::get('/user_order_report/{id}','ReportDownloadController@user_order_report');

//  Booking List
Route::get('/user-booking-list','UserController@user_booking_list');
/*
|--------------------------------------------------------------------------
| Vendor Create Customer
|--------------------------------------------------------------------------
*/
Route::get('/create-customer','VendorCreateCustomerController@create_customer');
Route::post('/vendor_post_customer','VendorCreateCustomerController@vendor_post_customer');
Route::get('/vendor-customer-list','VendorCreateCustomerController@vendor_customer_list');
/*
|--------------------------------------------------------------------------
| Vendor Order
|--------------------------------------------------------------------------
*/
Route::get('/vendor-all-order','VendorOrderController@vendor_all_order');
Route::get('/vendor-pending-order','VendorOrderController@vendor_pending_order');
Route::get('/vendor-processing-order','VendorOrderController@vendor_processing_order');
Route::get('/vendor-ongoing-order','VendorOrderController@vendor_ongoing_order');
Route::get('/vendor-confirm-order','VendorOrderController@vendor_confirm_order');
Route::get('/vendor-cancel-order','VendorOrderController@vendor_cancel_order');
Route::get('/vendor-view-order/{id}','VendorOrderController@vendor_view_order');
Route::get('/vendor-track-list','VendorOrderController@vendor_track_list');


//==== Offer Page ===//
Route::get('/create-offer-page','OfferPageController@create_offer_page');
Route::post('/offer_store','OfferPageController@offer_store');

/// === Invoice ===///
Route::get('/invoice/{id}','InvoiceController@create');
Route::post('/invoice_post','InvoiceController@post');


// SSLCOMMERZ Start
// Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example1','SslCommerzPaymentController@exampleEasyCheckout');
// Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);
Route::get('/example2','SslCommerzPaymentController@exampleHostedCheckout');
// Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay','SslCommerzPaymentController@index');
// Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);
Route::post('/pay-via-ajax','SslCommerzPaymentController@payViaAjax');
// Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/success','SslCommerzPaymentController@success');
// Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/fail','SslCommerzPaymentController@fail');
// Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);
Route::post('/cancel','SslCommerzPaymentController@cancel');
// Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
Route::post('/ipn','SslCommerzPaymentController@ipn');
//SSLCOMMERZ END
