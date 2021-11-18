@extends('layouts.app')

@section('content')

<div class="content">


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Investors</h2>
            </div>
            <div class="pull-right">
                @can('investors-create')
                <a class="btn btn-primary" href="{{ route('investors.create') }}"> Create New Investors</a>
                @endcan

            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <h4 class="card-title ">Investors</h4>
                    <div class="card-body">


                        <div class="table-responsive">
                          <table class="table">
                            <thead class=" text-primary">
                                <th>ID</th>
                                  <th>Photo</th>
                                  <th>Firstname</th>
                                  <th>Lastname</th>
                                  <th>Email</th>
                                  <th>Phone</th>
                                  <th>Action</th>


                            </thead>
                            @foreach ($investors as $investor)
                                <tr>
                                    <td>{{$investor->email}}</td>
                                    <td>{{$investor->email}}</td>
                                    <td>{{$investor->firstName}}</td>
                                    <td>{{$investor->lastName}}</td>
                                    <td>{{$investor->email}}</td>
                                     <td>{{$investor->phone}}</td>
                                     <td>
                                        <form action="{{ route('investors.destroy',$investor->id) }}" method="POST">
                                            <a class="btn btn-info" href="{{ route('investors.show',$investor->id) }}">Show</a>
                                            @can('company-edit')
                                            <a class="btn btn-primary" href="{{ route('investors.edit',$investor->id) }}">Edit</a>
                                            @endcan


                                            @csrf
                                            @method('DELETE')
                                            @can('company-delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            @endcan
                                        </form>
                                    </td>

                                </tr>
                            @endforeach

                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
