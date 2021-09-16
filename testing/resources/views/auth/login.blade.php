@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card-group" style="margin-top:10%;">
            <div class="card bg-transparent text-white" style="backdrop-filter: blur(5px);">
            <div class="card-body">
                    <div style="text-align: center; margin-top:30%;">
                        <h3>Selamat Datang!</h3>
                        <h5>Ayo buat akunmu sendiri</h5>
                        <a class="btn btn-light rounded-pill"  style="width:50%; color:#3c5218;" href="{{ route('register') }}"><b>{{ __('REGISTER') }}</b></a>
                    </div>
                </div>
            </div>
            <div class="card bg-transparent text-white" style="backdrop-filter: blur(10px) opacity(50);">
            <div class="card-body" style="margin-top:10%;">

                    <div style="text-align: center;">
                        <h3>Hai, Apa Kabar?</h3>
                        <p>Login untuk melanjutkan</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row justify-content-center">

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                           
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-light-green rounded-pill" style="width:100%;">
                                    <b>{{ __('LOGIN') }}</b>
                                </button>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6 text-center">

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    
                    <div class="mx-auto text-center text-white" style="margin-top:2%; margin-bottom:3%">
                            <ion-icon name="logo-facebook" style="font-size: 16px; margin-right:2%"></ion-icon>
                            <ion-icon name="logo-twitter" style="font-size: 16px; margin-right:2%"></ion-icon>
                            <ion-icon name="mail-outline" style="font-size: 16px; margin-right:2%"></ion-icon>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
