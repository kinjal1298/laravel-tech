
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('login');
});
//Route::post('blog/login',[UserController::class,'login']);
Route::post('login',[UserController::class,'login']);
Route::get('logout',function(){
		session()->forget('user');
		return redirect('/');
	});
Route::view('registration','register');
Route::post('registration_submit','UserController@register_submit');
Route::post('email_verification','UserController@email_verification');

Route::group(['middleware'=>['custAuth']],function(){
	Route::view('home','home');
	Route::view('dashboard','dashboard');
	Route::view('product/add','add_product');
	Route::post('product/add/submit','ProductController@add');
});