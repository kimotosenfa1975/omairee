<div class="header">
  <div class="wrapper header-area">
    <div class="logo">
      <a href="{{ route('mypage.mypage')}}"><img src="{{ asset('img/logo.png')}}" alt=""></a>
      <div>
        <a href="{{ route('mypage.mypage')}}">
          <img src="{{ asset('img/coin.png')}}" alt="">
          <span>1,000</span>
        </a>
        <a href="{{route('mypage.mypage')}}" class="sp mypage-sp">マイページ</a>
        <div class="menu-btn sp" onClick="menuClick(this)">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <div class="flex-end">
      <ul class="menu-list pc">
        <li class="menu-item"><a href="{{ route('pub.jisha')}}">寺社一覧</a></li>
        <li class="menu-item"><a href="{{ route('pub.contact')}}">お知らせ</a></li>
        <li class="menu-item"><a href="{{ route('mypage.mypage')}}">マイページ</a></li>
      </ul>
      <div class="#menu">
        <ul class="menu sp">
          <li class="menu-sp-item"><a href="{{ route('mypage.mypage')}}"><img src="{{ asset('img/white-user.png')}}" alt="">マイページ</a></li>
          <li class="menu-sp-item"><a href="{{ route('pub.jisha')}}"><img src="{{ asset('img/white-jisha.png')}}" alt="">寺社一覧</a></li>
          <li class="menu-sp-item"><a href="{{ route('pub.contact')}}"><img src="{{ asset('img/white-contact.png')}}" alt="">お問い合わせ</a></li>
          <li class="menu-sp-item"><a href="{{ route('mypage.omikuji')}}"><img src="{{ asset('img/white-omikuji.png')}}" alt="">おみくじを引く</a></li>
          <li class="menu-sp-item">
            <form method="POST" action="{{ route('logout') }}" class="menu-logout-form">
              @csrf
              
              <x-menu-link :href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
                  ログアウト
              </x-menu-link>
            </form>
          </li>
        </ul>
      </div>
      <div class="auth pc">
        <form method="POST" action="{{ route('logout') }}" class="menu-logout-form">
          @csrf
          
          <x-dropdown-link :href="route('logout')"
                  onclick="event.preventDefault();
                              this.closest('form').submit();">
              ログアウト
          </x-dropdown-link>
        </form>
      </div>
    </div>
  </div>
  </div>
</div>