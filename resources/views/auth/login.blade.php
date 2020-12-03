@extends('layouts.app')

@section('content')
<div class="container full-page-container">
    <div class="card" id="login-card">
        <h2 class="page-header">{{ __('Login') }}</h2>
        <div class="card-content content">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input @error('email') is-danger @enderror" name="email" type="email" placeholder="Email" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="help is-danger" role="alert">{{ $message }}</span>
                        @enderror
            
                        <span class="icon is-small is-left">
                            <x-icon name="mail"></x-icon>
                        </span>
                    </p>
                </div>
            
                <div class="field">
                    <p class="control has-icons-left">
                        <input class="input @error('password') is-danger @enderror" name="password" type="password" placeholder="Password" required autocomplete="current-password">

                        @error('password')
                            <span class="help is-danger" role="alert">{{ $message }}</span>
                        @enderror

                        <span class="icon is-small is-left">
                            <x-icon name="lock"></x-icon>
                        </span>
                    </p>
                </div>

                <div class="field">
                    <div class="control">
                        <label class="checkbox">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <hr>
            
                <div class="field">
                    <p class="control">
                        <button type="submit" class="button is-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="button is-text" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection