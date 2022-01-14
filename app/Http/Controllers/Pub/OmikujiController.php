<?php

namespace App\Http\Controllers\Pub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Omikuji;
use App\Models\UserOmikuji;
use App\Models\Coin;

class OmikujiController extends Controller
{
    //
    function index() {
        $omikujis = UserOmikuji::where('user_id',\Auth::user()->id)->get();
        return view('mypage.omikuji',compact('omikujis'));
    }

    function endData() {
        
        $check = isset(\Auth::user()->coin->remained) ? (\Auth::user()->coin->remained) : 0;
        if($check >= 100) {
            $rand = rand(1,27);
            $omikuji = Omikuji::where('id',$rand)->first();
            $data = '<div class="modal">
                <h2 class="title">結果</h2>
                <div class="A-row">'.$omikuji->song.'</div>
                <div class="B-row">'.$omikuji->explain.'</div>
                <div class="mid-title">
                    <img src="'.asset('img/end.png').'" alt="">
                    <div class="results">'.$omikuji->fortune.'</div>
                </div>
                <div class="omikuji-content">
                    <div class="omikuji-item">
                        <span>恋愛</span>'.$omikuji->love.'
                    </div>
                    <div class="omikuji-item">
                        <span>願望</span>'.$omikuji->aspiration.'
                    </div>
                    <div class="omikuji-item">
                        <span>お勤</span>'.$omikuji->work.'
                    </div>
                    <div class="omikuji-item">
                        <span>商売</span>'.$omikuji->business.'
                    </div>
                    <div class="omikuji-item">
                        <span>デート</span>'.$omikuji->dating.'
                    </div>
                    <div class="omikuji-item">
                        <span>賭け事</span>'.$omikuji->gambling.'
                    </div>
                    <div class="omikuji-item">
                        <span>相場</span>'.$omikuji->market.'
                    </div>
                    <div class="omikuji-item">
                        <span>病気</span>'.$omikuji->sick.'
                    </div>
                    <div class="omikuji-item">
                        <span>失せ物</span>'.$omikuji->lost.'
                    </div>
                    <div class="omikuji-item">
                        <span>就職</span>'.$omikuji->job.'
                    </div>
                    <div class="omikuji-item">
                        <span>縁談</span>'.$omikuji->marriage.'
                    </div>
                </div>
                <div class="restart">
                    <a href="'.route('mypage.omikuji').'/#welcome" class="red-btn">もう一回引く</a>
                </div>
                <div class="sub-des">＼　おみくじの結果をシェアしよう！　／</div>
                <div class="social-modal-item">
                    <img src="'.asset('img/line.png') .'" alt="">
                    <img src="'.asset('img/twitter.png') .'" alt="">
                    <img src="'.asset('img/facebook.png') .'" alt="">
                </div>
                <a onclick="init()" class="link-2"></a>
            </div>';
            UserOmikuji::create([
                'user_id'=>\Auth::user()->id,
                'omikuji_id'=>$rand,
            ]);
            $remained = isset(\Auth::user()->coin->remained) ? (\Auth::user()->coin->remained - 100) : 0;
            Coin::updateOrCreate([
                'user_id'      => \Auth::user()->id,
            ], [
                'user_id'       => \Auth::user()->id,
                'remained'   => $remained,
            ]);
            
        } else {
            $data = '<div class="modal">
                <h2 class="title">結果</h2>
                <div class="omikuji-content">
                    コインを購入してください。
                </div>
                <div class="restart">
                    <a href="'.route('mypage.omikuji').'/#welcome" class="red-btn">もう一回引く</a>
                </div>
                <div class="sub-des">＼　おみくじの結果をシェアしよう！　／</div>
                <div class="social-modal-item">
                    <img src="'.asset('img/line.png') .'" alt="">
                    <img src="'.asset('img/twitter.png') .'" alt="">
                    <img src="'.asset('img/facebook.png') .'" alt="">
                </div>
                <a onclick="init()" class="link-2"></a>
            </div>';
        }

        return $data;
    }
}
