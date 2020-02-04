<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('locale/{locale}',function ($locale){
	App::setLocale($locale);
	
	session()->put('locale', $locale);
	
    return redirect()->back();
		   });
//////////////////////////////
Route::resource('/services', 'ServiceController');

Route::resource('/program','ProgramController');

Route::resource('/jobs','JobsController');

Route::resource('/offers','OffersController');

Route::get('/about','HomeController@about');

Route::get('/progDetails/{id}','ProgramController@progDetails')->name('progDetails');

//Route::get('/progDetails/{id}','ServiceController@progDetails')->name('progDetails');
////////////////contact//////////////////
Route::match(['GET','POST'],'/contact','ContactsController@contact');
////////////////dashboard///////////////////
Route::match(['get','post'],'/admin','admin\Admins\AdminController@login');

Route::match(['get','post'],'/admin/updatepwd','admin\Admins\AdminController@updatePassword');

Route::get('/admin/dashboard','admin\Admins\AdminController@dashboard');
Route::get('/logout','admin\Admins\AdminController@logout');

Route::get('/admin/settings','admin\Admins\AdminController@settings');

Route::get('/admin/check-pwd','admin\Admins\AdminController@chkPassword');


////////////////programs////////////////

Route::get('admin/programs/index','admin\Programs\ProgramController@index');

Route::get('admin/programs/fetch','admin\Programs\ProgramController@fetch');

Route::post('admin/programs/destroy','admin\Programs\ProgramController@destroy');

Route::get('admin/programs/show/{id}', 'admin\Programs\ProgramController@show');

Route::post('admin/programs/store','admin\Programs\ProgramController@store');
 
Route::post('admin/programs/update/{id}','admin\Programs\ProgramController@update');

////////////////services//////////////////

Route::get('admin/services/index','admin\Services\ServiceController@index');

Route::get('admin/services/fetch','admin\Services\ServiceController@fetch');

Route::post('admin/services/destroy','admin\Services\ServiceController@destroy');

Route::get('admin/services/show/{id}', 'admin\Services\ServiceController@show');

Route::post('admin/services/store','admin\Services\ServiceController@store');
 
Route::post('admin/services/update/{id}','admin\Services\ServiceController@update');

///////////////////complanes//////////////////

Route::get('admin/complanes/index','admin\Complanes\ComplaneController@index');

Route::get('admin/complanes/fetch','admin\Complanes\ComplaneController@fetch');

Route::post('admin/complanes/destroy','admin\Complanes\ComplaneController@destroy');

Route::get('admin/complanes/show/{id}', 'admin\Complanes\ComplaneController@show');

Route::post('admin/complanes/store','admin\Complanes\ComplaneController@store');
 
Route::post('admin/complanes/update/{id}','admin\Complanes\ComplaneController@update');

/////////////offers//////////////

Route::get('admin/offers/index','admin\Offers\OfferController@index');

Route::get('admin/offers/fetch','admin\Offers\OfferController@fetch');

Route::post('admin/offers/destroy','admin\Offers\OfferController@destroy');

Route::get('admin/offers/show/{id}', 'admin\Offers\OfferController@show');

Route::post('admin/offers/store','admin\Offers\OfferController@store');
 
Route::post('admin/offers/update/{id}','admin\Offers\OfferController@update');
//////////////////jobs/////////////////
Route::get('admin/jobs/index','admin\Jobs\JobController@index');

Route::get('admin/jobs/fetch','admin\Jobs\JobController@fetch');

Route::post('admin/jobs/destroy','admin\Jobs\JobController@destroy');

Route::get('admin/jobs/show/{id}', 'admin\Jobs\JobController@show');

Route::post('admin/jobs/store','admin\Jobs\JobController@store');
 
Route::post('admin/jobs/update/{id}','admin\Jobs\JobController@update');
///////////////////phone///////////////

Route::get('admin/phones/index','admin\Phones\PhoneController@index');

Route::get('admin/phones/fetch','admin\Phones\PhoneController@fetch');

Route::post('admin/phones/destroy','admin\Phones\PhoneController@destroy');

Route::get('admin/phones/show/{id}', 'admin\Phones\PhoneController@show');

Route::post('admin/phones/store','admin\Phones\PhoneController@store');
 
Route::post('admin/phones/update/{id}','admin\Phones\PhoneController@update');
////////////////activites//////////////////////////

Route::get('admin/activites/index','admin\Activites\ActivityController@index');

Route::get('admin/activites/fetch','admin\Activites\ActivityController@fetch');

Route::post('admin/activites/destroy','admin\Activites\ActivityController@destroy');

Route::get('admin/activites/show/{id}', 'admin\Activites\ActivityController@show');

Route::post('admin/activites/store','admin\Activites\ActivityController@store');
 ////////////////experiencs///////////////////////////////

Route::get('admin/experiences/index','admin\Experiences\ExperienceController@index');

Route::get('admin/experiences/fetch','admin\Experiences\ExperienceController@fetch');

Route::post('admin/experiences/destroy','admin\Experiences\ExperienceController@destroy');

Route::get('admin/experiences/show/{id}', 'admin\Experiences\ExperienceController@show');

Route::post('admin/experiences/store','admin\Experiences\ExperienceController@store');
Route::post('admin/experiences/update/{id}','admin\Experiences\ExperienceController@update');
/////////////////////////////contacts/////////////////

Route::get('admin/contacts/index','admin\Contacts\ContactController@index');

Route::get('admin/contacts/fetch','admin\Contacts\ContactController@fetch');

Route::get('admin/contactsRead/index','admin\Contacts\ContactController@indexRead');

Route::get('admin/contactsRead/fetch','admin\Contacts\ContactController@fetchRead');

Route::post('admin/contacts/destroy','admin\Contacts\ContactController@destroy');

Route::get('admin/contacts/show/{id}', 'admin\Contacts\ContactController@show');

Route::post('admin/contacts/store','admin\Contacts\ContactController@store');
 
Route::post('admin/contacts/update/{id}','admin\Contacts\ContactController@update');
////////////////////////////websites/////////////////
Route::get('admin/websites/index','admin\Websites\WebsiteController@index');

Route::get('admin/websites/fetch','admin\Websites\WebsiteController@fetch');

Route::get('admin/websites/show/{id}', 'admin\Websites\WebsiteController@show');

Route::post('admin/websites/update/{id}','admin\Websites\WebsiteController@update');
/////////////////////////////////////////