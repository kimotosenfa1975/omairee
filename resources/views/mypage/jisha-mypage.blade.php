<x-app-layout>
    
    <x-dashboard-header></x-dashboard-header>
    <div class="main wrapper">
        <x-jishaprofile></x-jishaprofile>
      <div class="main-content">
        <x-avatar></x-avatar>
        <div class="sub-section">
            <div class="section">
                <p class="red-title">基本情報</p>
                <div id="showInfo">
                    <div class="input-text">
                        <p class="left-text">氏名</p>
                        <p class="right-text">{{ \Auth::user()->name}}</p>
                    </div>
                    <div class="input-text">
                        <p class="left-text">説明文</p>
                        @if(isset($jisha))
                        <p class="right-text">{{ $jisha->description}}</p>
                        @else
                        <p class="right-text"></p>
                        @endif
                    </div>
                    <div class="input-text">
                        <p class="left-text">ID</p>
                        <p class="right-text">{{ \Auth::user()->userId}}</p>
                    </div>
                    <div class="input-text">
                        <p class="left-text">メールアドレス</p>
                        <p class="right-text">{{ \Auth::user()->email}}</p>
                    </div>
                    <a onclick="onEditInfo()">編集</a>
                </div>
                <div id="editInfo" class="hide">
                    <form action="{{ route('mypage.updateJishaInfo') }}" id="updateJisha" method="POST" enctype="multipart/form-data" style="width:100%">
                        @csrf
                        <div class="edit-text">
                            <p>氏名</p>
                            <input type="text" name="name" value="{{ \Auth::user()->name}}">
                        </div>
                        <div class="edit-text">
                            <p>説明文</p>
                            @if(isset($jisha))
                            <textarea name="description" id="">{{ $jisha->description}}</textarea>
                            @else
                            <textarea name="description" id=""></textarea>
                            @endif
                            
                        </div>
                        <div class="edit-text">
                            <p>ID</p>
                            <input type="text" name="userId" value="{{ \Auth::user()->userId}}">
                        </div>
                        <div class="edit-text">
                            <p>メールアドレス</p>
                            <input type="text" name="email" value="{{ \Auth::user()->email}}">
                        </div>
                        <div class="edit-button-group">
                            <a class="redo" onclick="redo()">戻る</a>
                            <a class="update" onclick="onUpdateJishaInfo()">更新</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="section">
                <p class="red-title">購入履歴</p>
                <p class="red-sub-title">絵馬</p>
                @if(isset($jishaEmas))
                    @foreach ($jishaEmas as $histroy)
                        <div class="input-text">
                            <p class="left-text">{{ $histroy->ema}}コイン</p>
                            <p class="right-text">{{ $histroy->ema_count }}枚</p>
                        </div>
                    @endforeach
                @endif
                <p class="red-sub-title">お賽銭</p>
                @if(isset($jishaSaisens))
                    @foreach ($jishaSaisens as $histroy)
                        <div class="input-text">
                            <p class="left-text">{{ $histroy->saisen}}コイン</p>
                            <p class="right-text">{{ $histroy->saisen_count }}枚</p>
                        </div>
                    @endforeach
                @endif
                <div class="input-text">
                    <p class="left-text">総額</p>
                    @if(isset($total))
                    <p class="right-text">{{ $total }}コイン</p>
                    @else
                    <p class="right-text">0コイン</p>
                    @endif
                </div>
                <p class="sub-description">1コイン1円として計算し、手数料10%を差し引いた金額を月末締め翌月10日にお振込み致します。</p>
            </div>
       
            <div class="section">
                <p class="red-title">お振込み先登録</p>
                <div id="showBank">
                    <div class="input-text">
                        <p class="left-text">口座名義</p>
                        @if(isset($jisha))
                        <p class="right-text">{{ $jisha->bankName}}</p>
                        @else
                        <p class="right-text"></p>
                        @endif
                    </div>
                   
                    <div class="input-text">
                        <p class="left-text">金融機関名</p>
                        @if(isset($jisha))
                        <p class="right-text">{{ $jisha->financialName}}</p>
                        @else
                        <p class="right-text"></p>
                        @endif
                    </div>
                    <div class="input-text">
                        <p class="left-text">口座番号</p>
                        @if(isset($jisha))
                        <p class="right-text">{{ $jisha->accountNumber}}</p>
                        @else
                        <p class="right-text"></p>
                        @endif
                        
                    </div>
                    <div class="input-text">
                        <p class="left-text">支店名</p>
                        @if(isset($jisha))
                        <p class="right-text">{{ $jisha->branch}}</p>
                        @else
                        <p class="right-text"></p>
                        @endif
                        
                    </div>
                    <a onclick="onEditBank()">編集</a>
                </div>
                <div id="editBank" class="hide">
                    <form action="{{ route('mypage.updateJishaBank') }}" id="updateBank" method="POST" enctype="multipart/form-data" style="width:100%">
                        @csrf
                        <div class="edit-text">
                            <p>口座名義</p>
                            @if(isset($jisha))
                            <input type="text" name="bankName" value="{{ $jisha->bankName}}">
                            @else
                            <input type="text" name="bankName" value="">
                            @endif
                            
                        </div>
                    
                        <div class="edit-text">
                            <p>金融機関名</p>
                            @if(isset($jisha))
                            <input type="text" name="financialName" value="{{ $jisha->financialName}}">
                            @else
                            <input type="text" name="financialName" value="">
                            @endif
                            
                        </div>
                        <div class="edit-text">
                            <p>口座番号</p>
                            @if(isset($jisha))
                            <input type="text" name="accountNumber" value="{{ $jisha->accountNumber}}">
                            @else
                            <input type="text" name="accountNumber" value="">
                            @endif
                            
                        </div>
                        <div class="edit-text">
                            <p>支店名</p>
                            @if(isset($jisha))
                            <input type="text" name="branch" value="{{ $jisha->branch}}">
                            @else
                            <input type="text" name="branch" value="">
                            @endif
                            
                        </div>
                        <div class="edit-button-group">
                            <a class="redo" onclick="redoBank()">戻る</a>
                            <a class="update" onclick="onUpdateBank()">更新</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
      </div>
      <div class="menu sp" onclick="menuClose()"></div>
    </div>
    <x-footer></x-footer>
    
</x-app-layout>
