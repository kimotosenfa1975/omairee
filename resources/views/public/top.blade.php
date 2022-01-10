<x-guest-layout>
    
    <x-header></x-header>
    <div class="main top-main-vusual">
      <div class="section wrapper">
        <img src="{{ asset('img/pub-main.png')}}" alt="">
        <img src="{{ asset('img/pub-left.png')}}" class="left-icon" alt="">
        <img src="{{ asset('img/pub-right.png')}}" class="right-icon" alt="">
      </div>
    </div>
    <div class="section slide wrapper">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="{{ asset('img/slide-image.png')}}" alt="">
            <p>風祈宮橋</p>
          </div>
          <div class="swiper-slide">
            <img src="{{ asset('img/slide-image.png')}}" alt="">
            <p>風祈宮橋</p>
          </div>
          <div class="swiper-slide">
            <img src="{{ asset('img/slide-image.png')}}" alt="">
            <p>風祈宮橋</p>
          </div>
          <div class="swiper-slide">
            <img src="{{ asset('img/slide-image.png')}}" alt="">
            <p>風祈宮橋</p>
          </div>
          <div class="swiper-slide">
            <img src="{{ asset('img/slide-image.png')}}" alt="">
            <p>風祈宮橋</p>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <div class="section newyear">
        @if ($newyear)
          <p class="title">＼　2022年まであと　／</p>
          <div class="remain-time">
            <img src="{{ asset('img/alarm-snooze.png')}}" alt="">
            <p>{{ $diffDays }}日 {{ $diffInHours }}時間 {{ $diffInMinutes }}分 {{ $diffInSeconds }}秒</p>
          </div>
          <div class="pub-cats">
            <img src="{{ asset('img/pub-cats.png')}}" alt="">
            <p>omaireeは全国の神社・お寺へ<br>オンラインでお参りできる</p>
          </div>
        @else
        <p class="title">＼　明けましておめでとうございます　／</p>
          <div class="remain-time">
            <img src="{{ asset('img/birthday-cake.png')}}" alt="" width="40">
            <p style="margin-left:20px;margin-right:20px;">謹賀新年</p>
            <img src="{{ asset('img/birthday-cake.png')}}" alt="" width="40">
          </div>
          <div class="pub-cats">
            <img src="{{ asset('img/pub-cats.png')}}" alt="">
            <p>omaireeは全国の神社・お寺へ<br>オンラインでお参りできる</p>
          </div>
        @endif
    </div>
    <div class="section omairee">
      <h3>omaireeってなに？</h3>
      <div class="item1">
        <img src="{{ asset('img/pub-main-item1.png')}}" alt="">
        <p>全国の神社・お寺に<br>オンラインでお参りができる<br>サービスです。</p>
      </div>
      <div class="item2">
        <div>
          <div class="check-lists">
            <div class="check-item">
              <img src="{{ asset('img/check.png')}}" alt="">
              <p>遠方で行けない方</p>
            </div>
            <div class="check-item">
              <img src="{{ asset('img/check.png')}}" alt="">
              <p>順番まで待てない方</p>
            </div>
            <div class="check-item">
              <img src="{{ asset('img/check.png')}}" alt="">
              <p>混雑を避けたい方</p>
            </div>
          </div>
          <p>omaireeならオンラインで完結</p>
        </div>
        <img src="{{ asset('img/pub-main-item2.png')}}" alt="">
      </div>
      <div class="item1">
        <img src="{{ asset('img/pub-main-item3.png')}}" alt="">
        <p>絵馬の投稿やお賽銭も可能</p>
      </div>
    </div>
    <div class="section pub-footer">
      <img src="{{ asset('img/pub-main-cats.png')}}" alt="">
      <a href="{{ route('pub.jisha')}}">さっそくお参りしよう</a>
    </div>
    <x-footer></x-footer>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            spaceBetween: 30,
            keyboard: true,
            mousewheel: true,
            scrollbar: false,
            navigation: true,
            centeredSlides: true,
            loop: true,
            autoplay: {
              delay: 3000,
              disableOnInteraction: true,
            },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            breakpoints: {
              550: {
                slidesPerView: 2,
                spaceBetween: 40,
              },
              700: {
                slidesPerView: 3,
                spaceBetween:50,
              }
            },
        });
  </script>
</x-guest-layout>

    
