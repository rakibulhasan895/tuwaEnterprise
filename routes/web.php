<?php
use App\Http\Controllers\AbsAccountDetailsController;
use App\Http\Controllers\AbsXYearsInterestsController;
use App\Http\Controllers\AgroniBishesottoController;
use App\Http\Controllers\AgroniServicesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeeComputerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TuwakrishiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

//use DB;

Route::get('/dashboard',function () {
		return view('welcome');
	});
Route::get('/', function () {
		return view('admin.layouts.nav.pub');
	});

Route::get('/layouts', function () {
		return view('admin.layouts.app');
	});

Route::get('/dash', function () {
		return view('admin.layouts.dashboard');
	});
Route::get('/ll', function () {
		return view('admin.blog.index');
	});
Route::get('/registration', function () {
		return view('admin.registration.index');
	});
Route::get('/absxyinterest', function () {
		return view('admin.absxyinterest.index');
	});
Route::get('login', [loginController::class , 'login'])->name('login');
Route::post('login', [loginController::class , 'loginconfirm'])->name('login.confirm');

//Route::get('registrations',[RegistrationController::class,'index']);
//Route::get('registrations/create',[RegistrationController::class,'create']);
//Route::post('registrations',[RegistrationController::class,'store']);
//Route::get('registrations/{id}/edit',[RegistrationController::class,'edit']);
//Route::get('registrations/{id}',[RegistrationController::class,'show']);
//Route::put('registrations/{id}',[RegistrationController::class,'update']);
//Route::delete('registrations/{id}',[RegistrationController::class,'destroy']);

Auth::routes();
Route::get('paper', [HomeController::class , 'localblog']);
Route::get('agroniservice', [HomeController::class , 'localserivces']);
Route::get('absxyinterestdetails', [HomeController::class , 'localinterest']);
Route::get('absaccountdetails', [HomeController::class , 'localabsdetail']);
Route::get('contactus', [HomeController::class , 'localcontact']);
Route::get('agronibishesotto', [HomeController::class , 'localbisesotto']);
Route::get('tuwakrishi', [HomeController::class , 'localtuwasadkrishi']);

Route::middleware([auth::class ])->group(function(){
	Route::get('search', [SearchController::class , 'search'])->name('search');
	Route::get('/home', [HomeController::class , 'index'])->name('home');
	Route::resource('users', UserController::class );
	Route::resource('registrations', RegistrationController::class );
	Route::resource('blogs', BlogController::class );
	Route::resource('comments', CommentController::class );
	//Route::get('archive/{month}/{year}',[BlogController::class,'archives']);
	Route::resource('contacts', ContactController::class );
	Route::resource('absaccounts', AbsAccountDetailsController::class );
	Route::resource('absxyinterests', AbsXYearsInterestsController::class );
	Route::resource('agronibishesottos', AgroniBishesottoController::class );
	Route::resource('agroniservices', AgroniServicesController::class );
	Route::resource('tuwakrishis', TuwakrishiController::class );
	Route::resource('employeecomputers', EmployeeComputerController::class );
	Route::resource('categories', CategoryController::class );
	Route::resource('tags', TagController::class );
	
});

