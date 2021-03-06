<div id="likePost">
    <audio id="likeSound" src="{{ asset('storage/like_sound.mp3') }}"></audio>
    @if (!Auth::user()->likes()->find($this->post->id_post))
        <button class="button__action" wire:click="addLike">
            <span class="button__action--icon button__action--like notLiked material-symbols-rounded"> favorite_border </span> 
            <span class="button__action--count">{{ $post->likes()->count() }}</span>
        </button>
    @else
        <button class="button__action" wire:click="deleteLike">
            <span class="button__action--icon button__action--like liked material-symbols-rounded"> favorite_border </span>
            <span class="button__action--count">{{ $post->likes()->count() }}</span>
        </button>
    @endif
</div>
