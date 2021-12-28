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
      <div class="main-content">
        <div class="avatar-section">
            <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload"></label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview">
                    </div>
                </div>
            </div>
        </div>
        <div class="section omikuji-section">
            <div class="ema-image">
                <img src="{{ asset('img/gift2.png') }}" alt="">
            </div>
            <a href="#omikuji-modal" class="ema-read">おみくじを引く</a>
            <div class="ema-warning">
                <p>※100コイン</p>
            </div>
        </div>
        <div class="sub-section before-result">
            <h4 class="title">【前回結果】</h4>
            <div class="result-item">
                <p>2022年1月1日</p>
                <p>大吉</p>
            </div>
            <div class="result-item">
                <p>2022年1月1日</p>
                <p>大吉</p>
            </div>
            <div class="result-item">
                <p>2022年1月3日</p>
                <p>大吉</p>
            </div>
        </div>
      </div>
      <div class="menu sp" onclick="menuClose()"></div>
    </div>

    <div class="modal-container" id="omikuji-modal">
        <div class="modal">
            <img src="{{ asset('img/logo.png') }}" class="logo" alt="">
            <img src="{{ asset('img/gift2.png') }}" class="omikuji" alt="" onclick="startOmikuji()">
            <p class="sub-desc">心を鎮め<span>てスマートフォンを振る</span>か、<br><span>おみくじをタッチ</span>してください。</p>
            <a href="#m1-c" class="link-2"></a>
        </div>
    </div>
    <x-footer></x-footer>
    
</x-app-layout>
