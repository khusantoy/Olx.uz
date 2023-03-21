@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">

        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <div class="form-group">
                        <a class="btn btn-danger" href="{{ route('announcements.index') }}">
                            Back
                        </a>
                    </div>
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>View</th>
                    <th>Price</th>
                    <th>User</th>
                    <th>Category</th>

                    </thead>
                    <tbody>
                    <tr>
                    <tr>
                        <td>{{$elon->id}}</td>
                        <td>{{$elon->title}}</td>
                        <td>{{$elon->description}}</td>
                        <td>
                            {{\App\Models\Announcement::TYPES[$elon->type]}}
                        </td>
                        <td>
                            {{$elon->view}}
                        </td>
                        <td>
                            {{$elon->price}}
                        </td>
                        <td>{{$elon->category->title}}</td>
                        <td>{{$elon->user->name}}</td>

                    </tr>
                    </tbody>
                </table>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>Images</tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($elon->images as $image)
                            <td><img width="100px" src="{{asset('images/'.$image->name)}}" alt="images"></td>
                        @endforeach
                    </tr>
                    </tbody>
                </table>
                <br>

            </div>
        </div>
    </div>

@endsection
