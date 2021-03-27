<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" style="padding-top: 50px;">
            <div class="card">
                <div class="card-header text-center"><h1>Admin Login</h1></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group row">
                                        {{-- <label for="email" class="col-md-4 col-form-label text-md-right"></label> --}}

                                        <div class="col-md-10">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                       {{--  <label for="password" class="col-md-4 col-form-label text-md-right"></label> --}}

                                        <div class="col-md-10">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="passwordnumber" placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                         
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-10 ">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-8 offset-md-2">
                                            <div class="form-check">
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-10 offset-md-2">
                                            <button type="submit" class="btn btn-success">
                                                {{ __('Login') }}
                                            </button>
                                              <button type="reset" class="btn btn-primary">
                                                {{ __('Reset') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6" style="background-color: #ff376e;">
                                <div class="card-title text-white">
                                    <h1 style="margin-top: 16px;">Shri Datta Property Pvt Ltd</h1>
                                </div>
                                <div class="card-body text-white">
                                    <p class="text-justify">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 </div>
</body>
</html>

