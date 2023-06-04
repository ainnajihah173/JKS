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


Route::get('/status-permohonan', function () {
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
=======
Route::get('/daftar-kursus', function () {
    return view('manageMCourse/courseRegisteration');
});

Route::get('/penangguhan-kursus', function () {
    return view('manageMCourse/postponeCourse');
});

Route::get('/senarai-cetak', function () {
    return view('manageMCourse/documentList');
});

Route::get('/kemaskini-kursus', function () {
    return view('manageMCourse/editApplication');
});

Route::get('/papar-kursus', function () {
    return view('manageMCourse/viewApplication');
});

Route::get('/senarai-carian', function () {
    return view('manageMCourse/searchListStaff');
});

Route::get('/tambah-kursus', function () {
    return view('manageMCourse/addCourse');
});

Route::get('/daftar-peserta', function () {
    return view('manageMCourse/manualRegistration');
});
Route::get('/kemaskini-kursus-peserta', function () {
    return view('manageMCourse/editCourseStaff');
});
Route::get('/papar-kursus-peserta', function () {
    return view('manageMCourse/viewCourseStaff');
});
Route::get('/kehadiran', function () {
    return view('manageMCourse/attendanceList');
});
Route::get('/kelulusan', function () {
    return view('manageMCourse/approvalList');
});

Route::get('/status-kebenaran', function () {
    return view('manageMRequest/statusRequest');
});

Route::get('/senarai-cetak-kebenaran', function () {
    return view('manageMRequest/documentPage');
});

Route::get('/hiv', function () {
    return view('manageMRequest/HIVForm');
});

Route::get('/wakalah', function () {
    return view('manageMRequest/wakalahForm');
});

Route::get('/searchListRequest', function () {
    return view('manageMRequest/searchListRequest');
});

Route::get('/kemaskini-kelulusan', function () {
    return view('manageMRequest/updateApproval');
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

>>>>>>> Stashed changes

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

