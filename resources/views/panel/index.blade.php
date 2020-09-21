@extends('layouts.app')

@section('content')
    <div class="admin-panel">
        <div class="admin-panel-panel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-12 text-center">
                        <a href="{{Route("users.index")}}" class="btn btn-sq-lg btn-primary admin-panel-button">
                            <i class="fa fa-user fa-3x"></i><br/>
                            USERS</a>
                    </div>
                    <div class="col-md-6 col-12 text-center">
                        <a href="{{Route("cars.index")}}"
                           class="btn btn-sq-lg btn-primary admin-panel-button admin-panel-button-car">
                            <i class="fas fa-car fa-3x"></i><br/>
                            CARS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
