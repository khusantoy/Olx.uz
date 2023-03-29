<div class="product-extra-link2">

    @if(\Illuminate\Support\Facades\Auth::check())
        <button  type="button"  class="button btn-wishlist"  wire:click="test">
            <i @if($hasLiked)  style="color: red" @endif  class="fi-rs-heart"></i>Like
        </button>
    @else
        <a href="{{route('login5')}}" class="button btn-wishlist"><i
                class="fi-rs-heart"></i>Like</a>
    @endif
</div>
