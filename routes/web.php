<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestEnrollMentController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\StudentsController;
// use App\Http\Controllers\TestEnrollMentController;
use App\Mail\WelcomeMail;
use App\Mail\AttachmentMail;

use Illuminate\Support\Facades\Mail;
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

Route::get('home', function () {
    return view('welcome');
});

/*Route::get('list',function(){
    return view('listings');
});*/

Route::get('listings',[ListingsController::class,'index']);

//Show Form to Create
Route::get('create',[ListingsController::class,'create']);

//Store Listing Data
Route::post('listingstr',[ListingsController::class,'store']);

//Show edit form
Route::get('/listingstr/{listing}/edit',[ListingsController::class,'edit'])->name('listing.show');
// ->middleware('can:isAdmin');

//Update form
Route::put('/listingstr/{listing}',[ListingsController::class,'update']);
// ->middleware('can:isAdmin');

//Delete Listing
Route::delete('/listingstr/{listing}',[ListingsController::class,'destroy']);

//Single Listing
Route::get('mylistings/{listing}',[ListingsController::class,'show'])->name('show')
->middleware('can:view,listing');

// Managing Listings
Route::get('/listings/manage',[ListingsController::class,'manage']);

// Show Register form
Route::get('register',[UserController::class,'create'])->middleware('guest');

// Store a User
Route::post('/users',[UserController::class,'store']);

// Logout
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

//Show Login Page
Route::get('login',[UserController::class,'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate',[UserController::class,'authenticate']);



Route::view('mycss','nobercss');
Route::view('mycss2','utility');
// Route::post('upload',[ListingsController::clas,'upload']);

//email testing
Route::get('sendmail',[ListingsController::class,'myemail']);
// ->name('sendmail.myemail');

//email sending
// Route::get('/email',function(){
//     Mail::to('mainanorbert@gmail.com')->send(new WelcomeMail());
//     return new WelcomeMail();

// }); 
Route::get('/emails',[EmailController::class,'email']);

Route::get('noty',[TestEnrollMentController::class,'testnotif']);

Route::get('mystud',[StudentsController::class,'index']);
Route::post('students',[StudentsController::class,'store']);