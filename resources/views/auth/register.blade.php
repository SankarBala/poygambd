@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center d-flex justify-content-between">
                        <h1 class="text-info ">{{ __('Register') }}</h1>
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-3 text-center">
                                <img class="mb-4" src="{{asset('storage/images/logo/cube.png')}}"/>
                            </div>
                            <div class="col-md-9">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf


                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text input-form-identifier">{{ __('Name') }}</span>
                                        </div>
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>


                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span
                                                class="input-group-text input-form-identifier">{{ __('E-Mail Address') }}</span>
                                        </div>
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>


                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span
                                                class="input-group-text input-form-identifier">{{ __('Password') }}</span>
                                        </div>
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>


                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span
                                                class="input-group-text input-form-identifier">{{ __('Confirm Password') }}</span>
                                        </div>
                                        <input id="password-confirm" type="password" class="form-control"
                                               name="password_confirmation" required autocomplete="new-password">

                                    </div>


                                    <div class="form-group row mb-0">
                                        <div class="col-md-2 offset-md-9">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
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
@endsection
