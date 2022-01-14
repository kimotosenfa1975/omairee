<x-app-layout>
    
    <x-dashboard-header></x-dashboard-header>
    <div class="main wrapper">
      <x-profile></x-profile>
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
                <input type="text" name="number" value="0000-0000-0000-0000">
            </div>
            <div class="divide">
              <div class="edit-text">
                  <p>有効期限</p>
                  <input type="text" name="date_time" value="MM/YY">
              </div>
              <div class="edit-text">
                <p>CVC</p>
                <input type="text" name="cvc" value="CVC">
              </div>
            </div>
            <div class="checkbox">
              <input type="checkbox" name="save" id="save">
              <label for="save">この支払い方法を保存</label>
            </div>
            <div class="section">
              <input type="submit" value="新しいカードを登録">
            </div>
          </div>  
      </div>
      <div class="menu sp" onclick="menuClose()"></div>
    </div>
    <x-footer></x-footer>
    
</x-app-layout>
