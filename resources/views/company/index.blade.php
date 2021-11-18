@extends('layouts.app')

@section('content')

<div class="container">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Company</h2>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

                <div class="pull-right">
                    @can('company-create')

                    <a class="btn btn-primary" href="{{ route('company.create') }}"> Create New Company</a>
                    @endcan
                </div>
            </div>
        </div>
        <div class="row margin-tb">
<div class="card">
    <div class="table">

        <table class="table">
            <thead>

                <th>Company Name</th>
                <th>Company Type</th>
                <th>Share Price</th>

                <th>Shares Available</th>
                <th>Total Number of Shares</th>
                <th width="280px">Action</th>
            </thead>
            @foreach ($companies as $company)
            <tr>
                <td>{{ $company->companyName }}</td>
                <td>{{ $company->companyType }}</td>
                <td>{{ $company->sharePrice }}</td>

                <td>{{ $company->availableShares }}</td>
                <td>{{ $company->noOfShares }}</td>
                <td>{{ $company->totalShares }}</td>




                <td>
                    <form action="{{ route('company.destroy',$company->id) }}" method="POST">
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


</div>


</div>

</div>


@endsection
