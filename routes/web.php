<?php

/*
|--------------------------------------------------------------------------
|CmS Routes
|--------------------------------------------------------------------------
|
*/
/*******  Sliders Home Page Starting */

        Route::get('/sliders','SliderHomeController@index')->name('sliderCms');
        Route::get('/slider-create','SliderHomeController@create')->name('sliderCreate');
        Route::post('/slider-store','SliderHomeController@store')->name('sliderStore');
        Route::get('/slider-edit-{id}','SliderHomeController@edit')->name('sliderEdit');

        Route::post('/slider-update-{id}','SliderHomeController@update')->name('sliderUpdate');
        Route::delete('/slider-delete-{id}','SliderHomeController@delete')->name('sliderDelete');
/*******  Sliders Home Page Ending */


/*******  About Page Starting */
        Route::get('/about','AboutController@index')->name('aboutCms');
        Route::post('/about-store','AboutController@store')->name('aboutStore');
/*******  About Page Ending */

/*******  Mission Page Starting */
Route::get('/mission','MissionController@index')->name('missionCms');
Route::post('/mission-store','MissionController@store')->name('missionStore');
/*******  Mission Page Ending */

/*******  Visiion Page Starting */
Route::get('/vision','VisionController@index')->name('visionCms');
Route::post('/vision-store','VisionController@store')->name('visionStore');
/*******  Visiion Page Ending */





/*******  Services Page Starting */
    Route::get('/services','ServiceController@index')->name('serviceCms');
    Route::post('/services-store','ServiceController@store')->name('serviceStore');
/*******  Services Page Ending */

/*******  Projects Page Starting */
    Route::get('/projects','ProjectController@index')->name('projectCms');
    Route::get('/project-create','ProjectController@create')->name('projectCreate');
    Route::post('/project-store','ProjectController@store')->name('projectStore');
    Route::get('/project-edit-{id}','ProjectController@edit')->name('projectEdit');

    Route::post('/project-update-{id}','ProjectController@update')->name('projectUpdate');
    Route::delete('/project-delete-{id}','ProjectController@delete')->name('projectDelete');
/*******  Projects Page Ending */






/*******  Products Page Starting */
    Route::get('/products','ProductController@index')->name('productCms');
    Route::get('/product-create','ProductController@create')->name('productCreate');
    Route::post('/product-store','ProductController@store')->name('productStore');
    Route::get('/product-edit-{id}','ProductController@edit')->name('productEdit');

    Route::post('/product-update-{id}','ProductController@update')->name('productUpdate');
    Route::delete('/product-delete-{id}','ProductController@delete')->name('productDelete');
/*******  Products Page Ending */



/*******  Client Page Starting */
    Route::get('/clients','ClientController@index')->name('clientCms');
    Route::get('/client-create','ClientController@create')->name('clientCreate');
    Route::post('/client-store','ClientController@store')->name('clientStore');
    Route::get('/client-edit-{id}','ClientController@edit')->name('clientEdit');
    Route::post('/client-update-{id}','ClientController@update')->name('clientUpdate');
    Route::delete('/client-delete-{id}','ClientController@delete')->name('clientDelete');
/*******  Client Page Ending */




/*******  contact Page Starting */
Route::get('/contact-cms','ContactCmsController@index')->name('contactCms');
Route::post('/contact-cms-store','ContactCmsController@store')->name('contactStore');
/*******  contact Page Ending */

/*******  settings Page Starting */
Route::get('/settings','SettingsController@index')->name('settingsCms');
Route::post('/settings-store','SettingsController@store')->name('settingsStore');
/*******  settings Page Ending */
/*******  seo Page Starting */
Route::get('/seo','SeoPageController@index')->name('seoCms');
Route::post('/seo-store','SeoPageController@store')->name('seoStore');
/*******  seo Page Ending */

/*******  titles Page Starting */
Route::get('/titles-sections','TitlePageController@index')->name('titleCms');
Route::post('/titles-sections-store','TitlePageController@store')->name('titleStore');
/*******  titles Page Ending */



Auth::routes();

Route::get('/home', 'SeoPageController@index')->name('home');
Route::get('/', function () {
    return view('home');
});


Route::get('/','PageController@home');
Route::post('/contact', [ContactController::class, 'getContactForm'])->name('contact_path');
Route::post('/interest', [ContactController::class, 'getInterestForm'])->name('interest_path');