@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header container-fluid bg-transparent" style="border-style: none;">
                    
                    <div class="col-md-2 float-right">
                        <img width="100" height="100" src="https://1.bp.blogspot.com/-EuOagnfkKZ8/YCoD1hPZxqI/AAAAAAAAH7k/t67zx332LnQm9XXCDDPl0rBplzjSTr1bACLcBGAsYHQ/s2000/logo-perhutani-01.png">
                    </div>
                </div>

                <div class="card-body justify-content-center text-center">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="150" height="150" viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" 
                    stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" 
                    font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                    <path d="M0,172v-172h172v172z" fill="none"></path><g><circle cx="13" cy="29" 
                    transform="scale(1.72,1.72)" r="2" fill="#2ecc71"></circle><circle cx="77" 
                    cy="13" transform="scale(1.72,1.72)" r="1" fill="#f1c40f"></circle><circle cx="50" 
                    cy="50" transform="scale(1.72,1.72)" r="37" fill="#94d3b0"></circle><circle cx="83" 
                    cy="15" transform="scale(1.72,1.72)" r="4" fill="#f1c40f"></circle><circle cx="87" 
                    cy="24" transform="scale(1.72,1.72)" r="2" fill="#2ecc71"></circle><circle cx="81" 
                    cy="76" transform="scale(1.72,1.72)" r="2" fill="#34495e"></circle><circle cx="15" 
                    cy="63" transform="scale(1.72,1.72)" r="4" fill="#34495e"></circle><circle cx="25" 
                    cy="87" transform="scale(1.72,1.72)" r="2" fill="#2ecc71"></circle><circle cx="18.5" 
                    cy="53.5" transform="scale(1.72,1.72)" r="2.5" fill="#2ecc71"></circle><circle cx="21" 
                    cy="67" transform="scale(1.72,1.72)" r="1" fill="#f1c40f"></circle><circle cx="80" 
                    cy="34" transform="scale(1.72,1.72)" r="1" fill="#2ecc71"></circle>
                    <path d="M48.1686,111.80172l-0.00688,-51.6c0,-6.64952 5.39048,-12.04172 12.04,
                    -12.04172h51.59828c6.64952,0 12.04,5.39048 12.04,12.04v51.6c0,6.64952 -5.39048,12.04 
                    -12.04,12.04h-51.5914c-6.64952,0 -12.04,-5.38876 -12.04,-12.03828z" fill="#ffffff">
                    </path><path d="M111.8,48.848c6.25908,0 11.352,5.09292 11.352,11.352v51.6c0,6.25908 
                    -5.09292,11.352 -11.352,11.352h-51.6c-6.25908,0 -11.352,-5.09292 -11.352,-11.352v-51.6c0,
                    -6.25908 5.09292,-11.352 11.352,-11.352h51.6M111.8,46.44h-51.6c-7.59896,0 -13.76,6.16104 
                    -13.76,13.76v51.6c0,7.59896 6.16104,13.76 13.76,13.76h51.6c7.59896,0 13.76,-6.16104 13.76,
                    -13.76v-51.6c0,-7.59896 -6.16104,-13.76 -13.76,-13.76z" fill="#34495e"></path>
                    <path d="M105.78,102.34h-39.56c-2.85004,0 -5.16,-2.30996 -5.16,-5.16v-22.36c0,-2.85004 
                    2.30996,-5.16 5.16,-5.16h39.56c2.85004,0 5.16,2.30996 5.16,5.16v22.36c0,2.85004 -2.30996,
                    5.16 -5.16,5.16z" fill="#2ecc71"></path><path d="M105.78,103.2h-39.56c-3.3196,0 -6.02,-2.7004 
                    -6.02,-6.02v-22.36c0,-3.3196 2.7004,-6.02 6.02,-6.02h39.56c3.3196,0 6.02,2.7004 6.02,
                    6.02v22.36c0,3.3196 -2.7004,6.02 -6.02,6.02zM66.22,70.52c-2.37016,0 -4.3,1.92984 -4.3,4.3v22.36c0,2.37016 1.92984,4.3 4.3,4.3h39.56c2.37016,0 4.3,-1.92984 4.3,-4.3v-22.36c0,-2.37016 -1.92984,-4.3 -4.3,-4.3z" fill="#34495e">
                    </path><path d="M86,92.8198c-1.85072,0 -3.69972,-0.70348 -5.1084,-2.11216l-18.72048,-18.71876c-0.3354,-0.3354 -0.3354,-0.88064 0,-1.21604c0.3354,-0.3354 0.88064,-0.3354 1.21604,0l18.72048,18.71876c2.14656,2.14484 5.63644,2.14484 7.783,0l18.72048,
                    -18.72048c0.3354,-0.3354 0.88064,-0.3354 1.21604,0c0.3354,0.3354 0.3354,0.88064 0,1.21604l-18.71876,18.72048c-1.40868,1.40868 -3.25768,2.11216 -5.1084,2.11216z" fill="#34495e"></path><path d="M62.78,101.48c-0.22016,0 -0.44032,-0.08428 -0.60888,
                    -0.25112c-0.3354,-0.3354 -0.3354,-0.88064 0,-1.21604l14.62,-14.62c0.3354,-0.3354 0.88064,-0.3354 1.21604,0c0.3354,0.3354 0.3354,0.88064 0,1.21604l-14.62,14.62c-0.16684,0.16684 -0.387,0.25112 -0.60716,0.25112z" fill="#34495e"></path><path d="M109.22,101.48c-0.22016,0 -0.44032,-0.08428 -0.60888,-0.25112l-14.62,-14.62c-0.3354,-0.3354 -0.3354,-0.88064 0,-1.21604c0.3354,-0.3354 0.88064,-0.3354 1.21604,0l14.62,14.62c0.3354,0.3354 0.3354,0.88064 0,1.21604c-0.16684,0.16684 
                    -0.387,0.25112 -0.60716,0.25112z" fill="#34495e"></path><path d="M119.54,72.24c-0.47472,0 -0.86,-0.38528 -0.86,-0.86v-10.32c0,-4.26732 -3.47268,-7.74 -7.74,-7.74h-22.36c-0.47472,0 -0.86,-0.38528 -0.86,-0.86c0,-0.47472 0.38528,-0.86 0.86,-0.86h22.36c5.21676,0 9.46,4.24324 9.46,9.46v10.32c0,0.47472 -0.38528,0.86 -0.86,0.86z" fill="#34495e"></path><path d="M83.42,53.32h-5.16c-0.47472,0 -0.86,-0.38528 -0.86,-0.86c0,-0.47472 0.38528,-0.86 0.86,-0.86h5.16c0.47472,0 0.86,0.38528 0.86,0.86c0,0.47472 -0.38528,0.86 -0.86,0.86z" fill="#34495e"></path><path d="M110.94,120.4h-49.88c-5.21676,
                    0 -9.46,-4.24324 -9.46,-9.46v-49.88c0,-5.21676 4.24324,-9.46 9.46,-9.46h12.04c0.47472,0 0.86,0.38528 0.86,0.86c0,0.47472 -0.38528,0.86 -0.86,0.86h-12.04c-4.26732,0 -7.74,3.47268 -7.74,7.74v49.88c0,4.26732 3.47268,7.74 7.74,7.74h49.88c4.26732,
                    0 7.74,-3.47268 7.74,-7.74v-6.88c0,-0.47472 0.38528,-0.86 0.86,-0.86c0.47472,0 0.86,0.38528 0.86,0.86v6.88c0,5.21676 -4.24324,9.46 -9.46,9.46z" fill="#34495e"></path><path d="M119.54,99.76c-0.47472,0 -0.86,-0.38528 -0.86,-0.86v-15.48c0,-0.47472 0.38528,-0.86 0.86,-0.86c0.47472,
                    0 0.86,0.38528 0.86,0.86v15.48c0,0.47472 -0.38528,0.86 -0.86,0.86z" fill="#34495e"></path></g></g></svg>

                    <h4 class="text-muted"><b>{{ __('Verifikasi Alamat Email') }}</b></h4>
                    
                    <p class="text-muted">{{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}.</p>
                    
                    <div class="row justify-content-center">
                        <form class="form-group col-md-4" method="POST" action="{{ route('verification.resend') }}" style="margin-top:3%; margin-bottom:5%">
                            @csrf
                            <button type="submit" class="btn btn-success rounded-pill" style="width:100%"><b>{{ __('Kirim Ulang Link') }}</b></button>
                        </form>

                        <div class="form-group col-md-4" style="margin-top:3%; margin-bottom:5%">
                                <a class="btn btn-light-green rounded-pill" style="width:100%" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            <b>{{ __('OK') }}</b>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                </form>
                        </div>
                    </div>

        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
