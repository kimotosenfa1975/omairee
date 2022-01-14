<x-app-layout>
    
    <x-dashboard-header></x-dashboard-header>
    
    <div class="main wrapper ema-list">
      <x-profile></x-profile>
      <div class="main-content ema jisha-wrapper jisha-detail">
          <div class="bk-part"></div>
          <div class="jisha-detail-item">
            @if($jisha->checked)
              <img src="{{ asset('img/proved.png') }}" class="proved" alt="">
            @endif
            <img src="{{ asset('img/jisha-item.png') }}" class="jisha-detailed-image" alt="">
            <a  class="jisha-name">{{ $jisha->name}}</a>
          </div>
          <p class="desc">{{ $jisha->description}}</p>
          <div class="section">
            <a href="#ema-modal" class="red">絵馬を見に行く</a>
          </div>
          <div class="ema-lists">
            @foreach (\Auth::user()->emas as $ema)
              <div class="ema-image">
                <img src="{{ asset('img/gift1.png') }}" alt="">
                <p>{{ $ema->text}}</p>
              </div>
            @endforeach
          </div>
          <div class="section gift-btn-group">
            <a href="#ema-modal" class="red">お参りする</a>
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
