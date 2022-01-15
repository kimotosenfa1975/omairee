<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\SubscriptionNotification;
use App\Models\User;
use Notification;

class RequestController extends Controller
{
    //
    function index() {
        $user= \Auth::user();
        try{
            $jisha = \Auth::user()->jisha;
            if($jisha === null) {
                return view('mypage.public-request',compact('user'));
            }else {
                return view('mypage.public-request',compact('user','jisha'));
            }
            
        }catch(\Throwable $e){
            return view('mypage.public-request',compact('user'));
        }

    }
        
     
    function postSend(Request $request) {
        $mailuser = User::where('email','clark194637285@gmail.com')->get();
        $data=array(
            'mail'=> $request->get('mail'),
            'address'=>$request->get('address'),
            'prefectures'=>$request->get('prefectures'),
            'municipalities'=>$request->get('municipalities'),
            'addr-detail'=>$request->get('addr-detail'),
            'building'=>$request->get('building'),
        );
        Notification::locale('ja')->send($mailuser, new SubscriptionNotification($data));
        toastr()->success('転送を完了しました。','',config('toastr.options'));
        return back();
    }
}
