<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MypageController extends Controller
{
    //
    public function index() {
        return view('mypage.mypage');
    }
    public function imgUpload(Request $request) {
        request()->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
 
        if ($files = $request->file('file')) {
            
            $fileName =  "image-".time().'.'.$request->file->getClientOriginalExtension();
            $request->file->move(public_path().'/image', $fileName);
            
            $user = \Auth::user();
            $user->img = $fileName;
            $user->save();
            toastr()->warning('プロファイル写真が更新されました。','',config('toastr.options'));
            return back();
 
        }
    }
    
    public function updateInfo(Request $request) {
        
        $user = \Auth::user();
        $user->name = $request->name;
        $user->userId = $request->userId;
        $user->email = $request->email;
        $user->save();
        toastr()->success('基本情報が更新されました。','',config('toastr.options'));
        return back();
    }

    public function updatePass(Request $request) {
        
        $user = \Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();
        toastr()->success('パスワードが更新されました。','',config('toastr.options'));
        return back();
    }
}
