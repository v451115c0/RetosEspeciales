<?php
Route::get('/kiai/{associateid}', "Retos\kaizenController@kiaiIndex");
Route::get('/viajeros/{associateid}', "Retos\kaizenController@viajerosIndex")->name('viajeros');
Route::get('/serpro/{associateid}/{staff?}', "Retos\kaizenController@serProIndexnew");
Route::get('/loadupline', "Retos\kaizenController@loadUpline");
Route::post('/registeclubv', 'Retos\kaizenController@registeClubV');
Route::get('/kaizen/{associateid}', 'Retos\kaizenController@Kaizenindex');
Route::get('/kaizen/{associateid}/updatekaizen', 'Retos\kaizenController@updateTotalKaizen');
Route::get('/taishi/{associateid}', 'Retos\kaizenController@indexTaishi');
Route::get('/taishi/{associateid}/updatetaishi', 'Retos\kaizenController@updateTotalTaishi');
Route::get('/no/{associateid}', 'Retos\kaizenController@no');