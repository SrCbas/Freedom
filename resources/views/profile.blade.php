<x-app-layout>
    <x-slot name="title">{{ __('profile.Profile') }}</x-slot>

    <x-slot name="header">
        <a class="main__header--back" href="{{ URL::previous() }}">
            <svg class="main__header--icon" viewBox="0 0 24 24" aria-hidden="true" class="r-18jsvk2 r-4qtqp9 r-yyyyoo r-z80fyv r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-19wmn03">
                <g>
                    <path d="M20 11H7.414l4.293-4.293c.39-.39.39-1.023 0-1.414s-1.023-.39-1.414 0l-6 6c-.39.39-.39 1.023 0 1.414l6 6c.195.195.45.293.707.293s.512-.098.707-.293c.39-.39.39-1.023 0-1.414L7.414 13H20c.553 0 1-.447 1-1s-.447-1-1-1z">
                    </path>
                </g>
            </svg>
        </a>
        <h2 class="main__header--title">{{ __('profile.Profile') }}</h2>
    </x-slot>

    <livewire:profile-component :user="$user" :option="$option" />
</x-app-layout>