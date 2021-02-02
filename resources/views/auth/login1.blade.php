@extends('layouts.auth')
@section('content')

</head>
<body>
    <h1>V<span>e</span>gg</span><span>U</span>p</h1>
    <div class="wthree-form">
                <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</div>
        <div class="w3l-login form">
               @isset($url)
                    <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                    @else
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @endisset
                        @csrf
                  
<br><br>

                <div class="form-sub-w3">
                    <input type="email" name="email" placeholder="entrer votre email" required=""/>
           
                      @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-sub-w3">
                    <input type="password" name="password" placeholder="password" required=""/>
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>


                <label class="anim">
                   <input class="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <span>Remember Me</span> 
                </label>

                     
     
                         <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary form-submit" names="singin" id="singin ">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ url('register/restau') }}">
                                        <u>{{ __("s'inscrire") }}</u>
                                    </a>
                                @endif
                            </div>
                             
                
             
        
        
</body>
</html>

@endsection
