@extends('layouts.main')

@section('content')
@section('links')
    @include('includes._links')
@endsection
@section('content')
    @include('includes._nav')
    <main class="login">
        <section class="login__container">
            <div class="wrapper">
                <h1 class="login__title">{{ __('t.log_in_to_your_account') }}</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login__box">
                        <label for="login" class="login__label">{{ __('t.email') }}</label>
                        <input type="email" id="login" name="email"
                            class="login__input @error('email') is-invalid @enderror" value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="password" class="login__label">{{ __('t.password') }}</label>
                        <input type="password" id="password" name="password"
                            class="login__input @error('password') is-invalid @enderror"">
                        @error('password')
                            <span class="invalid-feedback text-center" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('t.remember_me') }}
                                </label>
                            </div>
                        </div>

                        <button class="login__btn"> {{ __('t.login') }}</button>
                    </div>
                </form>
                <div class="login__text-box">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="login__text--link">{{ __('t.forgot_your_password') }}</a>
                    @endif
                    <p class="login__text">{{ __('t.you_dont_have_an_account_yet') }} <a href="{{ route('register') }}"
                            class="login__text--link">{{ __('t.register') }}</a></p>
                </div>
            </div>



        </section>
    </main>
    @include('includes._footer')
@endsection
