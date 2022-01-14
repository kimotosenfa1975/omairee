<x-app-layout>
    
    <x-dashboard-header></x-dashboard-header>
  
    <div class="main wrapper">
        <x-profile></x-profile>
      <div class="main-content">
        <x-avatar></x-avatar>
        <div class="section omikuji-section">
            <div class="ema-image">
                <img src="{{ asset('img/gift2.png') }}" alt="">
            </div>
            <a onclick="welcome()" class="ema-read">おみくじを引く</a>
            <div class="ema-warning">
                <p>※100コイン</p>
            </div>
        </div>
        <div class="sub-section before-result">
            <h4 class="title">【前回結果】</h4>
            @foreach ($omikujis as $omikuji)
            <div class="result-item">
                <p>{{ $omikuji->updated_at->format('Y') }}年{{ $omikuji->updated_at->format('m') }}月{{ $omikuji->updated_at->format('d ') }}日</p>
                <p>{{ $omikuji->omikuji->fortune }}</p>
            </div>
            @endforeach
        </div>
      </div>
      <div class="menu sp" onclick="menuClose()"></div>
    </div>

    <div class="modal-container" id="welcome">
        <div class="modal">
            <img src="{{ asset('img/logo.png') }}" class="logo" alt="">
            <img src="{{ asset('img/gift2.png') }}" class="omikuji" alt="" onclick="startOmikuji()">
            <p class="sub-desc">心を鎮め<span>てスマートフォンを振る</span>か、<br><span>おみくじをタッチ</span>してください。</p>
            <a onclick="closeWelcome()" class="link-2"></a>
        </div>
    </div>

    <div class="modal-container" id="start">
        <div class="modal">
            <img src="{{ asset('img/logo.png') }}" class="logo" alt="">
            <img src="{{ asset('img/omikuji.gif') }}" class="omikuji">
            <a href="#m1-c" class="link-2"></a>
        </div>
    </div>

    <div class="modal-container" id="end">
        
    </div>
    <x-footer></x-footer>
    
</x-app-layout>
