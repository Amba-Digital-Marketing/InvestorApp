@extends('layouts.app')

@section('content')

<div class="container">


    <div class="container-fluid">

        <div class="col-md-12">
            <div class="card">
                <div class="row"></div>
                <div class="row">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Something went wrong.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                </div>

                <div class="card-header card-header-primary">
                    <div class="card-title"></div>
                    <h4 class="card-title"> Create Company</h4>
                    </div>


                <div class="card-body">

                    <form action="{{ route('company.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col">
                            </div>
                            <div class="col">
                                <img src = "https://www.tutorialspoint.com/videotutorials/images/numerical_ability_home.jpg" class = "img-circle">

                            </div>

                            <div class="col">
                            </div>
                        </div>
                        <div class="row">

                            <div class="col">
                                <div class="form-group">
                                    <label> Company Name</label>
                                    <input  class="form-control"vname ="companyName" placeholder="."/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Share Price</label>

                                    <input class="form-control"name="sharePrice" placeholder=""/>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label>Available Shares</label>
                                    <input class="form-control"name="availableShares" placeholder=""/>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>No of Shares</label>
                                    <input class="form-control"name="noOfShares" placeholder=""/>
                                </div>


                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Total Number of Shares</label>
                                    <input class="form-control"name="totalShares" placeholder=""/>
                                </div>


                            </div>

                        </div>

                        <div class="row">
                            <div class="col">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col">


                            </div>
                            <div class="col">


                            </div>
                        </div>
                        <div class="row">
                            <div class="col">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col">

                            </div>
                        </div>

                        <div class="row">
                          <div class="col"></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-primary">Create Company</button>

                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
