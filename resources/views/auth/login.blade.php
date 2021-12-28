<x-guest-layout>
    <x-header></x-header>
    <x-auth-card>
        <x-slot name="logo">
            <x-application-logo />
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div class="login-email">
                <input id="email"  type="email" name="email" :value="old('email')" placeholder="メールアドレス" required  >
            </div>
            <div class="login-password">
                <input id="id_password" type="password" name="password" required autocomplete="current-password" placeholder="パスワード" >
                <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
            </div>
            <div class="remember_me">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" name="remember">&nbsp;&nbsp;&nbsp;&nbsp;
                    <span>次回から自動的にログイン</span>
                </label>
            </div>
            <div class="login-button">
                <button type="submit">ログイン</button>
            </div>
            <div class="password-reset">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        パスワードを忘れた方？
                    </a>
                @endif
                
            </div>
        </form>
    </x-auth-card>
    <x-footer></x-footer>
</x-guest-layout>
