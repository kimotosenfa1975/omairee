<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JishaController extends Controller
{
    //
    function index() {
        return view('mypage.jisha-mypage');
    }
}
