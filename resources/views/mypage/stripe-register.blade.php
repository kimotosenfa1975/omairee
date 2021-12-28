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
            決済情報
          </div> 
          <div class="sub-section">
            <div class="edit-text">
                <p>カード名義</p>
                <input type="text" name="name" value="Name on credit card">
            </div>
            <div class="edit-text">
                <p>カード番号</p>
                <input type="text" name="name" value="0000-0000-0000-0000">
            </div>
            <div class="divide">
              <div class="edit-text">
                  <p>有効期限</p>
                  <input type="text" name="name" value="MM/YY">
              </div>
              <div class="edit-text">
                <p>CVC</p>
                <input type="text" name="name" value="CVC">
              </div>
            </div>
            <div class="checkbox">
              <input type="checkbox" id="save">
              <label for="save">この支払い方法を保存</label>
            </div>
            <div class="section">
              <a >新しいカードを登録</a>
            </div>
          </div>  
      </div>
      <div class="menu sp" onclick="menuClose()"></div>
    </div>
    <x-footer></x-footer>
    
</x-app-layout>
