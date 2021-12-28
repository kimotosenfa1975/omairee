<x-guest-layout>
    <x-header></x-header>
    <x-auth-card>
        <x-slot name="logo">
           
        </x-slot>

        <div class="mt-4 mb-4 password-reset-title">
            パスワード再設定
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input id="email" class="block mt-1 w-full" type="email" placeholder="メールアドレス"  name="email" :value="old('email')" required autofocus />
            </div>

            <div class="password-reset-send">
                <button type="submit">送信</button>
            </div>
        </form>
    </x-auth-card>
    <x-footer></x-footer>
</x-guest-layout>
