<?php

Route::group([
    "namespace"  => "Press",
], function () {
    /*
     * Admin Press Controller
     */

    // Route for Ajax DataTable
    Route::get("press/get", "AdminPressController@getTableData")->name("press.get-list-data");

    Route::resource("press", "AdminPressController");
});