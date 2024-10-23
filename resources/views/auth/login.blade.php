@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <h2 class="text-center py-4 card-header" style="">Login</h2>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label style="" for="email" class="col-md-3 col-form-label">{{ __('E-Mail') }}</label>

                            <div class="col-md-9">
                                <input id="email" type="email" class=" form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="" for="password" class="col-md-3 col-form-label ">{{ __('Password') }}</label>

                            <div class="col-md-9">
                                <input id="password" type="password" class=" form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                <button type="submit" class=" btn btn-warning btn-block ">
                                    {{ __('Login') }}
                                </button>
                                <div class="text-center">
                                    <a href="{{ route('register') }}">Don't Have an account? click here to sign up</a>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
