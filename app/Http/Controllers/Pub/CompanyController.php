<?php

namespace App\Http\Controllers\Pub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    function index() {
        return view('public.jisha-list');
    }

    function detail() {
        return view('public.jisha-detail');
    }
}
