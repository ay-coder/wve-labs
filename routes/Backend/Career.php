<?php

Route::group([
    "namespace"  => "Career",
], function () {
    /*
     * Admin Career Controller
     */

    // Route for Ajax DataTable
    Route::get("career/get", "AdminCareerController@getTableData")->name("career.get-list-data");

    Route::resource("career", "AdminCareerController");
});