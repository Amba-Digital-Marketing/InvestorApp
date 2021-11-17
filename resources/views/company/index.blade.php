@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container-fluid">



        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Company</h2>
                </div>
                <div class="pull-right">
                    @can('company-create')

                    <a class="btn btn-primary" href="{{ route('company.create') }}"> Create New Company</a>
                    @endcan
                </div>
            </div>
        </div>


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif






        <div class="col-md-12">
            <div class="card">
                <div class="card-title">
                    <h4 class="card-title">Company</h4>
                </div>
                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>CompanyName</th>
                                <th>Details</th>
                                <th width="280px">Action</th>
                            </tr>
                            @foreach ($companies as $company)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $company->companyName }}</td>
                                <td>{{ $company->email }}</td>
                                <td>
                                    <form action="{{ route('products.destroy',$company->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('company.show',$company->id) }}">Show</a>
                                        @can('company-edit')
                                        <a class="btn btn-primary" href="{{ route('company.edit',$company->id) }}">Edit</a>
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

                        <div class="table">
                            <thead class="text-primary">
                                <th>Company Name</th>
                                <th>

                                  </th>
                                  <th>
                                    Name
                                  </th>
                            </thead>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
