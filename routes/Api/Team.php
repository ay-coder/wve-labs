<?php
Route::group(['namespace' => 'Api'], function()
{
    
    Route::post('team/create', 'APITeamController@create')->name('team.create');
    Route::post('team/edit', 'APITeamController@edit')->name('team.edit');
    Route::post('team/show', 'APITeamController@show')->name('team.show');
    Route::post('team/delete', 'APITeamController@delete')->name('team.delete');
});
?>