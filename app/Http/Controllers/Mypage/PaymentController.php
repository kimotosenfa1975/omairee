<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe;

class PaymentController extends Controller
{
    //
    function index() {
        return view('mypage.stripe-register');
    }
}
