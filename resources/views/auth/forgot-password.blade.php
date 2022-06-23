{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
<style>
    .page-wrap {
    min-height: 100vh;
}
.container {
    max-width: 900px;
}


.col-md-12 .form-control {

    width: 50%;
}
</style>
<x-guest-layout>
<div class="page-wrap d-flex flex-row align-items-center">
    <div class="container">
      <div class="row">

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="col-md-12">
            <h2 class="font-weight-light">Mot de passe oublié?</h2>
            Ne pas s'inquiéter. Entrez simplement votre adresse e-mail ci-dessous et nous vous enverrons un e-mail d'instructions pour la récupération.
            <form target="_blank" action="{{ route('password.email') }}" method="POST" class="mt-3">
                @csrf
                <input id="email" class="form-control  mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />

                <div class="text-right my-3">
                    <button type="submit" class="btn btn-lg btn-success">réinitialiser le mot de passe</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
</x-guest-layout>
