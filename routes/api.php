<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
* Snippet for a quick route reference
*/
Route::get('/', function (Router $router) {
    return collect($router->getRoutes()->getRoutesByMethod()["GET"])->map(function($value, $key) {
        return url($key);
    })->values();   
});

Route::resource('epics', 'EpicAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('growls', 'GrowlAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('ands', 'AndAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('powers', 'PowerAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('withs', 'WithAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('steels', 'SteelAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('muscles', 'MusclesAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('groupeds', 'GroupedAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('those', 'ThatAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('are', 'IsAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('nots', 'NotAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('okays', 'OkayAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('cars', 'CarAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('garages', 'GarageAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('users', 'UserAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);