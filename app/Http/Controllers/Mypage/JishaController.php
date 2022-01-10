<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jisha;
use App\Models\Ema;

class JishaController extends Controller
{
    //
    function index() {
        return view('mypage.jisha-mypage');
    }
}
