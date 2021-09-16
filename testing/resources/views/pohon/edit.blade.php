@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-group" style="margin-top:5%;">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('pohon.update',$pohon->id) }}">
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="mx-auto text-center text-white" style="margin-top:0%">
                        <h4>Selamat Datang</h4>
                        <p> Ayo buat akunmu sendiri</p>
                        </div>
                        
                        <div class="form-group row justify-content-center" style="margin-top:3%;">
                            <div class="col-md-6">
                                <input id="ordo" value="{{$pohon->ordo}}" style="text-align: center" type="text" placeholder="Ordo" class="form-control @error('name') is-invalid @enderror" name="ordo" value="{{ old('ordo') }}" required autocomplete="ordo" autofocus>

                                @error('ordo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <input id="famili" value="{{$pohon->famili}}" style="text-align: center" type="text" placeholder="Famili" class="form-control @error('famili') is-invalid @enderror" name="famili" value="{{ old('famili') }}" required autocomplete="famili">

                                @error('famili')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <input id="genus" value="{{$pohon->genus}}" style="text-align: center" type="genus" class="form-control @error('genus') is-invalid @enderror" placeholder="Genus" name="genus" required autocomplete="genus">

                                @error('genus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <input id="species" value="{{$pohon->species}}" style="text-align: center" type="text" class="form-control" name="species" placeholder="Species" required autocomplete="species">
                            
                                @error('species')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <input id="jumlah" value="{{$pohon->jumlah}}" style="text-align: center" type="number" class="form-control" name="jumlah" placeholder="Jumlah" required autocomplete="jumlah">
                            
                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-light-green rounded-pill" style="width:100%;">
                                    <b>{{ __('SUBMIT') }}</b>
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
            </div>
        </div>
        
    </div>
</div>
@endsection
