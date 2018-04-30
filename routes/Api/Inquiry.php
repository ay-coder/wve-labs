<?php
Route::group(['namespace' => 'Api'], function()
{
    Route::get('inquiry', 'APIInquiryController@index')->name('inquiry.index');
    Route::post('inquiry/create', 'APIInquiryController@create')->name('inquiry.create');
    Route::post('inquiry/edit', 'APIInquiryController@edit')->name('inquiry.edit');
    Route::post('inquiry/show', 'APIInquiryController@show')->name('inquiry.show');
    Route::post('inquiry/delete', 'APIInquiryController@delete')->name('inquiry.delete');
});
?>