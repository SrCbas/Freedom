<div class="profile__modal">
    <button class="profile__button--element" wire:click="showProfileModal">{{ __('profile.Edit profile') }}</button>

    @if ($profileModal)
        <div id="profileEdit" class="profile__modal--main">
            <div class="profile__modal--container">
                <div class="profile__container--header">
                    <div class="profile__header--back" wire:click="$set('profileModal', false)">
                        <svg class="profile__header--icon" viewBox="0 0 24 24" aria-hidden="true">
                            <g>
                                <path d="M20 11H7.414l4.293-4.293c.39-.39.39-1.023 0-1.414s-1.023-.39-1.414 0l-6 6c-.39.39-.39 1.023 0 1.414l6 6c.195.195.45.293.707.293s.512-.098.707-.293c.39-.39.39-1.023 0-1.414L7.414 13H20c.553 0 1-.447 1-1s-.447-1-1-1z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <div class="profile__header--info">
                        <h2 class="profile__header--title">
                            {{ __('profile.Edit profile') }}
                        </h2>
                    </div>
                </div>
                <form class="profile__container--body">
                    <div class="profile__body--info">
                        <div class="profile__info--image">
                            @if ($image)
                                <img loading="lazy" class="profile__image" src="{{ $image->temporaryUrl() }}" alt="{{ __('image.Uploaded image') }}" wire:ignore>
                            @else
                                <img loading="lazy" class="profile__image" src="{{ asset('storage/'.Auth::user()->profile_image) }}" alt="{{ __('image.Profiles image') }}">
                            @endif
                            <label class="profile__image--label" for="image">
                                <span class="profile__image--icon material-symbols-rounded">add_a_photo</span>
                            </label>
                            <input class="profile__image--input" type="file" accept="image/*" id="image" name="image" wire:model="image" />
                        </div>
                        <div class="profile__info--text">
                            <div class="profile__info--up">
                                <div class="profile__text--element">
                                    <label class="profile__body--label" for="name">{{ __('profile.Name') }}:</label>
                                    <input class="profile__body--input" id="name" name="name" wire:model="user.name" maxlength="50" wire:ignore/>
                                </div>
                                <div class="profile__text--username">
                                    <label class="profile__username--label" for="username">{{ __('@') }}</label>
                                    <input class="profile__username--input" id="username" name="username" value="{{ $user->username }}" maxlength="15" wire:model="user.username" wire:ignore />
                                </div>
                                <span id="invalidUsername" class="profile__text--error" wire:ignore>{{ __('auth.Invalid Username') }}</span>
                            </div>
                            <div class="profile__info--down">
                                <div class="profile__text--element">
                                    <label class="profile__body--label" for="description">{{ __('profile.Description') }}:</label>
                                    <textarea class="profile__body--input" id="description" name="description" maxlength="255" wire:model="user.description" wire:ignore></textarea>
                                </div>
                                <div class="profile__text--element">
                                    <label class="profile__body--label" for="birthday">{{ __('profile.Birthday') }}:</label>
                                    <input class="profile__body--input" type="date" id="birthday" name="birthday" wire:model="user.birthday" />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                @if($errors->any())
                    <div class="error">
                        {!! implode('', $errors->all('<p class="error__text">:message</p>')) !!}
                    </div>
                @endif
                <div class="profile__container--footer">
                    <button class="profile__footer--element" wire:click="store">{{ __('profile.Save') }}</button>
                </div>
            </div>
            <div class="profile__modal--close" wire:click="$set('profileModal', false)"></div>
        </div>
    @endif
</div>
