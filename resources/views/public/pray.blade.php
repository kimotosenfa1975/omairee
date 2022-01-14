<x-guest-layout>
    
    <x-header></x-header>
    <div class="main">
        <div class="jisha-wrapper jisha-detail pray">
          <div class="section gift-btn-group">
            <img src="{{asset('img/pray.png')}}" alt="" class="prayImg">
            <div class="sub-des">＼　絵馬をシェアしよう！　／</div>
            <div class="social-modal-item">
                <img src="{{asset('img/line.png')}}" alt="">
                <img src="{{asset('img/twitter.png')}}" alt="">
                <img src="{{asset('img/facebook.png')}}" alt="">
            </div>
            <a href="#coin-modal" class="red">コインを購入する</a>
            <a href="{{ route('top') }}" class="outline-red" >ホームへ</a>
          </div>
        </div>
    </div>
    <div class="modal-container jisha-detail" id="coin-modal">
        <div class="modal">
            <img src="{{ asset('img/coin-gift.png') }}" class="omikuji" alt="">
            <a href="{{ route('register')}}" class="red">会員登録してコインを購入</a>
            <a href="{{ route('login')}}" class="outline-red">ログインしてコインを購入</a>
            <a href="#m1-c" class="link-2"></a>
        </div>
    </div>
    <x-footer></x-footer>
    
</x-guest-layout>
