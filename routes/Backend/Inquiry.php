<?php

Route::group([
    "namespace"  => "Inquiry",
], function () {
    /*
     * Admin Inquiry Controller
     */

    // Route for Ajax DataTable
    Route::get("inquiry/get", "AdminInquiryController@getTableData")->name("inquiry.get-list-data");

    Route::resource("inquiry", "AdminInquiryController");
});