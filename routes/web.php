<?php

// Route::get('/' , 'TaxiController@home_index');

Route::get('/' , 'HomeController@index');


Route::get('/about' , 'OfferController@about_index');

Route::resource('posts','PostController');

Route::resource('taxi','TaxiController');

Route::get('/drivers', function () {
    return view('drivers');
});


Route::get('/car', function () {
    return view('car');
});

Route::get('/Privacy-Policy', function () {
    return view('Privacy-Policy');
});

// Route::get('/contact', function () {
//     return view('contact');
// });

// Render in view
Route::get('/contact', [
    'uses' => 'ContactUsFormController@createForm'
]);

// Post form data
Route::post('/contact', [
    'uses' => 'ContactUsFormController@ContactUsForm',
    'as' => 'contact.store'
]);

// Route::get('/index', function () {
//     return view('index');
// });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
