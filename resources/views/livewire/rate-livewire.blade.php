<div class="modal-content">

    <button type="button"  class="close d-none" data-dismiss="modal" aria-label="Close">
        <span id="qaytadanrender2" aria-hidden="true"></span>
    </button>

    <div class="card-body text-center">
        <div class="comment-box text-center">
            <h4>Add a comment</h4><br>
            <div class="rating">
                <input type="radio" name="rating" wire:click="test(5)" value="5" id="5"><label
                    for="5">☆</label>
                <input type="radio" name="rating" wire:click="test(4)" value="4" id="4"><label
                    for="4">☆</label>
                <input type="radio" name="rating" wire:click="test(3)" value="3" id="3"><label
                    for="3">☆</label>
                <input type="radio" name="rating" wire:click="test(2)" value="2" id="2"><label
                    for="2">☆</label>
                <input type="radio" name="rating" wire:click="test(1)" value="1" id="1"><label
                    for="1">☆</label>
            </div>
            <br><br>
            <div class="comment-area">
                <textarea wire:model="comment" class="form-control" placeholder="what is your view?" rows="4"></textarea>
            </div>

            <div wire:click="add" class="text-center mt-4"> <button class="btn btn-success send px-5">Send message
                    <i class="fa fa-long-arrow-right ml-1"></i></button>
            </div>
        </div>
    </div>
</div>
