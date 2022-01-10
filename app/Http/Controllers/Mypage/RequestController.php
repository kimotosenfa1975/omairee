<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    //
    function index() {
        return view('mypage.public-request');
    }
     
    function postSend() {
        dd(request()->all());
    }
}
