<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout/userBase');
});

Route::get('/home', function () {
    return view('layout/staffBase');
});


Route::get('/statusApplication', function () {
    return view('manageMCourse/statusApplication');
});

Route::get('/registrationPage', function () {
    return view('manageMCourse/registrationPage');
});

Route::get('/postponePage', function () {
    return view('manageMCourse/postponePage');
});

Route::get('/documentPage', function () {
    return view('manageMCourse/documentPage');
});

Route::get('/editCourseForm', function () {
    return view('manageMCourse/editCourseFormPage');
});

Route::get('/viewCourseForm', function () {
    return view('manageMCourse/viewCourseFormPage');
});

Route::get('/marriageInfo', function () {
    return view('manageMRegistration/infoApplicant');
});

Route::get('/marriageStatus', function () {
    return view('manageMRegistration/viewMRegApplicant');
});

Route::get('/marriageAppView', function () {
    return view('manageMRegistration/viewAppApplicant');
});

Route::get('/marriageAppPrint', function () {
    return view('manageMRegistration/printAppApplicant');
});

Route::get('/marriageEditInfo', function () {
    return view('manageMRegistration/editAppApplicant');
});

Route::get('/applyIncentive', function () {
    return view('manageIncentive.applyIncentive');

});

