<?php

//GET INDEX STARTS
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/login', function () {
        return view('login');
    });

    Route::get('/createaccount', function () {
        return view('createaccount');
    });

    Route::get('/partnerwithus', function() {
        return view('partnerwithus');
    });

    Route::get('/authentication', function() {
        return view('authentication');
    });
//GET INDEX ENDS

//POST INDEX STARTS
    Route::post('/login', 'IndexesController@create');
    Route::post('/authentication', 'IndexesController@create');
//POST INDEX ENDS

//GET INQUIRES START
    Route::get('/application/estimatecreditscore', function() {
        return view('application.estimatecreditscore');
    });

    Route::get('/application/propertytype', function() {
        return view('application.propertytype');
    });

    Route::get('/application/occupancytype', function() {
        return view('application.occupancytype');
    });

    Route::get('/application/loanamount', function() {
        return view('application.loanamount');
    });

    Route::get('/application/ratesheet', function() {
        return view('application.ratesheet');
    });
//GET INQUIRES ENDS

//POST INQUIRES PHASE STARTS
Route::post('/','InquiresController@create');
Route::post('/application/estimatecreditscore','InquiresController@create');
Route::post('/application/propertytype','InquiresController@create');
Route::post('/application/occupancytype','InquiresController@create');
Route::post('/application/loanamount','InquiresController@create');
Route::post('/application/ratesheet','InquiresController@create');
//POST INQUIRES PHASE ENDS

//GET BORROWER STARTS
    Route::get('/application/borrower', function() {
        return view('application.borrower');
    });

    Route::get('/application/maritalstatus', function() {
        return view('application.maritalstatus');
    });

    Route::get('/application/dependency', function() {
        return view('application.dependency') ;
    });

    Route::get('/application/demographic',function() {
        return view('application.demographic');
    });

    Route::get('/application/hispaniclatino', function() {
        return view('application.hispaniclatino');
    });

    Route::get('/application/nothispaniclatino',function() {
        return view('application.nothispaniclatino');
    });

    Route::get('/application/nothispaniclatinoasian',function() {
        return view('application.nothispaniclatinoasian');
    });

    Route::get('/application/addcoborrower', function () {
        return view('application.addcoborrower');
    });

    Route::get('/application/ethnicity', 'EthnicitiesController@index');
//GET BORROWER ENDS

//POST BORROWER PHASE STARTS
Route::post('/application/borrower','BorrowersController@create');
Route::post('/application/demographic','BorrowersController@create');
Route::post('application/hispaniclatino','BorrowersController@create');
Route::post('/application/nothispaniclatino','BorrowersController@create');
Route::post('/application/nothispaniclatinoasian','BorrowersController@create');
Route::post('/application/addcoborrower','BorrowersController@create');
//POST BORROWER PHASE ENDS

//GET EMPLOYMENT STARTS
    Route::get('/application/militarystatus', function () {
        return view('application.militarystatus');
    });

    Route::get('/application/militarystatusyes', function () {
        return view('application.militarystatusyes');
    });

    Route::get('/application/employmentstatus', function () {
        return view('application.employmentstatus');
    });

    Route::get('/application/employmentinfo', function () {
        return view('application.employmentinfo');
    });

    Route::get('/application/employmentw2income', function () {
        return view('application.employmentw2income');
    });

    Route::get('/application/employmentselfemployincome', function () {
        return view('application.employmentselfemployincome');
    });

    Route::get('/application/otherincomesource', function () {
        return view('application.otherincomesource');
    });

    Route::get('/application/otherincomesourcep2', function () {
        return view('application.otherincomesourcep2');
    });

    Route::get('/application/addproperty', function () {
        return view('application.addproperty');
    });
//GET EMPLOYMENT ENDS

//POST EMPLOYMENT PHASE STARTS
Route::post('/application/militarystatus','EmploymentsController@create');
Route::post('/application/militarystatusyes','EmploymentsController@create');
Route::post('/application/employmentstatus','EmploymentsController@create');
Route::post('/application/employmentinfo','EmploymentsController@create');
Route::post('/application/employmentw2income','EmploymentsController@create');
Route::post('/application/employmentselfemployincome','EmploymentsController@create');
Route::post('/application/otherincomesource','EmploymentsController@create');
Route::post('/application/otherincomesourcep2','EmploymentsController@create');
Route::post('/application/addproperty','EmploymentsController@create');
//POST EMPLOYMENT PHASE ENDS

//GET PROPERTY STARTS
    Route::get('/application/address', function () {
        return view('application.address');
    });

    Route::get('/application/householdexpense', function () {
        return view('application.householdexpense');
    });

    Route::get('/application/otherexpense', function () {
        return view('application.otherexpense');
    });

    Route::get('/application/financedeclaration', function () {
        return view('application.financedeclaration');
    });
//GET PROPERTY ENDS

//POST PROPERTY STARTS
    Route::post('/application/address','PropertiesController@create');
    Route::post('/application/householdexpense','PropertiesController@create');
    Route::post('/application/otherexpense','PropertiesController@create');
    Route::post('/application/financedeclaration','PropertiesController@create');
//POST PROPERTY ENDS
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
