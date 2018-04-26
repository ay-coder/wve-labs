<?php

Route::group([
    "namespace"  => "Portfolio",
], function () {
    /*
     * Admin Portfolio Controller
     */

    // Route for Ajax DataTable
    Route::get("portfolio/get", "AdminPortfolioController@getTableData")->name("portfolio.get-list-data");

    Route::resource("portfolio", "AdminPortfolioController");
});