{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<x-guest-layout>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-5 offset-xl-2 offset-lg-1">
                <div class="booking-form">
                    <x-jet-validation-errors class="mb-4" />
                    <h3>Connexion</h3>
                    <form method="POST" action="{{ route('login')}}">
                        @csrf
                        <div class="check-date">
                            <label for="date-in">Email :</label>
                            <input type="email" id="frm-login-uname" name="email" placeholder="Saisissez votre adresse e-mail" :value="old('email')" required autofocus>

                        </div>
                        <div class="check-date">
                            <label for="date-in">Mot de passe :</label>
                            <input type="password" id="frm-login-pass" name="password" placeholder="************" required autocomplete="current-password">

                        </div>
                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600"> M??moriser mon compte</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}" style="color: #dfa974">
                                    Mot de passe oubli??
                                </a>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-warning">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>



