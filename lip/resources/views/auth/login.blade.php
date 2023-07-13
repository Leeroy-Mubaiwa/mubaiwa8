@extends('layouts.app')

@section('content')

<style>
      body {
        background-image: linear-gradient(to right, #ff6a00, #ee0979);
      }

      .login-container {
        margin-top: 100px;
      }

      .login-card {
        width: 400px;
        margin: 0 auto;
        border: none;
        border-radius: 10px;
        background-color: rgba(255, 255, 255, 0.9);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        padding: 40px;
      }

      .login-card h1 {
        font-size: 36px;
        font-weight: bold;
        text-transform: uppercase;
        color: #333;
        margin-bottom: 30px;
        text-align: center;
      }

      .login-card input[type="email"],
      .login-card input[type="password"] {
        border-radius: 20px;
        padding: 10px 20px;
        margin-bottom: 20px;
        border: none;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        font-size: 16px;
      }

      .login-card button[type="submit"] {
        background-color: #ff6a00;
        color: #fff;
        border: none;
        border-radius: 20px;
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bold;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        cursor: pointer;
      }
    </style>
  </head>

    <div class="container login-container">
      <div class="card login-card">
        <h1 >{{ __('Login') }}</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="row mb-3">
                <label for="email" class="col-form-label">{{ __('Email Address') }}</label>

                <div >
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-form-label">{{ __('Password') }}</label>

                <div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>



                <div >
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>

        </form>
      </div>
    </div>


@endsection
