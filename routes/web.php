<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LtypeController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Auth\RegisterController;


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
//Temporarly comment

// Route::get('/', function () {
//     return view('login');
// });
Route::view('backend/admin','backend/admin');
//Route::view('backend/admin','backend/admin');
Route::view('signup','signup');
Route::view('frontend/user','frontend/user');
Route::view('register','auth/register');
Route::view('frontend/profile','frontend/profile');
Route::view('frontend/index','frontend/index');
Route::view('backend/myprofile','backend/myprofile');
Route::view('backend/leave','backend/leave');
Route::view('backend/complaint','backend/complaint');
Route::view('backend/profiles/myprofile','backend/profiles/myprofile');





Route::resource('backend/admin/employees', EmployeeController::class);
Route::post('backend/admin/employees/store', 'App\Http\Controllers\EmployeeController@store');

Route::resource('backend/admin/ltypes', LtypeController::class);
Route::post('backend/admin/ltypes/store', 'App\Http\Controllers\LtypeController@store');

Route::resource('backend/admin/marks', MarkController::class);
Route::post('backend/admin/marks/store', 'App\Http\Controllers\MarkController@store');

Route::resource('backend/admin/departments', DepartmentController::class);
Route::post('backend/admin/departments/store', 'App\Http\Controllers\DepartmentController@store');


Route::resource('backend/admin/admins', AdminController::class);
Route::post('backend/admin/admins/store', 'App\Http\Controllers\AdminController@store');

Route::get('backend/leave', 'App\Http\Controllers\LeaveController@index');
Route::get('frontend/leave', 'App\Http\Controllers\LeaveController@create');
Route::post('frontend/leave/store', 'App\Http\Controllers\LeaveController@store');
Route::get('backend/leave/approvedmail/{email}','App\Http\Controllers\LeaveController@approve')->name('approved');
Route::get('backend/leave/sendmail/{email}','App\Http\Controllers\LeaveController@reject')->name('sent');
Route::resource('backend/leave', LeaveController::class);

Route::get('backend/complaint', 'App\Http\Controllers\ComplaintController@index');
Route::get('frontend/complaint', 'App\Http\Controllers\ComplaintController@create');
Route::post('frontend/complaints/store', 'App\Http\Controllers\ComplaintController@store');
Route::get('backend/complaint/sendmail/{email}','App\Http\Controllers\ComplaintController@save')->name('send');
Route::resource('backend/complaint', ComplaintController::class);

Route::controller(SampleController::class)->group(function(){
    Route::get('login', 'index')->name('login');
    Route::get('logout', 'logout')->name('logout');
    Route::post('validate_login', 'validate_login')->name('sample.validate_login');
Route::get('backend/admin', 'admin')->name('admin');


});
Route::get('user/login',[AdminsController::class,'login']);
Route::get('user',[AdminsController::class,'index']);
Route::post('user/login',[AdminsController::class,'submit_login'])->name('submit_login');
Route::get('user/logout',[AdminsController::class,'logout']);
Route::get('frontend/profile',[AdminsController::class,'profile'])->name('frontend/profile');
//Route::get('frontend/profile',[AdminsController::class,'userProfile'])->name('frontend/profile');


Route::prefix('backend')->group( function(){
    Route::controller(App\Http\Controllers\AttendanceController::class)->group(function(){
        Route::get('attendances', 'index');
        Route::get('attendances/create','create');
        Route::post('attendances', 'store');
        Route::get('attendances/{attendance}/edit', 'edit');
        Route::put('attendances/{attendance}', 'update');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin')->middleware('is_admin');
