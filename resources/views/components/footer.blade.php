<div class="footer">
    <div class="wrapper footer-area">
      <div class="footer-logo"><img src="{{ asset('img/logo.png')}}" alt=""></div>
      <div class="social-icons">
        <a  class="social-icon"><img src="{{ asset('img/twitter.png')}}" alt=""></a>
        <a  class="social-icon"><img src="{{ asset('img/facebook.png')}}" alt=""></a>
        <a  class="social-icon"><img src="{{ asset('img/instagram.png')}}" alt=""></a>
      </div>
      <ul class="footer-list">
        <li class="footer-item"><a href="{{ route('terms')}}">利用規約</a></li>
        <li class="footer-item"><a href="{{ route('transaction')}}">特定商取引法の表示</a></li>
        <li class="footer-item"><a href="{{ route('terms')}}">会社情報</a></li>
        <li class="footer-item"><a href="{{ route('privacy')}}">プライバシーポリシー</a></li>
        <li class="footer-item"><a href="{{ route('pub.contact')}}">お問い合わせ</a></li>
      </ul>
      <ul class="icon-list sp">
          <li class="icon-item">
            <a href="{{ route('mypage.ema')}}"> 
              <img src="{{ asset('img/ema.png') }}" alt="">
              <p>絵馬</p>
            </a>
          </li>
          <li class="icon-item">
            <a href="{{ route('pub.jisha')}}"> 
              <img src="{{ asset('img/jisha.png') }}" alt="">
              <p>寺社一覧</p>
            </a>
          </li>
          <li class="icon-item">
            <a href="{{ route('pub.contact')}}"> 
              <img src="{{ asset('img/alarm.png') }}" alt="">
              <p>お知らせ</p>
            </a>
          </li>
          <li class="icon-item">
            <a href="{{ route('pub.jisha-detail')}}"> 
              <img src="{{ asset('img/coin.png') }}" alt="">
              <p>コイン購入</p>
            </a>
          </li>
          <li class="icon-item">
            <a href="{{ route('mypage.omikuji')}}"> 
              <img src="{{ asset('img/omikuji.png') }}" alt="">
              <p>おみくじ</p>
            </a>
          </li>
      </ul>
    </div>
</div>