<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\request;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('register', function () {
    return view('register');
});
Route::get('index', function () {
    return view('index');
});
Route::get('buttons', function () {
    return view('buttons');
});
Route::get('logs', function () {
    return view('auth/login2');
});

Auth::routes();

// getting routes
Route::get('admin', 'AdminController@index');                                           // admin main page
Route::get('admin/lists/teacher','UserController@getteacher');                          // teacher list
Route::get('admin/lists/student','UserController@getstudent');                          // student list
Route::get('admin/lists/classes/{classid}','UserController@getclass');                  // student list of the class 
Route::get('admin/lists/subjects','AdminController@getsubjectlist');                    // subject list page
Route::get('admin/lists/subjects/{subjectid}','AdminController@getsubject');            // class list of the subject
Route::get('admin/lists/subjects/{subjectid}/{classid}','AdminController@getscore');    // scoore list based on the subject and class
Route::get('admin/addid','AdminController@addid');                                      // goes to add ID form
Route::get('admin/lists/subjects/addscore/{subjectid}/{classid}','AdminController@getaddscoreform');        // getting add score form
Route::get('admin/edit/score/{scoreid}/{classid}','AdminController@geteditscoreform');  // getting edit score form

// saving routes
Route::post('admin/saving','AdminController@saving');                                   // saves record of add ID form
Route::post('admin/savescore','AdminController@savescore');                             // saves score record

// deleting routes
Route::get('admin/delete/user/{id}', 'AdminController@deleteuser');                     // deletes user, it could be student or teacher
Route::get('admin/delete/score/{scoreid}', 'AdminController@deletescore');              // deletes score based on SCOREID

// updating routes
Route::post('admin/update/score/{scoreid}','AdminController@scoreupdate');              // updates score record

// export import
Route::get('export','ExportController@exportscore');
Route::get('admin/importpage','ImportController@importpage');
Route::post('admin/importpage/import','ImportController@importprocess');

// destroy session
Route::get('logout','AdminController@logout');
Route::get('/','AdminController@logout');


Route::get('/home', 'HomeController@index')->name('home');
