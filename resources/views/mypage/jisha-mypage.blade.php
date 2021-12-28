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
        <div class="sub-section">
            <div class="section">
                <p class="red-title">基本情報</p>
                <div id="showInfo">
                    <div class="input-text">
                        <p class="left-text">氏名</p>
                        <p class="right-text">お参り 太郎</p>
                    </div>
                    <div class="input-text">
                        <p class="left-text">説明文</p>
                        <p class="right-text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
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
                        <p>説明文</p>
                        <textarea name="" id="">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</textarea>
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
                <p class="red-title">購入履歴</p>
                <p class="red-sub-title">絵馬</p>
                <div class="input-text">
                    <p class="left-text">1,000コイン</p>
                    <p class="right-text">15枚</p>
                </div>
                <div class="input-text">
                    <p class="left-text">3,000コイン</p>
                    <p class="right-text">15枚</p>
                </div>
                <div class="input-text">
                    <p class="left-text">5,000コイン</p>
                    <p class="right-text">15枚</p>
                </div>
                <div class="input-text">
                    <p class="left-text">10,000コイン</p>
                    <p class="right-text">15枚</p>
                </div>
                <p class="red-sub-title">お賽銭</p>
                <div class="input-text">
                    <p class="left-text">総額</p>
                    <p class="right-text">50,512,900コイン</p>
                </div>
                <p class="sub-description">1コイン1円として計算し、手数料10%を差し引いた金額を月末締め翌月10日にお振込み致します。</p>
            </div>
       
            <div class="section">
                <p class="red-title">お振込み先登録</p>
                <div id="showBank">
                    <div class="input-text">
                        <p class="left-text">口座名義</p>
                        <p class="right-text">口座名義</p>
                    </div>
                   
                    <div class="input-text">
                        <p class="left-text">金融機関名</p>
                        <p class="right-text">金融機関名</p>
                    </div>
                    <div class="input-text">
                        <p class="left-text">口座番号</p>
                        <p class="right-text">口座番号</p>
                    </div>
                    <div class="input-text">
                        <p class="left-text">支店名</p>
                        <p class="right-text">支店名</p>
                    </div>
                    <a onclick="onEditBank()">編集</a>
                </div>
                <div id="editBank" class="hide">
                    <div class="edit-text">
                        <p>口座名義</p>
                        <input type="text" name="name" value="口座名義">
                    </div>
                   
                    <div class="edit-text">
                        <p>金融機関名</p>
                        <input type="text" name="name" value="金融機関名">
                    </div>
                    <div class="edit-text">
                        <p>口座番号</p>
                        <input type="text" name="name" value="口座番号">
                    </div>
                    <div class="edit-text">
                        <p>支店名</p>
                        <input type="text" name="name" value="支店名">
                    </div>
                   <div class="edit-button-group">
                      <a class="redo" onclick="redoBank()">戻る</a>
                      <a class="update" onclick="onUpdateBank()">更新</a>
                   </div>
                </div>
            </div>
        </div>
        
      </div>
      <div class="menu sp" onclick="menuClose()"></div>
    </div>
    <x-footer></x-footer>
    
</x-app-layout>
