@extends('layouts.app')



@section('content')
    <div class="create-cars">
        <div class="create-cars-form">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card register-container">
                            <div class="card register-container">
                                <div class="card-header text-center">
                                    <h3 class="register-heading text-uppercase">CREATE NEW CAR</h3>
                                    <div class="register-heading-underline"></div>
                                </div>
                                <div class="card-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ route('cars.store') }}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Name:</strong>
                                                    <input type="text" name="name" class="form-control"
                                                           placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Type:</strong>
                                                    <input type="text" name="type" class="form-control"
                                                           placeholder="Type">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Upload:</strong>
                                                    <input type="file" name="image">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Description:</strong>
                                                    <textarea class="form-control" style="height:150px"
                                                              name="description"
                                                              placeholder="Detail"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Price:</strong>
                                                    <input type="number" name="price" class="form-control"
                                                           placeholder="price">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Comfort:</strong>
                                                    <input type="number" name="comfort" class="form-control"
                                                           placeholder="comfort">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Speed:</strong>
                                                    <input type="number" name="speed" class="form-control"
                                                           placeholder="speed">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Noise:</strong>
                                                    <input type="number" name="noise" class="form-control"
                                                           placeholder="noise">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <strong>On homepage:</strong>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input class="form-check-input" type="radio" name="on_homepage" id="on_homepage_y" value="1">
                                                            <label class="form-check-label" for="on_homepage_y">
                                                                Yes
                                                            </label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-check-input" type="radio" name="on_homepage" id="on_homepage_n" value="0" checked>
                                                            <label class="form-check-label" for="on_homepage_n">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <strong>Featured:</strong>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input class="form-check-input" type="radio" name="featured" id="featured_y" value="1">
                                                            <label class="form-check-label" for="featured_y">
                                                                Yes
                                                            </label>
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-check-input" type="radio" name="featured" id="featured_n" value="0" checked>
                                                            <label class="form-check-label" for="featured_n">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
