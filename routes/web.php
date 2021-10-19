<?php

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
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| English
|--------------------------------------------------------------------------
|
*/
Route::get('English', function(){
    Session::put('lang','English');
    return Redirect('/'); 
});
/*
|--------------------------------------------------------------------------
| Arabic
|--------------------------------------------------------------------------
|
*/
Route::get('arabic', function(){
    Session::put('lang','arabic');
    return Redirect('/'); 
});
/*
|--------------------------------------------------------------------------
| German
|--------------------------------------------------------------------------
|
*/
Route::get('German', function(){
    Session::put('lang','German');
    return Redirect('/'); 
});

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
*/
Auth::routes();
/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
|
*/
// HomeController index
Route::get('/', 'HomeController@index')->name('index');
// HomeController HumanResources
Route::get('HumanResources', 'HomeController@HumanResources')->name('HumanResources');
// HomeController HospitalActivities
Route::get('HospitalActivities', 'HomeController@HospitalActivities')->name('HospitalActivities');
// HomeController About
Route::get('About', 'HomeController@About')->name('About');
// HomeController Termscondition
Route::get('Termscondition', 'HomeController@Termscondition')->name('Termscondition');
// searchController Newssearch
Route::get('Newssearch', 'searchController@Newssearch')->name('Newssearch');
// searchController search
Route::get('search', 'searchController@search')->name('search');

/*
|--------------------------------------------------------------------------
| Bookroomscontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('Bookrooms','Bookroomscontroller');
/*
|--------------------------------------------------------------------------
| OperationsController
|--------------------------------------------------------------------------
|
*/
Route::resource('Operations','OperationsController');
/*
|--------------------------------------------------------------------------
| MedicinebooksController
|--------------------------------------------------------------------------
|
*/
Route::resource('Medicinebooks','MedicinebooksController');
/*
|--------------------------------------------------------------------------
| MedicinesController
|--------------------------------------------------------------------------
|
*/
Route::resource('Medicines','MedicinesController');
/*
|--------------------------------------------------------------------------
| BirthsController
|--------------------------------------------------------------------------
|
*/
Route::resource('Births','BirthsController');
/*
|--------------------------------------------------------------------------
| ContactusController
|--------------------------------------------------------------------------
|
*/
Route::resource('Contactus','ContactusController');
/*
|--------------------------------------------------------------------------
| BookBloodcontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('BookBloods','BookBloodcontroller');
/*
|--------------------------------------------------------------------------
| Reviewcontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('Reviews','Reviewcontroller');
/*
|--------------------------------------------------------------------------
| Wishlistcontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('Wishlists','WishlistController');
/*
|--------------------------------------------------------------------------
| Messagescontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('Messages','Messagescontroller');
/*
|--------------------------------------------------------------------------
| Commentcontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('Comments','Commentcontroller');
/*
|--------------------------------------------------------------------------
| Categorycontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('Categores','Categorycontroller');

/*
|--------------------------------------------------------------------------
| Usercontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('Patients','Usercontroller');
/*
|--------------------------------------------------------------------------
| Newscontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('News','Newscontroller');
/*
|--------------------------------------------------------------------------
| Doctorscontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('Doctors','Doctorscontroller');
/*
|--------------------------------------------------------------------------
| Bedcontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('Beds','Bedscontroller');
/*
|--------------------------------------------------------------------------
| Bloodscontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('Bloods','Bloodscontroller');
/*
|--------------------------------------------------------------------------
| Departmentscontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('Departments','Departmentscontroller');
/*
|--------------------------------------------------------------------------
| Resumecontroller
|--------------------------------------------------------------------------
|
*/
Route::resource('Resume','Resumecontroller');
/*
|--------------------------------------------------------------------------
| AppointmentController
|--------------------------------------------------------------------------
|
*/
Route::resource('Appointment','AppointmentController');
/*
|--------------------------------------------------------------------------
| AmbulanceController
|--------------------------------------------------------------------------
|
*/

Route::post('/pay', 'FlutterWaveController@initialize')->name('pay');
// The callback url after a payment
Route::get('/rave/callback', 'FlutterWaveController@callback')->name('callback');

//=========================================================================
Route::get('advice/hub/details/{title}', 'AdviceController@hub_details')->name('hub_details');

Route::get('admin/order', 'OrderController@index')->name('admin.order');

//=========================================================================
Route::get('admin/blog', 'BlogController@index')->name('admin_blog');
Route::get('admin/blog/create', 'BlogController@create')->name('blog.create');
Route::post('admin/blog/create/blog', 'BlogController@blog_create')->name('blog_create');
Route::get('admin/blog/edit/{id}', 'BlogController@edit')->name('blog.edit');
Route::post('admin/blog/edit/blog/{blog}', 'BlogController@blog_edit')->name('blog_edit');
Route::delete('admin/blog/delete/{id}', 'BlogController@blog_delete')->name('blog_delete');

 

//==========================================================================
Route::get('admin/faq', 'FaqController@index')->name('admin_faq');
Route::get('admin/faq/create', 'FaqController@create')->name('faq.create');
Route::post('faq/create', 'FaqController@faq_create')->name('faq_create');
Route::get('admin/faq/edit/{id}', 'FaqController@edit')->name('faq.edit');
Route::post('admin/faq/edit/{faq}', 'FaqController@faq_edit')->name('faq_edit');
Route::delete('admin/faq/delete/{id}', 'FaqController@faq_delete')->name('faq_delete');
//==========================================================================
Route::get('service/admin', 'ServiceController@admin_index')->name('admin_service');
Route::get('service/create', 'ServiceController@create')->name('create');
Route::post('service/store/create', 'ServiceController@service_create')->name('service_create');
Route::get('service/store/edit/{id}', 'ServiceController@edit')->name('edit');
Route::post('service/edit/{service}', 'ServiceController@service_edit')->name('service_edit');
Route::delete('service/delete/{id}', 'ServiceController@service_delete')->name('service_delete');
Route::get('admin/service/{title}', 'ServiceController@service_details')->name('service_details');
Route::resource('Service', 'ServiceController');
Route::resource('Ambulance','AmbulanceController');
Route::get('website/Service', 'ServiceController@service_index')->name('website_service');

//===========================================================================
Route::get('admin/testimonial', 'TestimonialController@index')->name('admin_testimony');
Route::get('testimony/create', 'TestimonialController@create')->name('testimony.create');
Route::post('testimony/admin/create', 'TestimonialController@testimony_create')->name('testimony_create');
Route::get('testimony/edit/{id}', 'TestimonialController@edit')->name('testimony.edit');
Route::post('testimony/edit/{testimony}', 'TestimonialController@testimony_edit')->name('testimony_edit');
Route::delete('testimony/delete/{id}', 'TestimonialController@testimony_delete')->name('testimony_delete');

//==========================================================================
Route::get('admin/partner', 'PartnerController@index')->name('admin_partner');
Route::get('admin/partner/create', 'PartnerController@create')->name('partner.create');
Route::post('partner/create', 'PartnerController@partner_create')->name('partner_create');
Route::get('partner/edit/{id}', 'PartnerController@edit')->name('partner.edit');
Route::post('partner/admin/edit/{partner}', 'PartnerController@partner_edit')->name('partner_edit');
Route::delete('partner/delete/{id}', 'PartnerController@partner_delete')->name('partner_delete');


//=============================================================================
Route::get('/faq', 'FaqController@website_faq')->name('faq');
Route::get('/mission', 'FaqController@website_mission')->name('mission');

//=============================================================================
Route::get('advice/hub', 'AdviceController@advice_hub')->name('advice.hub');
Route::get('/admin/advice', 'AdviceController@index')->name('admin_advice');
Route::get('/admin/advice/create', 'AdviceController@create')->name('advice.create');
Route::post('admin/advice/advice/create', 'AdviceController@advice_create')->name('advice_create');
Route::get('admin/advice/edit/{id}', 'AdviceController@edit')->name('advice.edit');
Route::post('admin/advice/edit/advice/{advice}', 'AdviceController@advice_edit')->name('advice_edit');
Route::delete('/admin/delete/{id}', 'AdviceController@advice_delete')->name('advice_delete');

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
/*
|--------------------------------------------------------------------------
| missing RETURN 404 PAGE Route
|--------------------------------------------------------------------------
|
*/

Route::get('missing', function () {
    return view('404');
});
