<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SeriesController;

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

Route::get('/', function () {
    $series = [
        'Grey\'s Anatomy',
        'Lost',
        'Agents of SHIELD'
    ];

    $html = "<ul>";
    foreach ($series as $serie){
        $html .="<li>$serie</li>";
    }
    $html .= "</ul>";

    return $html;
});
Route::get('/series'             , 'SeriesController@index');
Route::get('/series/criar'             , 'SeriesController@create');
Route::post('/series/criar'             , 'SeriesController@store');
