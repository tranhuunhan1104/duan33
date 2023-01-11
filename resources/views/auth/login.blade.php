{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
{{-- <div class="container"> --}}

    {{-- <hr>
<div class="form-group row mb-0">
<div class="col-md-8 offset-md-4">
<a href="{{ url('/auth/redirect/google') }}" class="btn btn-primary"><i class="fa fa-google"></i> Google</a>
</div>
</div> --}}
<style>@import url(https://fonts.googleapis.com/css?family=Sniglet|Raleway:900);


    body, html{
        height: 100%;
        padding: 0;
        margin: 0;
        font-family: 'Sniglet', cursive;
    }
    h1{
        font-weight: normal;
        font-size: 4em;
        font-family: 'Raleway', sans-serif;
        margin: 0 auto;
        margin-top: 30px;
        width: 500px;
        color: #F90;
        text-align: center;

    }

    /* Animation webkit */
    @-webkit-keyframes myfirst
    {
        0% {margin-left: -235px}
        90% {margin-left: 100%;}
        100% {margin-left: 100%;}
    }

    /* Animation */
    @keyframes myfirst
    {
        0% {margin-left: -235px}
        70% {margin-left: 100%;}
        100% {margin-left: 100%;}
    }

    .fish{
        background-image: url('http://www.geertjanhendriks.nl/codepen/form/fish.png');
        width: 235px;
        height: 104px;
        margin-left: -235px;
        position: absolute;
        animation: myfirst 24s;
        -webkit-animation: myfirst 24s;
        animation-iteration-count: infinite;
        -webkit-animation-iteration-count: infinite;
        animation-timing-function: linear;
        -webkit-animation-timing-function: linear;
    }

    #fish{
        top: 120px;
    }

    #fish2{
        top: 260px;
        animation-delay: 12s;
        -webkit-animation-delay: 12s;
    }


    header{
        height: 160px;
        background: url('http://www.geertjanhendriks.nl/codepen/form/golf.png') repeat-x bottom;
    }

    #form{
        height: 100%;
        background-color: #98d4f3;
        overflow: hidden;
        position: relative;

    }
    form{
        margin: 0 auto;
        width: 500px;
        padding-top: 40px;
        color: white;
        position: relative;


    }
    label, input, textarea{
        display: block;
    }
    input, textarea{
        width: 500px;
        border: none;
        border-radius: 20px;
        outline: none;
        padding: 10px;
        font-family: 'Sniglet', cursive;
        font-size: 1em;
        color: #676767;
        transition: border 0.5s;
        -webkit-transition: border 0.5s;
        -moz-transition: border 0.5s;
        -o-transition: border 0.5s;
        border: solid 3px #98d4f3;
        -webkit-box-sizing:border-box;
        -moz-box-sizing:border-box;
        box-sizing:border-box;

    }
    input:focus, textarea:focus{
        border: solid 3px #77bde0;
    }

    textarea{
        height: 100px;
        resize: none;
        overflow: auto;
    }
    input[type="submit"]{
        background-color: #F90;
        color: white;
        height: 50px;
        cursor: pointer;
        margin-top: 30px;
        font-size: 1.29em;
        font-family: 'Sniglet', cursive;
        -webkit-transition: background-color 0.5s;
        -moz-transition: background-color 0.5s;
        -o-transition: background-color 0.5s;
        transition: background-color 0.5s;
    }
    input[type="submit"]:hover{
        background-color: #e58f0e;

    }
    label{
        font-size: 1.5em;
        margin-top: 20px;
        padding-left: 20px;
    }
    .formgroup, .formgroup-active, .formgroup-error{
        background-repeat: no-repeat;
        background-position: right bottom;
        background-size: 10.5%;
        transition: background-image 0.7s;
        -webkit-transition: background-image 0.7s;
        -moz-transition: background-image 0.7s;
        -o-transition: background-image 0.7s;
        width: 566px;
        padding-top: 2px;
    }

    .formgroup{
        background-image: url('http://www.geertjanhendriks.nl/codepen/form/pixel.gif');
    }
    .formgroup-active{
        background-image: url('http://www.geertjanhendriks.nl/codepen/form/octo.png');
    }
    .formgroup-error{
        background-image: url('http://www.geertjanhendriks.nl/codepen/form/octo-error.png');
        color: red;
    }</style>

<header>
	<h1>Đăng nhập !!</h1>
</header>
<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button class="btn btn-infox" type="submit" >
                            {{ __('Đăng nhập') }}
                        </button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
