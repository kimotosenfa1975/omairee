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
        <div class="section cat-section">
            <img src="{{ asset('img/cat.png')}}" alt="">
            <a href="{{ route('mypage.ema')}}">さっそく絵馬を書こう</a>
        </div>
        <div class="sub-section">
        <div class="section">
                <p class="red-title">基本情報</p>
                <div id="showInfo">
                    <div class="input-text">
                        <p class="left-text">氏名</p>
                        <p class="right-text">お参り 太郎</p>
                    </div>
                    <div class="input-text">
                        <p class="left-text">ID</p>
                        <p class="right-text">omairi</p>
                    </div>
                    <div class="input-text">
                        <p class="left-text">メールアドレス</p>
                        <p class="right-text">omairi@test.com</p>
                    </div>
                    <a onclick="onEditInfo()">編集</a>
                </div>
                <div id="editInfo" class="hide">
                    <div class="edit-text">
                        <p>氏名</p>
                        <input type="text" name="name" value="sdsd">
                    </div>
                    <div class="edit-text">
                        <p>ID</p>
                        <input type="text" name="name" value="omairi">
                    </div>
                    <div class="edit-text">
                        <p>メールアドレス</p>
                        <input type="text" name="name" value="omairi@test.com">
                    </div>
                   <div class="edit-button-group">
                      <a class="redo" onclick="redo()">戻る</a>
                      <a class="update" onclick="onUpdateInfo()">更新</a>
                   </div>
                </div>
                
            </div>
            <div class="section">
                <p class="red-title">パスワード</p>
                <div id="showPass">
                  <div class="input-text">
                      <p class="left-text">パスワード</p>
                      <p class="right-text">*********</p>
                  </div>
                  <a onclick="editPassword()">編集</a>
                </div>
                <div id="editPass" class="hide">
                  <div class="edit-text">
                      <p>パスワード</p>
                      <input type="text" name="name" placeholder="新しいパスワード">
                  </div>
                   <div class="edit-button-group">
                      <a class="redo" onclick="redoPass()">戻る</a>
                      <a class="update" onclick="onUpdateInfo()">更新</a>
                   </div>
                </div>
            </div>
            <div class="section">
                <p class="red-title">コイン購入<span>返金不可</span></p>
                <div class="input-text">
                    <p class="left-text">残りコイン数</p>
                    <p class="right-text">12,345</p>
                </div>
                <div class="radio-group">
                    <div>
                        <input type="radio" name="100" id="100">
                        <label for="100">100コイン　¥120</label>
                    </div>
                    <div>
                        <input type="radio" name="200" id="200">
                        <label for="200">200コイン　¥120</label>
                    </div>
                    <div>
                        <input type="radio" name="300" id="300">
                        <label for="300">300コイン　¥120</label>
                    </div>
                    <div>
                        <input type="radio" name="400" id="400">
                        <label for="400">400コイン　¥120</label>
                    </div>
                    <div>
                        <input type="radio" name="500" id="500">
                        <label for="500">500コイン　¥120</label>
                    </div>
                    <a >購入</a>
                </div>
            </div>
            <div class="section">
                <p class="red-title">ソーシャル連携</p>
                <div class="input-text">
                    <p class="left-text">Twitter</p>
                    <label class='toggle-label'>
                        <input type='checkbox'/>
                        <span class='back'>
                            <span class='toggle'></span>
                            <span class='label on'>ON</span>
                            <span class='label off'>OFF</span>  
                        </span>
                    </label>
                </div>
                <div class="input-text">
                    <p class="left-text">Facebook</p>
                    <label class='toggle-label'>
                        <input type='checkbox'/>
                        <span class='back'>
                            <span class='toggle'></span>
                            <span class='label on'>ON</span>
                            <span class='label off'>OFF</span>  
                        </span>
                    </label>
                </div>
                <div class="input-text">
                    <p class="left-text">LINE</p>
                    <label class='toggle-label'>
                        <input type='checkbox'/>
                        <span class='back'>
                            <span class='toggle'></span>
                            <span class='label on'>ON</span>
                            <span class='label off'>OFF</span>  
                        </span>
                    </label>
                </div>
                <a >編集</a>
            </div>
        </div>
        
      </div>
      <div class="menu sp" onclick="menuClose()"></div>
    </div>
    <x-footer></x-footer>
    
</x-app-layout>
