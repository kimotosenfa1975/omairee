<x-guest-layout>
    
    <x-header></x-header>
    
    <div class="main contact">
        <div class="wrapper">
            <div class="contact-info">
              <p>会社概要</p>
            </div>
          </div>
          <div class="wrapper">
            <div class="horizontal-line"></div>
            <div class="contact-info-item">
              <p class="title">会社名</p>
              <p class="name">Be.Maroo合同会社</p>
            </div>
            <div class="horizontal-line"></div>
            <div class="contact-info-item">
              <p class="title">設立</p>
              <p class="name">Be.Maroo合同会社</p>
            </div>
            <div class="horizontal-line"></div>
            <div class="contact-info-item">
              <p class="title">代表者</p>
              <p class="name">大杉　麿睦</p>
            </div>
            <div class="horizontal-line"></div>
            <div class="contact-info-item">
              <p class="title">作業内容</p>
              <p class="name">インターネットサービスの<br class="sp">企画・開発・運営</p>
            </div>
            <div class="horizontal-line"></div>
            <div class="contact-info-item">
              <p class="title">所在地</p>
              <p class="name">〒530-0001<br class="sp"> 大阪府大阪市北区梅田1丁目11番4号<br class="sp">大阪駅前第4ビル9階923・1569号</p>
            </div>
            <div class="horizontal-line"></div>
            <div class="contact-info-item">
              <p class="title">E-mail</p>
              <p class="name">info@omairee.com</p>
            </div>
            <div class="horizontal-line"></div>
         </div>
         <div class="wrapper">
            <div class="contact-form">
              <p>お問い合わせ</p>
            </div>
          </div>
          <div class="wrapper">
            <form method="POST" action="{{ route('contact.send') }}" class="form">
                @csrf
                <!-- Email Address -->
                <div class="form-item">
                    <label for="email">メールアドレス</label>
                    <input id="email"  type="email" name="email" required  >
                </div>

                <div class="form-item">
                    <label for="tel">お電話番号</label>
                    <input id="tel"  type="tel" name="tel" required  >
                </div>

                <div class="form-item">
                    <label for="name">お名前</label>
                    <input id="name"  type="text" name="name" required  >
                </div>

                <div class="form-item">
                    <label for="message">お問い合わせ内容</label>
                    <textarea id="message"  type="text" name="message" rows="5"  required  ></textarea>
                </div>

                <div class="form-item">
                   <input type="submit" value="送信">
                </div>
            </form>
         </div>
    </div>

    <x-footer></x-footer>
    
</x-guest-layout>
