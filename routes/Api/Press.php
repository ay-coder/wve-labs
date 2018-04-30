<?php
Route::group(['namespace' => 'Api'], function()
{
    
    Route::post('press/create', 'APIPressController@create')->name('press.create');
    Route::post('press/edit', 'APIPressController@edit')->name('press.edit');
    Route::post('press/show', 'APIPressController@show')->name('press.show');
    Route::post('press/delete', 'APIPressController@delete')->name('press.delete');
});
?>