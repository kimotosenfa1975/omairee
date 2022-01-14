<div class="profile pc">
    <div class="user-image">
        <div class="profileImgView">
            <div id="profileImg" style="background-image:url('../image/{{\Auth::user()->img}}') !important;"></div>
        </div>
        <div class="user-name"><span>{{ \Auth::user()->name}}</span>さん</div>
        <a >プロファイル</a>
    </div>
    <div class="buy-coin" style="margin-top:5px;">
        <a href="{{ route('mypage.jisha-post')}}">
            <div>
            <img src="{{ asset('img/coin.png')}}" alt="">
            <span>掲載申請</span>
            </div>
            <img src="{{ asset('img/right-icon.png')}}" alt="">
        </a>
    </div>
</div>