@extends('layouts.app')

@section('content')
    <div class="register">
        <div class="register-form">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card register-container">
                            <div class="card-header text-center">
                                <h1 class="register-heading text-uppercase">REGISTER</h1>
                                <div class="register-heading-underline"></div>
                            </div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <div class="col-md-6 register-form-col">
                                            <i class="fas fa-address-card"></i>
                                            <label for="name"
                                                   class=" col-form-label register-label">{{ __('Name') }}</label>
                                        </div>
                                        <div class="col-md-6 register-input-container">
                                            <input id="name" type="text"
                                                   class="register-form-input form-control @error('name') is-invalid @enderror"
                                                   name="name"
                                                   value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 register-form-col">
                                            <i class="fas fa-envelope"></i>
                                            <label for="email"
                                                   class=" col-form-label register-label">{{ __('E-Mail Address') }}</label>
                                        </div>
                                        <div class="col-md-6 register-input-container">
                                            <input id="email" type="email"
                                                   class="register-form-input form-control @error('email') is-invalid @enderror"
                                                   name="email" value="{{ old('email') }}" required
                                                   autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 register-form-col">
                                            <i class="fas fa-unlock"></i>
                                            <label for="password"
                                                   class="col-form-label register-label">{{ __('Password') }}</label>
                                        </div>
                                        <div class="col-md-6 register-input-container">
                                            <input id="password" type="password"
                                                   class="register-form-input form-control @error('password') is-invalid @enderror"
                                                   name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 register-form-col">
                                            <i class="fas fa-lock"></i>
                                            <label for="password-confirm"
                                                   class="col-form-label register-label">{{ __('Confirm Password') }}</label>
                                        </div>
                                        <div class="col-md-6 register-input-container">
                                            <input id="password-confirm" type="password"
                                                   class="register-form-input form-control"
                                                   name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-5">
                                            <button type="submit"
                                                    class="btn btn btn-outline-danger contact-form-btn text-center">
                                                REGISTER
                                            </button>
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

@endsection
