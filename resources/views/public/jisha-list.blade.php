<x-guest-layout>
    
    <x-header></x-header>
    <div class="main">
        <div class="jisha-top">
          <p>寺社一覧</p>
        </div>
        <div class="jisha-items jisha-wrapper">
          @foreach ($jishas as $jisha)
            <div class="jisha-item">
              @if($jisha->checked)
                <img src="{{ asset('img/proved.png') }}" class="proved" alt="">
              @endif
              <img src="{{ asset('img/jisha-item.png') }}" alt="">
              @if($jisha->name)
              <a href="{{ route('pub.jisha-detail',$jisha)}}" class="jisha-name">{{ $jisha->name }}</a>
              @endif
            </div>
          @endforeach
        </div>
    </div>
    <x-footer></x-footer>
    
</x-guest-layout>
