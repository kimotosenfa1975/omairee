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
        <div class="public-title">
            掲載申請
        </div> 
        <div class="sub-section">
            <div class="input-text">
                <p class="left-text">名称</p>
                <p class="right-text">テスト大社</p>
            </div>
            <div class="input-text">
                <p class="left-text">ご担当者様</p>
                <p class="right-text">お参り 太郎</p>
            </div>
            <div class="input-text">
                <p class="left-text">法人名</p>
                <p class="right-text">宗教法人 omairee taisha</p>
            </div>
            <div class="input-text">
                <p class="left-text">法人番号</p>
                <p class="right-text">111222333</p>
            </div>
            <div class="input-text">
                <p class="left-text">お電話番号</p>
                <p class="right-text">111222333</p>
            </div>
            <div class="edit-text">
                <p>ご住所</p>
                <div class="addr">
                    <input type="text" name="name" placeholder="5900802">
                    <input type="button" class="get-addr" value="住所取得">
                </div>
            </div>
            <div class="edit-text">
                <p>都道府県</p>
                <input type="text" name="name">
            </div>
            <div class="edit-text">
                <p>市区町村</p>
                <input type="text" name="name">
            </div>
            <div class="edit-text">
                <p>住所</p>
                <input type="text" name="name">
            </div>
            <div class="edit-text">
                <p>建物名・部屋番号</p>
                <input type="text" name="name">
            </div>
            <div class="section">
                <a >申請</a>
            </div>
        </div>
      </div>
      <div class="menu sp" onclick="menuClose()"></div>
    </div>
    <x-footer></x-footer>
    
</x-app-layout>
