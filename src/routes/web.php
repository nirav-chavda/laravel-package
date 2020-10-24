<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'NiravChavda\Timezone\Http\Controllers'], function () {
    Route::get('timezones', function () {
        echo "Inside TimeZones";
    });
    Route::get('timezones/{timezone}', 'TimezoneController@index');
});
