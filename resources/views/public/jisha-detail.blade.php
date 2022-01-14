<x-guest-layout>
    
    <x-header></x-header>
    <div class="main">
        <div class="jisha-wrapper jisha-detail">
          <div class="bk-part"></div>
          <div class="jisha-detail-item">
            @if($jisha->checked)
              <img src="{{ asset('img/proved.png') }}" class="proved" alt="">
            @endif
            <img src="{{ asset('img/jisha-item.png') }}" class="jisha-detailed-image" alt="">
            <a  class="jisha-name">{{ $jisha->name }}</a>
          </div>
          <p class="desc">{{ $jisha->description}}</p>
          <div class="section">
            <a href="{{route('mypage.ema-list')}}" class="red">絵馬を見に行く</a>
          </div>
          <div class="gift-items section">
            <form action="{{ route('pub.toPray') }}" id="toPray" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $jisha->id}}" name="jishaId">
              <div class="gift-item">
                <p class="title">絵馬</p>
                <img src="{{ asset('img/sm-gift.png')}}" alt="">
                <p class="sub-title">※確定後に絵馬に文字を記載いただけます。</p>
                  {{ Form::number('ema', '0');}}
              </div>
              <div class="gift-item">
                <p class="title">お賽銭</p>
                <img src="{{ asset('img/box-gift.png')}}" alt="">
                {{ Form::number('saisen', '0');}}
                <p class="sub-title">残りすべて</p>
              </div>
            </form>
          </div>
          <div class="section gift-btn-group">
            <a href="#coin-modal" class="outline-red">コインを購入する</a>
            <a href="#purchase-modal" class="red" onclick="toPray()">お参りする</a>
          </div>
          <div class="page-sub-title">利用規約、プライバシーポリシーに同意の上ご利用ください</div>
        </div>
    </div>
    @if(!isset($user->id))
    <div class="modal-container jisha-detail" id="coin-modal">
        <div class="modal">
            <img src="{{ asset('img/coin-gift.png') }}" class="omikuji" alt="">
            <a href="{{ route('register')}}" class="red">会員登録してコインを購入</a>
            <a href="{{ route('login')}}" class="outline-red">ログインしてコインを購入</a>
            <a href="#m1-c" class="link-2"></a>
        </div>
    </div>
    @else
    <div class="modal-container jisha-detail" id="coin-modal">
      <div class="modal">
          {{ Form::open(array('route' => 'mypage.buyCoin','class'=>'coin_modal','id'=>'payment-form','data-locale'=>'ja','data-stripe-publishable-key'=>env('STRIPE_KEY'))) }}
              <div class="refereceText">※コインのご購入は「110コイン」からです。</div>
              {{Form::select('coinCost', array(
                  '100' => '100コイン　￥120',
                  '200' => '200コイン　￥120',
                  '300' => '300コイン　￥120',
                  '400' => '400コイン　￥120',
                  '500' => '500コイン　￥120',
              ),'',['id'=>'coinCost']);}}
              @if (isset($user->stripe_id))
                <div class="payTitle">決済情報</div>
                <div class="savedCard">
                  <div class="left">
                    <input type="radio" name="savedCard" id="savedCard">
                    <div class="card-content">
                      <div class="cardType">JCB</div>
                      <div class="card-detail">
                        <div class="card-name">{{$user->cardName}}義</div>
                        <div class="expired-time">有効期限{{$user->expiredMonth}}/{{$user->expiredYear}}</div>
                      </div>
                    </div>
                  </div>
                  <div class="last-four">***{{$user->pm_last_four}}</div>
                </div>
              @endif
              @if(!isset($user->id))
                  <div class="form-field">
                      {{Form::label('email','メールアドレス')}}
                      {{Form::text('email')}}
                  </div>
                  <div class="form-field">
                      {{Form::label('password','パスワード')}}
                      {{Form::text('password','',array('placeholder'=>'パスワード'))}}
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
    @endif
    <div class="modal-container jisha-detail" id="purchase-modal">
        <div class="modal">
            <p>＼　お参り中・・・　／</p>
            <img src="{{ asset('img/cat-icons.png') }}" alt="">
            <a href="#m1-c" class="link-2"></a>
        </div>
    </div>
    <x-footer></x-footer>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
</x-guest-layout>
