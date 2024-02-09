<?php
//use App\Http\Controllers\DepartmentsController;
//use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/Route::group(['middleware' => ['web']], function () {
    // Your routes here


Route::get('/', 'PagesController@getIndex');
Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');
Route::resource('faculties', 'FacultysController');
Route::resource('departments', 'DepartmentsController');
Route::resource('students','StudentsController');
Route::resource('semesters', 'SemesterController');
Route::resource('courses', 'CoursesController');
Route::resource('grades', 'GradesController');

    //authentication.Routes
          Route::get('auth/login', ['as'=>'login', 'uses'=>'Auth\LoginController@showLoginForm']);
          Route::post('auth/login', 'Auth\LoginController@login');
          Route::post('auth/logout', [ 'as'=>'logout','uses'=>'Auth\LoginController@logout']);
    //Registration Routes
          Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
          Route::post('auth/register', 'Auth\RegisterController@register');




Route::get('uploads', 'UploadController@Index');
Route::post('store', 'UploadController@store');
Route::get('show', 'UploadController@show');


});
//Route::get('departments/create', ['uses' => 'DepartmentsController@create', 'as' => 'departments.create']);
//Route::post('departments', ['uses' => 'DepartmentsController@store', 'as' => 'departments.store']);
/*Route::get('departments/create', ['uses' => 'DepartmentsController@create', 'as' => 'departments.create']);
Route::post('departments/confirm', ['uses' => 'DepartmentsController@confirm', 'as' => 'departments.confirm']);
Route::post('departments/store', ['uses' => 'DepartmentsController@store', 'as' => 'departments.store']);
Route::get('departments/{department}', ['uses' => 'DepartmentsController@show', 'as' => 'departments.show']);*/









