<x-app-layout>
    
    <x-dashboard-header></x-dashboard-header>

    <div class="main wrapper">
      <x-profile></x-profile>
      <div class="main-content">
        <x-avatar></x-avatar>
        <div class="section cat-section">
            <div class="ema-image">
                <img src="{{ asset('img/gift1.png') }}" alt="">
                <p>{{\Auth::user()->latestEma->text }}</p>
            </div>
            <a href="{{route('mypage.ema-list')}}" class="ema-read">絵馬を見に行く</a>
            @if(!isset(\Auth::user()->latestEma->text))
                <div class="ema-warning">
                    <img src="{{ asset('img/alert.png') }}" alt="">
                    <p>未記入の絵馬があります。</p>
                </div>
            @endif
        </div>
        <div class="sub-section">
        <div class="section">
                <p class="red-title">基本情報</p>
                <div id="showInfo">
                    <div class="input-text">
                        <p class="left-text">氏名</p>
                        <p class="right-text">{{ \Auth::user()->name}}</p>
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
                    <form action="{{ route('mypage.updateInfo') }}" id="updateInfo" method="POST" enctype="multipart/form-data" style="width:100%">
                        @csrf
                        <div class="edit-text">
                            <p>氏名</p>
                            <input type="text" name="name" value="{{ \Auth::user()->name}}">
                        </div>
                        <div class="edit-text">
                            <p>ID</p>
                            <input type="text" name="userId" value="{{ \Auth::user()->userId}}">
                        </div>
                        <div class="edit-text">
                            <p>メールアドレス</p>
                            <input type="email" name="email" value="{{ \Auth::user()->email}}">
                        </div>
                        <div class="edit-button-group">
                            <a class="redo" onclick="redo()">戻る</a>
                            <a type="submit" class="update" onclick="onUpdateInfo()">更新</a>
                        </div>
                    </form>
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
                    <form action="{{ route('mypage.updatePass') }}" id="updatePass" method="POST" enctype="multipart/form-data" style="width:100%">
                        @csrf
                        <div class="edit-text">
                            <p>パスワード</p>
                            <input type="text" name="password" placeholder="新しいパスワード">
                        </div>
                        <div class="edit-button-group">
                            <a class="redo" onclick="redoPass()">戻る</a>
                            <a class="update" onclick="onUpdatePass()">更新</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="section">
                <p class="red-title">コイン購入<span>返金不可</span></p>
                <div class="input-text">
                    <p class="left-text">残りコイン数</p>
                    <p class="right-text">{{ isset(\Auth::user()->coin->remained) ? \Auth::user()->coin->remained : 0}}</p>
                </div>
                <div class="radio-group">
                    <div>
                        <input type="radio" name="cost" id="100" value="100" checked>
                        <label for="100">100コイン　¥100</label>
                    </div>
                    <div>
                        <input type="radio" name="cost" id="200" value="200">
                        <label for="200">200コイン　¥200</label>
                    </div>
                    <div>
                        <input type="radio" name="cost" id="300" value="300">
                        <label for="300">300コイン　¥300</label>
                    </div>
                    <div>
                        <input type="radio" name="cost" id="400" value="400">
                        <label for="400">400コイン　¥400</label>
                    </div>
                    <div>
                        <input type="radio" name="cost" id="500" value="500">
                        <label for="500">500コイン　¥500</label>
                    </div>
                    <a href="#coin-modal" onclick="buyCoin()">購入</a>
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
            </div>
        </div>
        
      </div>
      <div class="menu sp" onclick="menuClose()"></div>

      <div class="modal-container jisha-detail" id="coin-modal">
            <div class="modal">
                {{ Form::open(array('route' => 'mypage.buyCoin','class'=>'coin_modal','id'=>'payment-form','data-locale'=>'auto','data-stripe-publishable-key'=>env('STRIPE_KEY'))) }}
                    <div class="refereceText">※コインのご購入は「110コイン」からです。</div>
                    {{Form::select('coinCost', array(
                        '100' => '100コイン　￥100',
                        '200' => '200コイン　￥200',
                        '300' => '300コイン　￥300',
                        '400' => '400コイン　￥400',
                        '500' => '500コイン　￥500',
                    ),'',['id'=>'coinCost']);}}
                    @if(!isset(\Auth::user()->id))
                        <div class="form-field">
                            {{Form::label('email','メールアドレス')}}
                            {{Form::text('email')}}
                        </div>
                        <div class="form-field">
                            {{Form::label('password','パスワード')}}
                            {{Form::text('password','',array('placeholder'=>'パスワード'))}}
                        </div>
                    @endif
                    @if(isset(\Auth::user()->stripe_id))
                        <div class="payTitle">決済情報</div>
                        <div class="savedCard">
                        <div class="left">
                            <input type="radio" name="savedCard" id="savedCard">
                            <div class="card-content">
                            <div class="cardType">JCB</div>
                            <div class="card-detail">
                                <div class="card-name">{{\Auth::user()->cardName}}義</div>
                                <div class="expired-time">有効期限{{\Auth::user()->expiredMonth}}/{{\Auth::user()->expiredYear}}</div>
                            </div>
                            </div>
                        </div>
                        <div class="last-four">***{{\Auth::user()->pm_last_four}}</div>
                        </div>
                    @endif
                    <div class="payTitle">決済情報</div>
                    <div class="form-field">
                        {{Form::label('cardName','カード名義')}}
                        {{Form::text('cardName','',array('placeholder'=>'Name on credit card'))}}
                    </div>
                    <div class="form-field">
                        {{Form::label('cardnumber','カード番号')}}
                        {{Form::text('cardnumber','',array('placeholder'=>'0000-0000-0000-0000','class'=>'card-number'))}}
                    </div>
                    <div class="form-field expiredTime">
                        <div class="sub-field">
                            {{Form::label('dateTime','有効期限')}}
                            {{Form::text('dateTime','',array('placeholder'=>'MM/YY','class'=>'card-expiry-date'))}}
                        </div>
                        <div class="sub-field">
                            {{Form::label('cvc','CVC')}}
                            {{Form::text('cvc','',array('placeholder'=>'CVC','class'=>'card-cvc'))}}
                        </div>
                    </div>
                    <div class="form-field agree">
                        {{Form::checkbox('registerAgree','','',array('id'=>'registerAgree'))}}
                        {{Form::label('registerAgree','会員登録に同意')}}
                    </div>
                    <span>※コインの購入には会員登録が必要です</span>
                    <div class="form-field agree">
                        {{Form::checkbox('termsAgree','','',array('id'=>'termsAgree'))}}
                        {{Form::label('termsAgree','利用規約に同意')}}
                    </div>
                    <p class="error">利用規約と会員登録に同意してください。</p>
                    {{Form::submit("購入")}}
                {{ Form::close() }}
                <a href="#m1-c" class="link-2"></a>
                <div class="no-exchange"><span>返金不可</span></div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
    
</x-app-layout>
