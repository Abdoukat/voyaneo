{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
<style>
    .wrap-login-item{
    display: inline-block;
    width: 100%;
    margin: -11px 0;
}
.wrap-login-item .form-item{
    display: block;
    float: left;
}
.wrap-login-item .form-item.login-form{
    padding-right: 70px;
    margin-bottom: 65px;
}
.wrap-login-item .form-item.register-form{
    position: relative;
}
.wrap-login-item .form-item.register-form::before{
    content: '';
    width: 1px;
    background: #e6e6e6;
    position: absolute;
    top: 10px;
    left: -63px;
    bottom: 0;
}
.wrap-login-item .form-item fieldset{
    display: block;
    float: left;
    width: 100%;
    margin-bottom: 2px;
}
.wrap-login-item .form-item .form-title{
    font-size: 14px;
    line-height: 19px;
    color: #333333;
    text-align: left;
    text-transform: uppercase;
    font-weight: 700;
    margin: 9px 0;
}
.wrap-login-item .form-item .form-subtitle{
    font-size: 14px;
    color: #666666;
    line-height: 14px;
    text-align: left;
    margin: 33px 0 18px 0;
    position: relative;
}
.wrap-login-item .form-item .form-subtitle::before{
    content: '';
    height: 1px;
    max-width: 471px;
    width: 100%;
    position: absolute;
    top: -17px;
    left: 0;
    background: #e6e6e6;
}
.wrap-login-item .form-item input[type="text"],
.wrap-login-item .form-item input[type="password"],
.wrap-login-item .form-item input[type="email"]{
    border: 1px solid #e6e6e6;
    outline: none;
    width: 100%;
    height: 43px;
    font-size: 13px;
    line-height: 19px;
    padding: 0 5px 0 14px;
    color: #333333;
}
.wrap-login-item .form-item input[type="text"]::-webkit-input-placeholder,
.wrap-login-item .form-item input[type="text"]::-moz-placeholder,
.wrap-login-item .form-item input[type="text"]:-ms-input-placeholder,
.wrap-login-item .form-item input[type="text"]:-moz-placeholder,
.wrap-login-item .form-item input[type="password"]::-webkit-input-placeholder,
.wrap-login-item .form-item input[type="password"]::-moz-placeholder,
.wrap-login-item .form-item input[type="password"]:-ms-input-placeholder,
.wrap-login-item .form-item input[type="password"]:-moz-placeholder,
.wrap-login-item .form-item input[type="email"]::-webkit-input-placeholder,
.wrap-login-item .form-item input[type="email"]::-moz-placeholder,
.wrap-login-item .form-item input[type="email"]:-ms-input-placeholder,
.wrap-login-item .form-item input[type="email"]:-moz-placeholder{
    color: #aaaaaa;
}
.wrap-login-item .form-item label{
    font-size: 14px;
    line-height: 19px;
    color: #333333;
    text-align: left;
    margin: 10px 0;
    font-weight: 400;
}
.wrap-login-item .form-item .link-function,
.wrap-login-item .form-item .remember-field{
    margin: 13px 0 7px 0;
}
.wrap-login-item .form-item .wrap-input.item-width-in-half{
    width: calc( 50% - 15px);
    width: -webkit-calc( 50% - 15px);
    width: -moz-calc( 50% - 15px);
    display: block;
    float: left;
}
.wrap-login-item .form-item .wrap-input.left-item{
    margin-right: 30px;
}
.wrap-login-item .form-item .btn{
    font-size: 14px;
    color: #ffffff;
    line-height: 19px;
    border: none;
    border-radius: 0;
    padding: 8px;
    min-width: 119px;
    text-align: center;
    margin-top: 28px;
    -webkit-transition: background 0.3s ease 0s;
    -o-transition: background 0.3s ease 0s;
    -moz-transition: background 0.3s ease 0s;
    transition: background 0.3s ease 0s;
}
.wrap-login-item .form-item .btn:hover{
    background: #222222;
}
.wrap-login-item .form-item input[type="checkbox"] + span{
    font-size: 13px;
    line-height: 19px;
    color: #666666;
    position: relative;
}
.wrap-login-item .form-item input[type="checkbox"] + span::before{
    content: '';
    display: block;
    float: left;
    border: 1px solid #e9e9e9;
    width: 15px;
    height: 14px;
    background: linear-gradient(#fefefe, #f6f6f6);
    margin-top: 3px;
    margin-right: 7px;
}
.wrap-login-item .form-item input[type="checkbox"] + span::after{
    content: "\f00c";
    font-family: FontAwesome;
    display: block;
    top: 0;
    left: -21px;
    position: absolute;
    opacity: 0;
    filter: alpha(opacity=0);
}
.wrap-login-item .form-item input[type="checkbox"]:checked + span::after{
    opacity: 1;
    filter: alpha(opacity=100);
}
.wrap-login-item .form-item .link-function {
    font-size: 13px;
    line-height: 19px;
    color: #666666;
    float: right;
    padding: 1px 29px 0 0;
}
.wrap-login-item .form-item input[type="checkbox"]{
    display: none;
}
.obli{
    color: red;
    font-size: 20px;
}
</style>
<x-guest-layout>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-5 offset-xl-2 offset-lg-1">
                <div class="booking-form">
                    <x-jet-validation-errors class="mb-4" />
                    <h3>S'inscrire</h3>
                    <form action="{{ route('register') }}" name="frm-login" method="POST">
                        @csrf
                        <fieldset class="check-date">
                            <label for="frm-reg-lname">Nom <span class="obli">*</span></label>
                            <input type="text" id="frm-reg-lname" name="name" placeholder="Nom*" :value="old('name')" required autocomplete="name" autofocus>
                        </fieldset>
                        <fieldset class="check-date">
                            <label for="frm-reg-email">Email<span class="obli">*</span></label>
                            <input type="email" id="frm-reg-email" name="email" placeholder="Email" :value="old('email')" >
                        </fieldset>

                        <fieldset class="check-date">
                            <label for="frm-reg-pass">Mot de passe<span class="obli">*</span></label>
                            <input type="password" id="frm-reg-pass" name="password" placeholder="Mot de passe " required autocomplete="new-password" >
                        </fieldset>
                        <fieldset class="check-date">
                            <label for="frm-reg-cfpass">Confirmer mot de passe<span class="obli">*</span></label>
                            <input type="password" id="frm-reg-cfpass" name="password_confirmation" placeholder="Confirmer Mot de passe" required autocomplete="new-password">
                        </fieldset>
                        <button type="submit" class="btn btn-info">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
