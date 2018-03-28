<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Route::group(['middleware' => 'web'], function () {
// 	Route::get('hikoya','HikoyaController@index');
// 	Route::get('hikoya/{id}','HikoyaController@getHikoya');
// 	Route::post('hikoya','HikoyaController@createHikoya');
// 	Route::put('hikoya/{id}','HikoyaController@updateHikoya');
// 	Route::delete('hikoya/{id}','HikoyaController@deleteHikoya');
// });

$router->group(['prefix' => 'api'], function () use ($router) {
  $router->get('hikoya',  ['uses' => 'HikoyaController@index']);
  $router->get('hikoya/{id}', ['uses' => 'HikoyaController@getHikoya']);
  $router->post('hikoya', ['uses' => 'HikoyaController@createHikoya']);
  $router->put('hikoya/{id}', ['uses' => 'HikoyaController@updateHikoya']);
  $router->delete('hikoya/{id}', ['uses' => 'HikoyaController@deleteHikoya']);
});


// Route::group(['middleware' => 'web'], function () {
//     Route::auth();

//     Route::get('/home', 'HomeController@index');
//     Route::get('/articles', 'ArticlesController@index');
//     Route::get('/articles/{id}', 'ArticlesController@show');

// //namespace Admin
//     Route::group(['prefix' => 'admin'],['namespace' => 'Admin'], function () {
//         Route::get('dashboard', 'DashboardController@index');
//         Route::resource('articles', 'ArticlesController');
//     });
// });