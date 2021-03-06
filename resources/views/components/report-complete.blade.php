<div>
    <button class="admin__option--element" wire:click="$set('interfaceReport', true)"><span class="admin__element--icon material-symbols-rounded">visibility</span></button>

    @if ($interfaceReport)
        <div class="report__modal--main">
            <div class="report__modal--container">
                <div class="report__main--header">
                    <h1>{{ $report->id_report }} | {{ __('admin.Report by') }}: <a class="report__header--username" href="{{ route('profile', $report->user()->first()->username) }}" target="_blank">{{ __('@') }}{{ $report->user()->first()->username }}</a></h1>
                </div>
                <div class="report__main--body">
                    <div class="report__body--post">
                        <a class="report__post--image" href="{{ route('profile', $post->user()->first()->username) }}" target="_blank">
                            <img loading="lazy" class="report__image" src="{{ asset('storage/'.$post->user()->first()->profile_image) }}" alt="{{ __('image.Profiles image') }}">
                        </a>
                        <div class="report__post--main">
                            <div class="report__post--profile">
                                <div class="report__profile--info">
                                    <a class="report__profile--name" href="{{ route('profile', $post->user()->first()->username) }}" target="_blank">{{ $post->user()->first()->name }}</a>
                                    <span class="report__profile--username">{{ __('@') }}{{ $post->user()->first()->username }}</span>
                                </div>
                            </div>
                            <div class="report__post--content">
                                <p class="report__content--text">{{ $post->content }}</p>
                                @if ($post->image)
                                <div class="report__content--image">
                                    <img loading="lazy" class="content__image" src="{{ asset('storage/'.$post->image) }}" alt="{{ __('image.Posts image') }}"/>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="report__main--footer">
                    <div class="report__footer--left">
                        <button class="report__footer--element report__footer--cancel" wire:click="closeReportModal">{{ __('admin.Close') }}</button>
                    </div>
                    <div class="report__footer--right">
                        @livewire('warning-create', ['user' => $post->user()->first()])
                        @if (!$report->completed)
                        <button class="report__footer--element report__footer--uncomplete" wire:click="completeReport">{{ __('admin.Uncompleted') }}</button>
                        @else
                        <button class="report__footer--element report__footer--complete" wire:click="uncompleteReport">{{ __('admin.Completed') }}</button>
                        @endif
                    </div>
                </div>
            </div>
            <div class="report__modal--close" wire:click="closeReportModal"></div>
        </div>
    @endif
</div>
