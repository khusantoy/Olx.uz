@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
       Edit
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("rasxods.update", [$rasxod->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">Title</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $rasxod->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required" for="price">Title</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', $rasxod->price) }}" required>
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required" for="created_at">qachon</label>
                <h5>NOW</h5>
                <input class="form-control {{ $errors->has('created_at') ? 'is-invalid' : '' }}" type="hidden" name="created_at" id="created_at" value="{{ old('created_at', $rasxod->created_at) }}" required>
                @if($errors->has('created_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('created_at') }}
                    </div>
                @endif
                <span class="help-block"></span>
            </div>

            <br>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
