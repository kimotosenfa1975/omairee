<x-app-layout>
    
    <x-dashboard-header></x-dashboard-header>
    <div class="main wrapper jisha-post">
        <x-profile></x-profile>
      <div class="main-content">
        <div class="public-title">
            掲載申請
        </div> 
        <div class="sub-section">
            <div class="input-text">
                <p class="left-text">名称</p>
                @if(isset($jisha))
                <p class="right-text">{{ $jisha->name}}</p>
                @else
                <p class="right-text"></p>
                @endif
               
            </div>
            <div class="input-text">
                <p class="left-text">ご担当者様</p>
                <p class="right-text">{{ $user->name }}</p>
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
            {{ Form::open(array('route' => 'mypage.public.send')) }}
                <div class="edit-text">
                    <p>メールアドレス</p>
                    <input type="text" name="mail" required>
                </div>
                <div class="edit-text">
                    <p>ご住所</p>
                    <div class="addr">
                        <input type="text" name="address" placeholder="5900802" required id="address"> 
                        <input type="button" class="get-addr" id="getAddr" value="住所取得">
                    </div>
                </div>
                <div class="edit-text">
                    <p>都道府県</p>
                    <input type="text" name="prefectures" required id="prefectures">
                </div>
                <div class="edit-text">
                    <p>市区町村</p>
                    <input type="text" name="municipalities" required id="municipalities">
                </div>
                <div class="edit-text">
                    <p>住所</p>
                    <input type="text" name="addr-detail" required id="addr-detail">
                </div>
                <div class="edit-text">
                    <p>建物名・部屋番号</p>
                    <input type="text" name="building" required id="building">
                </div>
                <div class="section">
                    {{Form::submit('申請');}}
                </div>
            {{ Form::close() }}
        </div>
      </div>
      <div class="menu sp" onclick="menuClose()"></div>
    </div>
    <x-footer></x-footer>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script>
        function getAddress() {
            AjaxZip3.zip2addr('address','','prefectures','municipalities','addr-detail');
        }
        document.getElementById("getAddr").addEventListener("click", getAddress);

    </script>
</x-app-layout>
