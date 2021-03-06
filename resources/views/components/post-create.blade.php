<div class="main__container--input">
    <form class="main__input--form" wire:submit.prevent="store">
        <div class="main__form">
            <a class="main__form--image" href="{{ route('profile', ['username' => Auth::user()->username]) }}">
                <img loading="lazy" class="form__image" src="{{ asset('storage/'.Auth::user()->profile_image) }}" alt="{{ __('image.Profiles image') }}"/>
            </a>
            <div class="main__form--container">
                <textarea class="main__container--input" name="content" id="content" placeholder="{{ __('home.Whats happening?') }}" maxlength="255" wire:model="content" wire:ignore ></textarea>
                @if ($image)
                    <div class="main__container--image" wire:ignore>
                        <span class="main__icon material-symbols-rounded" wire:click="$set('image', null)"> close </span>
                        <img loading="lazy" class="main__image" src="{{ $image->temporaryUrl() }}" alt="{{ __('image.Uploaded image') }}">
                    </div>
                @endif
            </div>
        </div>
        @if($errors->any())
            <div class="error">
                {!! implode('', $errors->all('<p class="error__text">:message</p>')) !!}
            </div>
        @endif
        <div class="main__buttons">
            <div class="main__button--container">
                <label for="uploadImage">
                    <span class="main__button--icon material-symbols-rounded">image</span>
                </label>
                <input class="main__button--element main__button--image" id="uploadImage" type="file" accept="image/*" wire:model="image" />
                
            </div>
            <button class="main__button--submit @if ((!$content) AND (!$image)) disabled @endif" type="submit" @if ((!$content) AND (!$image)) disabled @endif >{{ __('home.Post') }}</button>
        </div>
    </form>
</div>