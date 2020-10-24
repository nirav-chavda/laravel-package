<?php

namespace NiravChavda\Timezone\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezoneController extends Controller
{

    public function index($timezone)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('timezone::time', compact('current_time'));
    }
}
