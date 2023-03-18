@extends('layouts.admin')
@section('content')
    <main class="content">
        <h1 class="h3 mb-3"><strong>Permissions</strong> Dashboard</h1>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Category_id</th>
                                <th>Image</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$supcategories->id}}</td>
                                <td>
                                    <h4>
                                        <span class="badge bg-success">
                                            {{$supcategories->title}}
                                        </span>
                                    </h4>
                                </td>
                                <td>
                                {{$supcategories->category->title}}
                               </td>
                                <td>
                                    <img width="80px"
                                         src="{{$supcategories->image? asset('uploads/supcategories/'.$supcategories->image):''}}"
                                         alt="Categories">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <a class="btn btn-secondary mt-3" href="{{route('supcategories.index')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg>
                            Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">

        $('.show_confirm').click(function (event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone.",
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
