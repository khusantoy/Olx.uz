<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">E'lon berish</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">X</span>
        </button>
    </div>
    <div class="modal-body">
        <form class="" method="post" enctype="multipart/form-data">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Title</label>
                <input type="text" wire:model="title" name="title" class="form-control" id="title">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Description</label>
                <textarea name="description" wire:model="description" style="height: 150px;" class="form-control"></textarea>
            </div>
            <div class="row col-md-12">
                <div class="col-md-6">
                    <label for="image" class="form-label">Images</label>
                    <input type="file" wire:model="image" name="image" multiple class="form-control"
                        id="password">
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label">type</label>
                    <select name="type_id" wire:model="type_id" class="form-control">
                        <option value=""></option>
                        @foreach (\App\Models\Announcement::TYPES as $key => $title)
                            <option value="{{ $key }}">{{ $title }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row col-md-12">
                <div class="col-md-6">
                    <label for="image" class="form-label">Price</label>
                    <input type="number" wire:model="price" name="price" class="form-control" id="password">
                </div>
                <div class="col-md-6">
                    <label for="image" class="form-label">category</label>
                    <select name="category_id" wire:model="category_id" class="form-control">
                        <option value=""></option>
                        @foreach ($categories as $key => $category)
                            <option value="{{ $key }}">{{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" wire:click="createAd">Yaratish</button>
    </div>
    </form>
</div>
