<x-app-layout>
    
    <x-dashboard-header></x-dashboard-header>
    
    <div class="main wrapper">
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
      <div class="main-content ema">
          <p class="ema-title">＼　お願い事・お礼を書こう　／</p>
          <div class="ema-image">
            <img src="{{ asset('img/gift1.png') }}" alt="">
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </div>
          <div class="ema-warning">
            <img src="{{ asset('img/alert.png') }}" alt="">
            <p>実名の記載、住所等個人を特定できる情報は<br>一切記入しないでください。</p>
          </div>
          <textarea id="ema-field" onkeyup="countChar(this)" rows="5"></textarea>
          <div id="charNum"></div>
          <div class="done">
            <a >完了</a>
          </div>
      </div>
      <div class="menu sp" onclick="menuClose()"></div>
    </div>

    <x-footer></x-footer>
    
</x-app-layout>
