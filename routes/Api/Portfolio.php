<?php
Route::group(['namespace' => 'Api'], function()
{
    //Route::get('portfolio', 'APIPortfolioController@index')->name('portfolio.index');
    Route::post('portfolio/create', 'APIPortfolioController@create')->name('portfolio.create');
    Route::post('portfolio/edit', 'APIPortfolioController@edit')->name('portfolio.edit');
    Route::post('portfolio/show', 'APIPortfolioController@show')->name('portfolio.show');
    Route::post('portfolio/delete', 'APIPortfolioController@delete')->name('portfolio.delete');
});
?>