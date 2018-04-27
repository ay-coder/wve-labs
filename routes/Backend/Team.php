<?php

Route::group([
    "namespace"  => "Team",
], function () {
    /*
     * Admin Team Controller
     */

    // Route for Ajax DataTable
    Route::get("team/get", "AdminTeamController@getTableData")->name("team.get-list-data");

    Route::resource("team", "AdminTeamController");
});