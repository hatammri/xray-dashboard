<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;


//require __DIR__ . '/auth.php';
Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {

    Route::get('/map/carslocation/', function () {
        return view('map.carlocations');
    })->name('map.carlocations');

    Route::get('/map/carlocationsdetails/', function () {
        return view('map.carlocationsdetails');
    })->name('map.carlocationsdetails');

    Route::get('/reports/listPersonnel/', function () {
        return view('reports.listPersonnel.listPersonnel');
    })->name('reports.listPersonnel.listPersonnel');

    Route::get('/reports/listdrivers/', function () {
        return view('reports.listdrivers.listdrivers');
    })->name('reports.listdrivers.listdrivers');

    Route::get('/reports/listscanOriginDestination/', function () {
        return view('reports.listCompareOriginDestination.listcompare');
    })->name('reports.listCompareOriginDestination.listcompare');

    Route::get('/reports/showdetailsOriginDestination', function () {
        return view('reports.listCompareOriginDestination.contradictiondetails');
    })->name('reports.listCompareOriginDestination.contradictiondetails');

    Route::get('/drivers/list', function () {
        return view('drivers.list');
    })->name('drivers.list');
    Route::get('/drivers/create', function () {
        return view('drivers.create');
    })->name('drivers.create');
    Route::get('/add/drivers', function () {
        return view('drivers.add');
    })->name('drivers.add');

    Route::get('', function () {
        return view('dashboard.index');
    })->name('dashboard');
    Route::get('/personnels/list_centers', function () {
        return view('personnel.index');
    })->name('personnels.list_centers');

    Route::get('/personnels/list_personnels', function () {
        return view('personnel.list');
    })->name('personnels.list_personnels');
    Route::get('/logout', function () {
        auth()->logout();
        return redirect()->route('login');
    })->name('logout');
    Route::get('/reports/list_scan_period', function () {
        return view('reports.listScans.listscanperiod');
    })->name('reports.list_scan_period');

    Route::get('/reports/list_contradiction', function () {
        return view('reports.listScans.listcontradiction');
    })->name('reports.list_contradiction');

    Route::get('/reports/list_personnel', function () {
        return view('reports.listScans.listpersonnel');
    })->name('reports.list_personnel');

    Route::get('/reports/list_scans', function () {
        return view('reports.listScans.listscans');
    })->name('reports.list_scans');

    Route::get('/reports/listContradictions', function () {
        return view('reports.listContradictions.listcontradictions');
    })->name('reports.listContradictions.listcontradictions');

    Route::get('/reports/show_contradiction_details', function () {
        return view('reports.listScans.showalldetails');
    })->name('reports.show_all_details');

    Route::get('/reports/show_all_details', function () {
        return view('reports.listScans.contradictiondetails');
    })->name('reports.contradictiondetails');

    Route::get('/reports/itemdetail', function () {
        return view('reports.itemdetail');
    })->name('reports.itemdetail');


    Route::get('/reports/testtable', function () {
        return view('reports.testtable');
    })->name('reports.testtable');


    Route::get('/accesslevel/listStation', function () {
        return view('accesslevel.index');
    })->name('accesslevel.index');
    Route::get('/accesslevel/accessroles', function () {
        return view('accesslevel.accessroles');
    })->name('accesslevel.accessroles');
    Route::get('/accesslevel/accesspermission', function () {
        return view('accesslevel.accesspermission');
    })->name('accesslevel.accesspermission');

    Route::get('/accesslevel/appuserview', function () {
        return view('accesslevel.appuserview');
    })->name('accesslevel.appuserview');

});

Route::any('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/resend_otp', [AuthController::class, 'resendOtp'])->middleware('guest')->name('resendOtp');
Route::post('/check_otp', [AuthController::class, 'checkOtp'])->middleware('guest')->name('checkOtp');
Route::any('/register', [RegisterController::class, 'register'])->middleware('guest')->name('register');
