<x-app-layout>
    
    <x-dashboard-header></x-dashboard-header>
    
    <div class="main wrapper">
      <x-profile></x-profile>
      <div class="main-content ema">
        {{Form::open(array('route' => 'mypage.ema-register'))}}
          <p class="ema-title">＼　お願い事・お礼を書こう　／</p>
          <div class="ema-image">
            <img src="{{ asset('img/gift1.png') }}" alt="">
            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
          </div>
          <div class="ema-warning">
            <img src="{{ asset('img/alert.png') }}" alt="">
            <p>実名の記載、住所等個人を特定できる情報は<br>一切記入しないでください。</p>
          </div>
          <textarea name="ema_text" id="ema-field" onkeyup="countChar(this)" rows="5"></textarea>
          <div class="character">あと<span id="charNum">100</span>文字/100文字</div>
          <div class="done">
            {{Form::submit('完了')}}
          </div>
          {{Form::close()}}
      </div>
      <div class="menu sp" onclick="menuClose()"></div>
    </div>

    <x-footer></x-footer>
    
</x-app-layout>
