@extends('layouts.app')

@section('content')
<section class="login-page fullscreen overlay-blue">
        <div class="login-box">

                    <form method="POST" action="{{ route('login') }}" id="login-form">
                            <div class="text-center">
                                    <h3 class="uppercase">{{__('login.Login')}}</h3>
                                    </div>
                        @csrf

                                <input id="email" class="form-control mt15" placeholder="{{__('login.E-Mail Address')}}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                                <input id="password" class="form-control mt15" placeholder="{{ __('login.Password') }}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          

                                <div class="control-group mt15">
                            
                                <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label  for="remember">
                                        {{ __('login.Remember Me') }}
                                    </label>
                          </div>

                        <div class="mt15 text-center">
                            
                                <button type="submit" class="btn btn-border btn-blue btn-dark nomargin">
                                    {{ __('login.Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <div class="mt10 text-center">
                                    <a  href="{{ route('password.request') }}">
                                        {{ __('login.Forgot Your Password?') }}
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
</section>

@endsection
