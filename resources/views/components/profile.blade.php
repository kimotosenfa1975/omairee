<div class="profile pc">
    <div class="user-image">
        <div class="profileImgView">
            @if(isset(\Auth::user()->img))
            <div id="profileImg" style="background-image:url('../image/{{\Auth::user()->img}}') !important;"></div>
            @else
            <div id="profileImg"></div>
            @endif
        </div>
        <div class="user-name"><span>{{ \Auth::user()->name}}</span>さん</div>
        <a >プロファイル</a>
    </div>
    <div class="icons">
        <div class="icon-item">
            <a href="{{ route('mypage.ema')}}">
                <img src="{{ asset('img/ema.png')}}" alt="">
                <div class="text">絵馬</div>
            </a>
        </div>
        <div class="icon-item">
            <a href="{{ route('mypage.omikuji')}}">
                <img src="{{ asset('img/omikuji.png')}}" alt="">
                <div class="text">おみくじ</div>
            </a>
        </div>
    </div>
    <div class="buy-coin">
        <a href="{{ route('mypage.mypage')}}#buyCoin">
            <div>
            <img src="{{ asset('img/coin.png')}}" alt="">
            <span>コイン購入</span>
            </div>
            <img src="{{ asset('img/right-icon.png')}}" alt="">
        </a>
    </div>
</div>