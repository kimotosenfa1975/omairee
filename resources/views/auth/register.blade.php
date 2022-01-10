<x-guest-layout>
    <x-header></x-header>
    <x-auth-card>
        <x-slot name="logo">
                <x-application-logo />
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" style="width:73%;">
            @csrf

            <!-- Name -->
            <div class="mt-4">
                <input id="name" type="text"  placeholder="名前"  name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <input id="email" type="email"  placeholder="メールアドレス"  name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <input id="password" placeholder="パスワード"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <input id="password_confirmation" placeholder="確認パスワード"
                                type="password"
                                name="password_confirmation" required />
            </div>
            <div class="ref">※8文字以上の半角英数記号</div>
            <div class="agree">
                <label for="agree" class="inline-flex items-center">
                    <input id="agree" type="checkbox" name="remember">&nbsp;&nbsp;&nbsp;&nbsp;
                    <span>次回から自動的にログイン</span>
                </label>
            </div>
            <div class="register-button">
                <button type="submit">新規登録</button>
            </div>
            <div class="jisha">
                <a  href="{{ route('login') }}">寺社掲載申請はこちら</a>
            </div>
        </form>
    </x-auth-card>
    <x-footer></x-footer>
</x-guest-layout>
