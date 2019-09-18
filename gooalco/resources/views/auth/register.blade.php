@extends('layouts.app')

@section('content')
<section class="login-page fullscreen overlay-blue">
        <div class="login-box">

                    <form id="login-form" method="POST" action="{{ route('register') }}">
                            <div class="text-center">
                                    <h3 class="uppercase">{{__('login.Register')}}</h3>
                                    </div>
                        @csrf

                        <input class="form-control mt30" placeholder="{{__('login.First Name')}}" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input class="form-control mt15" placeholder="{{__('login.Last Name')}}" id="LastName" type="text" class="form-control @error('name') is-invalid @enderror" name="LastName" value="{{ old('LastName') }}" required autocomplete="LastName" autofocus>

                                @error('Last Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         

                               <input class="form-control mt15" placeholder="{{ __('login.E-Mail Address') }}" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           

                  
                                <input class="form-control mt15" placeholder="{{ __('login.Password') }}" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         

                        
                                <input class="form-control mt15" placeholder="{{ __('login.Confirm Password') }}" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            
                        

                            <div class="mt15 text-center">
                            
                                <button type="submit" class="btn btn-border btn-blue btn-dark nomargin">
                                    {{ __('login.Register') }}
                                </button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
