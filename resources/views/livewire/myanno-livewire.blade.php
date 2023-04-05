<button aria-label="Add To  Wishlist" wire:click="like({{ $elon->id }})" class="product-btn border border-none  bg-white"><i
        @if (auth()->user()->isFollowing($elon)) style="color: red" @endif
    class="fi-rs-heart "></i>
</button>
