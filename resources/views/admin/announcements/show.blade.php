@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">

    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">

            </div>
            <table class="table table-bordered table-striped">
               <thead>
               <th>
                   Id
               </th>
               <th>
                   Qayerga
               </th>
               <th>
                   Qancha
               </th>
               <th>
                   qachon
               </th>

               </thead>
                <tbody>
                    <tr>
                        <td>
                            {{ $rasxod->id }}
                        </td>
                        <td>
                            {{ $rasxod->name }}
                        </td>
                        <td>
                            {{ $rasxod->price }}
                        </td>
                        <td>
                            @php
                                $date = new DateTimeImmutable($rasxod->created_at);
                                echo $date->format('Y, m, d ');
                            @endphp
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                    <a class="btn btn-danger" href="{{ route('rasxods.index') }}">
                    Back
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
