<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/testlaravel/public/queryLog', 'AdminConroller@dashboard');


//language multi
/*Route::get('/{locale}', function ($locale) {
    App::setLocale($locale);
    return view('welcome');

    //
});
*/

//passig parameterin pranthesis
/*Route::get('testlaravel/public/admin/{number}', function ($number) {
    return "First number $number";
})->where(['number'=>"[0-9]+"]);// use regix thrugh where command
*/


/*-----------------------------------------*/
//NAME ROUTE
//if hit this url direct it will behave normal route
// this rout is for lowe route  
/*Route::get('/admin/{number}', function ($number) {
    //Route::get('/admin/{number}', function ($number) { //for line 52
    return "First number $number";
})->name('user-number'); //name rout
*/

/*First way*/
/*Route::get('/', function () {
    //call upper url through this "/"
	echo route('user-number',[123]);
    //echo route('user-number',['sortby'=>'name']);
});
*/
/*second way*/
/*Route::get('/', [
    //call upper url through this "/"
    'as' => 'base-ul',
	//'uses' => 'AdminConttroler@dashboard'
	function () {
		echo route('user-number',[123]);
	}
]);
*//*-----------------------------------------*/



/*-----------------------------------------*/
//it will not run because folder structure reuire some ps4
/*Route::get('admin/dashboard', 'AdminConroller@dashboard');
Route::group(['middleare' => 'web', 'namespace' => 'Admin', 'as' => 'adimn-'], 
// route k name ko prefix kr rahay hain yaha "as"k thorough, create ulr prefix through prefix
	function() {
    Route::get('dashboard', [
        'as' => 'dashboard',
        'uses' => 'AdminController@dashboard',
    ]);
echo route('admin-dasboard');*/
/*-----------------------------------------*/

//creating url prefix
/*Route::group(['prefix' => 'admin-panel'], 
	function() {
    Route::get('dashboard', [
        'as' => 'dashboard',
        'uses' => 'AdminController@dashboard',
    ]);
Route::get('/', function () {
	echo route('dashboard');
});
*/

//symbolic any and match
/*Route::any('/', function () {
    return view('welcome');
});
Route::match(['put','patch'],'admin', function () {
    return view('welcome');
});*/


//Route::controller('admin','AdminController')
/*in cotroller deifine thee functon wiet getDa
class AdminController extends Controller{
	public function getDasboard(){echo 'test';}
}
*/

// Route::get('testlaravel/public/test', function () {
//     $data = ['nom','khan']
//     return view('test-data', compact($data));
// });

Route::get('testlaravel/public/test', function () {
    $data = ['nom','khan'];
    //return view('test-data', compact('data'));
    //return view('test-data')->with('data', '$data');
    return view('test-data')->withData($data);
});


Route::get('testlaravel/public/test2', 'AdminConroller@getMaserBlade');

Route::get('testlaravel/public/crud/index', 'CrudBasicController@index');

Route::get('testlaravel/public/crud/create', 'CrudBasicController@create');

Route::get('testlaravel/public/crud/update/{id}', 'CrudBasicController@update');

Route::get('testlaravel/public/crud/delete/{id}', 'CrudBasicController@destroy');

