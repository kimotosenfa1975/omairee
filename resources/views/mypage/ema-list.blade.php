<x-app-layout>
    
    <x-dashboard-header></x-dashboard-header>
    
    <div class="main wrapper ema-list">
      <div class="profile pc">
         <div class="user-image">
             <img src="{{ asset('img/no-user-image.png')}}" alt="">
             <div class="user-name"><span>お参り 太郎</span>さん</div>
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
      <div class="main-content ema jisha-wrapper jisha-detail">
          <div class="bk-part"></div>
          <div class="jisha-detail-item">
            <img src="{{ asset('img/proved.png') }}" class="proved" alt="">
            <img src="{{ asset('img/jisha-item.png') }}" class="jisha-detailed-image" alt="">
            <a  class="jisha-name">omairee神社</a>
          </div>
          <p class="desc">omairee神社は国宝に指定され古代の建築様式を伝える四本殿をはじめ、
            住吉の象徴とされる反橋（太鼓橋）や多数の文化財、樹齢1000年を超える御神木など、悠久の歴史を感じる由緒深い神社です。</p>
          <div class="section">
            <a href="#ema-modal" class="red">絵馬を見に行く</a>
          </div>
          <div class="ema-lists">
            <div class="ema-image">
              <img src="{{ asset('img/gift1.png') }}" alt="">
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
            <div class="ema-image">
              <img src="{{ asset('img/gift1.png') }}" alt="">
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
            <div class="ema-image">
              <img src="{{ asset('img/gift1.png') }}" alt="">
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
            <div class="ema-image">
              <img src="{{ asset('img/gift1.png') }}" alt="">
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
            <div class="ema-image">
              <img src="{{ asset('img/gift1.png') }}" alt="">
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
            <div class="ema-image">
              <img src="{{ asset('img/gift1.png') }}" alt="">
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
            <div class="ema-image">
              <img src="{{ asset('img/gift1.png') }}" alt="">
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
            <div class="ema-image">
              <img src="{{ asset('img/gift1.png') }}" alt="">
              <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
            </div>
          </div>
          <div class="section gift-btn-group">
            <a  class="red">お参りする</a>
          </div>
      </div>
      <div class="menu sp" onclick="menuClose()"></div>
    </div>
    <div class="modal-container" id="ema-modal">
        <div class="modal" id="ema">
            <img src="{{ asset('img/gift1.png') }}" alt="">
            <a href="#m1-c" class="link-2"></a>
        </div>
    </div>
    <x-footer></x-footer>
    
</x-app-layout>
