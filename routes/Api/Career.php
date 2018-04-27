<?php
Route::group(['namespace' => 'Api'], function()
{
    Route::get('career', 'APICareerController@index')->name('career.index');
    Route::post('career/create', 'APICareerController@create')->name('career.create');
    Route::post('career/edit', 'APICareerController@edit')->name('career.edit');
    Route::post('career/show', 'APICareerController@show')->name('career.show');
    Route::post('career/delete', 'APICareerController@delete')->name('career.delete');
});
?>