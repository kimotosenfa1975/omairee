<?php

namespace App\Http\Controllers\Pub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jisha;
use App\Models\Ema;

class EmaController extends Controller
{
    //
    function index() {
        return view('mypage.ema-register');
    }

    function after() {
        return view('mypage.ema-after-register');
    }

    function list() {
        $emas = \Auth::user()->emas;
        $jisha = \Auth::user()->jisha;
        return view('mypage.ema-list',compact('emas','jisha'));
    }

    function emaRegister(Request $request) {
        try {
            \Auth::user()->emas()->create([
                'text' => $request->ema_text,
            ]);
        }catch (\Throwable $e) {
            
        }
        toastr()->success('絵馬が登録されました。','',config('toastr.options'));
        return view('mypage.ema-after-register');
    }

    function emaRegisterShow() {
        return view('mypage.ema-after-register');
    }
}
