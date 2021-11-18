@extends('layouts.app')

@section('content')
<div class="content">


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Investments</h2>
            </div>
            <div class="pull-right">


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
                    <h4 class="card-title ">Investments</h4>
                    <div class="card-body">


                        <div class="table-responsive">
                          <table class="table">
                            <thead class=" text-primary">




                            </thead>

                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
