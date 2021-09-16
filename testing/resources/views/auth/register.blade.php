@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-group" style="margin-top:10%;">
            <div class="card bg-transparent" style="backdrop-filter: blur(5px);">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mx-auto text-center text-white" style="margin-top:0%">
                        <h4>Selamat Datang</h4>
                        <p> Ayo buat akunmu sendiri</p>
                        </div>
                        
                        <div class="form-group row justify-content-center" style="margin-top:3%;">
                            <div class="col-md-6">
                                <input id="username" style="text-align: center" type="text" placeholder="Username" class="form-control @error('name') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <input id="email" style="text-align: center" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <input id="password" style="text-align: center" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <input id="password-confirm" style="text-align: center" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-light-green rounded-pill" style="width:100%;">
                                    <b>{{ __('REGISTER') }}</b>
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="mx-auto text-center text-white" style="margin-top:3%">
                    <ion-icon name="logo-facebook" style="font-size: 16px; margin-right:2%"></ion-icon>
                    <ion-icon name="logo-twitter" style="font-size: 16px; margin-right:2%"></ion-icon>
                    <ion-icon name="mail-outline" style="font-size: 16px; margin-right:2%"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="card bg-transparent text-white" style="backdrop-filter: blur(10px) opacity(50);">
                <div class="card-body">
                    <div style="text-align: center; margin-top:30%;">
                        <h3>Hai, Apa Kabar?</h3>
                        <h5>Ayo buat akunmu sendiri</h5>
                        <a class="btn btn-light rounded-pill"  style="width:50%; color:#3c5218;" href="{{ route('login') }}"><b>{{ __('LOGIN') }}</b></a>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
