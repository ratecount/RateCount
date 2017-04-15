<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

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

//Route::get('/', 'IndexesController@create');


Route::post('/application/borrower', function() {
    return view('application.borrower');
});

Route::get('/application/maritalstatus', 'MaritalStatusController@create');

Route::post('/application/demographic', 'EthnicitiesController@create');


Route::get('/application/hispaniclatino', function () {
    return view('application.hispaniclatino');
});

Route::get('/application/ethnicity', 'EthnicitiesController@index');

Route::post('/application/addcoborrower', 'AddCoBorrowersController@create');

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

Route::post('/application/militarystatus', 'MilitaryStatusesController@create');

Route::post('/application/employmentstatus', 'EmploymentStatusesController@create');

Route::post('/application/employmentinfo', 'EmploymentInfoController@create');

Route::post('/application/employmentw2income', 'EmploymentIncomesController@create');

Route::post('/application/otherincomesource', 'OtherIncomeSourcesController@create');

Route::post('/application/otherincomesourcep2','OtherIncomeSourcesController@create');