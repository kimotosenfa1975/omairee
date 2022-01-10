<?php

namespace App\Http\Controllers\Pub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TopController extends Controller
{
    //
    function index() {
        $now = Carbon::now();
        $date = Carbon::parse('2022-01-01 00:00:00');
        $diffDays = $date->diffInDays($now);
        $diffInHours = $date->diffInHours($now)%24;
        $diffInMinutes = $date->diffInMinutes($now)%60;
        $diffInSeconds = $date->diffInSeconds($now)%60;

        $newyear = $now->lte($date);
        
        return view('public.top',compact('diffDays','diffInHours','diffInMinutes','diffInSeconds','newyear'));
    }
}
