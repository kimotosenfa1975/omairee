<div class="profile pc">
    <div class="user-image">
          @if(isset(\Auth::user()->img))
              <img src="{{ asset('image/'.\Auth::user()->img)}}" alt="">
          @else
              <img src="{{ asset('img/no-user-image.png')}}" alt="">
          @endif
          <div class="user-name"><span>{{ \Auth::user()->name}}</span>さん</div>
          <a >プロファイル</a>
    </div>
    <div class="icons">
        <div class="icon-item">
            <img src="{{ asset('img/ema.png')}}" alt="">
            <div class="text">絵馬</div>
        </div>
        <div class="icon-item">
            <img src="{{ asset('img/omikuji.png')}}" alt="">
            <div class="text">おみくじ</div>
        </div>
    </div>
    <div class="buy-coin">
        <div>
          <img src="{{ asset('img/coin.png')}}" alt="">
          <span>コイン購入</span>
        </div>
        <img src="{{ asset('img/right-icon.png')}}" alt="">
    </div>
</div>