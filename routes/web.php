<?php

use App\Http\Controllers\VideoGameController;
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


Route::get('/', function () {
    return view('greeting', ['name' => 'James']);
});

Route::get('/', function () {
    return view('welcome', ['greeting' => 'Welcome! Laravel is so cool']);
});
/*
Route::get('/some-other-url', function () {
    return view('somewhere-else');
});

*/

Route::get('/config', function() {
    return phpinfo();
});


