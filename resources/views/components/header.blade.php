<div class="header">
  <div class="wrapper header-area">
      <div class="logo"><a href="{{ route('top')}}"><img src="{{ asset('img/logo.png')}}" alt=""></a></div>
      <div class="flex-end">
        <ul class="menu-list pc">
          <li class="menu-item"><a href="{{ route('mypage.ema')}}">絵馬</a></li>
          <li class="menu-item"><a href="{{ route('pub.jisha')}}">寺社一覧</a></li>
          <li class="menu-item"><a href="{{ route('pub.contact')}}">お知らせ</a></li>
          <li class="menu-item"><a href="{{ route('pub.jisha-detail')}}">コイン購入</a></li>
          <li class="menu-item"><a href="{{ route('mypage.omikuji')}}">おみくじ</a></li>
        </ul>
        <div class="auth">
          <a href="{{ route('login')}}" class="login">ログイン</a>
          <a href="{{ route('register')}}" class="register">会員登録</a>
        </div>
      </div>
  </div>
</div>