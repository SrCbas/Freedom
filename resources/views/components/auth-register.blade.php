<div class="card">
<x-application-logo :class="'card__logo'"/>
    <!-- Validation Errors -->
    <x-auth-validation-errors class="card__error" :errors="$errors" />
    <div class="card__main">
        <form id="authRegister" class="card__main--form" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="card__form--element">
                <label class="card__element--label" for="name">*{{ __('auth.Name') }}: </label>
                <input class="card__element--input" id="name" name="name" type="text" placeholder="{{ __('auth.name') }}" value="{{ old('name') }}" maxlength="50" required />
            </div>
            <span id="maxLengthName" class="card__form--error">{{ __('auth.maxLengthName') }}</span>
            <div class="card__form--element">
                <label class="card__element--label" for="username">*{{ __('auth.Username') }}: </label>
                <input class="card__element--input" id="username" name="username" type="text" placeholder="{{ __('auth.username') }}" value="{{ old('username') }}" maxlength="15" required />
            </div>
            <span id="invalidUsername" class="card__form--error">{{ __('auth.Invalid Username') }}</span>
            <span id="maxLengthUsername" class="card__form--error">{{ __('auth.maxLengthUsername') }}</span>
            <div class="card__form--element">
                <label class="card__element--label" for="birthday">{{ __('auth.Birthday') }}: </label>
                <input class="card__element--input" id="birthday" name="birthday" type="date" value="{{ old('birthday') }}" placeholder="birthday" />
            </div>
            <div class="card__form--element">
                <label class="card__element--label" for="email">*{{ __('auth.Email') }}: </label>
                <input class="card__element--input" id="email" name="email" type="email" value="{{ old('email') }}" placeholder="{{ __('auth.email') }}" required />
            </div>
            <span id="invalidEmail" class="card__form--error">{{ __('auth.Invalid Email') }}</span>
            <div class="card__form--element">
                <label class="card__element--label" for="email_confirmation">*{{ __('auth.Confirm Email') }}: </label>
                <input class="card__element--input" id="email_confirmation" name="email_confirmation" type="email" value="{{ old('email_confirmation') }}" placeholder="{{ __('auth.email') }}" required />
            </div>
            <span id="invalidConfirmEmail" class="card__form--error">{{ __('auth.Invalid Email') }}</span>
            <span id="notSameEmails" class="card__form--error">{{ __('auth.Differents Emails') }}</span>
            <div class="card__form--element">
                <label class="card__element--label" for="password">*{{ __('auth.Password') }}: </label>
                <input class="card__element--input" id="password" name="password" type="password" placeholder="********" required />
            </div>
            <span id="weakPassword" class="card__form--error">{{ __('auth.Weak Password') }}</span>
            <div class="card__form--element">
                <label class="card__element--label" for="password_confirmation">*{{ __('auth.Confirm Password') }}: </label>
                <input class="card__element--input" id="password_confirmation" name="password_confirmation" type="password" placeholder="********" required />
            </div>
            <span id="weakConfirmPassword" class="card__form--error">{{ __('auth.Weak Password') }}</span>
            <span id="notSamePasswords" class="card__form--error">{{ __('auth.Differents Passwords') }}</span>
            <div class="card__form--buttons">
                <a class="card__button card__button--back" href="{{ route('index') }}">
                    {{ __('auth.Back') }}
                </a>
                <button id="registerButton" class="card__button card__button--register">
                    {{ __('auth.Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
