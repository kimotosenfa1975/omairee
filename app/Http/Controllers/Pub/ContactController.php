<?php

namespace App\Http\Controllers\Pub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications\ContactNotification;
use App\Models\User;
use Notification;

class ContactController extends Controller
{
    //
    function index() {
        return view('public.contact');
    }

    function send(Request $request) {
        $mailuser = User::where('email','clark194637285@gmail.com')->get();
        $data=array(
            'email'=> $request->get('email'),
            'tel'=>$request->get('tel'),
            'name'=>$request->get('name'),
            'message'=>$request->get('message'),
        );
        Notification::locale('ja')->send($mailuser, new ContactNotification($data));
        toastr()->success('転送を完了しました。','',config('toastr.options'));
        return back();
    }
}
