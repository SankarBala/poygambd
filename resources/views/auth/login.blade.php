@extends('layouts.template')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center d-flex justify-content-between">
                        <h1 class="text-info ">{{ __('Login') }}</h1>
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

                    </div>


                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <img class="mb-4" src="{{asset('storage/images/logo/cube.png')}}"/>
                            </div>
                            <div class="col-md-9">

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text input-form-identifier">{{ __('E-Mail Address') }}</span>
                                        </div>
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>


                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text input-form-identifier">{{ __('Password') }}</span>
                                        </div>
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                        @enderror
                                    </div>


                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-dark">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link text-danger" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
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
