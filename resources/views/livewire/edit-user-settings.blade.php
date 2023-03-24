<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Edit User Settings</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">X</span>
        </button>
    </div>
    <div class="modal-body">
        <form enctype="multipart/form-data">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" wire:model="name" name="name" 
                    class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Email</label>
                <input type="email" wire:model="email" name="email" value="{{ Auth::user()->email }}"
                    class="form-control" id="email">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" wire:click="createAd">Edit</button>
            </div>
        </form>
    </div>
</div>
