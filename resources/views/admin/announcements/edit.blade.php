@extends('layouts.admin')
@section('content')
    <main class="content">
        <h1 class="h3 mb-3">
            Edit
        </h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('announcements.update',$elon->id)}}" class="" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" value="{{$elon->title}}" id="title">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Description</label>
                                <textarea name="description" class="form-control" >{{$elon->description}}</textarea>
                            </div>
                                <div class="mb-2 w-50">
                                   @foreach($elon->images as $image)
                                       <img src="{{asset('images/'.$image->name)}}" width="90" height="50" class="img-fluid" >
                                   @endforeach
                                </div>
                            <div class="mb-2 w-50">
                                <label for="image" class="form-label">Images</label>
                                <input type="file" name="image[]" multiple class="form-control"   id="password">
                            </div>
                            <div class="mb-2 w-50">
                                <label for="image"  class="form-label">type</label>
                                <select name="type_id" class="form-control">
                                    <option  value=""></option>
                                    @foreach(\App\Models\Announcement::TYPES as $key=>$title)
                                        <option @if($key==$elon->type) selected @endif  value="{{$key}}">{{$title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2 w-50">
                                <label for="image" class="form-label">Price</label>
                                <input type="number" name="price" class="form-control" value="{{$elon->price}}" id="password">
                            </div>
                            <div class="mb-2 w-50">
                                <label for="image"  class="form-label">category</label>
                                <select name="category_id" class="form-control">
                                    <option value="">
                                    </option>
                                    @foreach($categories as $key=>$title)
                                        <option @if($elon->category_id==$key) selected @endif value="{{$key}}">{{$title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn btn-primary mt-3" type="submit">
                                update
                            </button>
                            <a class="btn btn-secondary mt-3"  href="{{route('announcements.index')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                </svg>
                                Back
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">

        $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be saved to archive.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });

    </script>
@endsection
