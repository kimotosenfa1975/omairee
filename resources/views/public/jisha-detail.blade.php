<x-guest-layout>
    
    <x-header></x-header>
    <div class="main">
        <div class="jisha-wrapper jisha-detail">
          <div class="bk-part"></div>
          <div class="jisha-detail-item">
            <img src="{{ asset('img/proved.png') }}" class="proved" alt="">
            <img src="{{ asset('img/jisha-item.png') }}" class="jisha-detailed-image" alt="">
            <a  class="jisha-name">omairee神社</a>
          </div>
          <p class="desc">omairee神社は国宝に指定され古代の建築様式を伝える四本殿をはじめ、
            住吉の象徴とされる反橋（太鼓橋）や多数の文化財、樹齢1000年を超える御神木など、悠久の歴史を感じる由緒深い神社です。</p>
          <div class="section">
            <a href="{{route('mypage.ema-list')}}" class="red">絵馬を見に行く</a>
          </div>
          <div class="gift-items section">
            <div class="gift-item">
              <p class="title">絵馬</p>
              <img src="{{ asset('img/sm-gift.png')}}" alt="">
              <p class="sub-title">※確定後に絵馬に文字を記載いただけます。</p>
                {{ Form::number('ema', '0');}}
            </div>
            <div class="gift-item">
              <p class="title">お賽銭</p>
              <img src="{{ asset('img/box-gift.png')}}" alt="">
              {{ Form::number('saisen', '0');}}
              <p class="sub-title">残りすべて</p>
            </div>
          </div>
          <div class="section gift-btn-group">
            <a href="#coin-modal" class="red">コインを購入する</a>
            <a href="#purchase-modal" class="outline-red" onclick="">お参りする</a>
          </div>
          <div class="page-sub-title">利用規約、プライバシーポリシーに同意の上ご利用ください</div>
        </div>
    </div>

    <div class="modal-container jisha-detail" id="coin-modal">
        <div class="modal">
            <img src="{{ asset('img/coin-gift.png') }}" class="omikuji" alt="">
            <a href="{{ route('register')}}" class="red">会員登録してコインを購入</a>
            <a href="{{ route('login')}}" class="outline-red">ログインしてコインを購入</a>            <a href="#m1-c" class="link-2"></a>
        </div>
    </div>

    <div class="modal-container jisha-detail" id="purchase-modal">
        <div class="modal">
            <p>＼　お参り中・・・　／</p>
            <img src="{{ asset('img/cat-icons.png') }}" alt="">
            <a href="#m1-c" class="link-2"></a>
        </div>
    </div>
    <x-footer></x-footer>
    
</x-guest-layout>
