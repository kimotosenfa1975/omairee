<?php

namespace App\Http\Controllers\Pub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OmikujiController extends Controller
{
    //
    function index() {
        return view('mypage.omikuji');
    }
}
