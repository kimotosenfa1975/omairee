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
        $jisha = \Auth::user()->jisha;
        $jishaEmas = $jisha->jishaemas;
        $jishaSaisens = $jisha->jishasaisens;
        $total=0;
        foreach($jishaEmas as $jishaEma) {
            $total+=$jishaEma->ema * $jishaEma->ema_count;
        }
        foreach($jishaSaisens as $jishaSaisen) {
            $total+=$jishaSaisen->saisen * $jishaSaisen->saisen_count;
        }
        return view('mypage.jisha-mypage',compact('jisha','jishaEmas','jishaSaisens','total'));
       
    }

    function updateJishaInfo(Request $request) {
        $user = \Auth::user();
        $jisha = \Auth::user()->jisha;
        $user->name = $request->name;
        $jisha->description = $request->description;
        $user->userId = $request->userId;
        $user->email = $request->email;
        $user->save();$jisha->save();
        toastr()->success('基本情報が更新されました。','',config('toastr.options'));
        return back();
    }

    function updateJishaBank(Request $request) {
        $jisha = \Auth::user()->jisha;
        $jisha->bankName = $request->bankName;
        $jisha->financialName = $request->financialName;
        $jisha->accountNumber = $request->accountNumber;
        $jisha->branch = $request->branch;
        $jisha->save();
        toastr()->success('寺社お振込み先情報が更新されました。','',config('toastr.options'));
        return back();
    }
}
