@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                        <div class="card-header card-header-primary">
                            <div class="card-title"></div>
                            <h4 class="card-title"> Create Investor</h4>
                            </div>

                    <div class="card-body">
                        <form>
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
                                        <label> First Name</label>
                                        <input  class="form-control"name ="firstname" placeholder="."/>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label> Last Name</label>
                                        : <input  class="form-control" name ="lastname" placeholder="."/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                       <label> Email</label>
                                        <input  class="form-control" placeholder="sample@ sample.com"/>
                                    </div>


                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input class="form-control"name="phone" placeholder=""/>
                                    </div>


                                </div>
                            </div>
                            <div class="row">

                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control"name="phone" placeholder=""/>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input class="form-control"name="phone" placeholder=""/>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                    <div class="card-footer">

                    </div>
                </div>


            </div>
        </div>
    </div>

</div>


@endsection
