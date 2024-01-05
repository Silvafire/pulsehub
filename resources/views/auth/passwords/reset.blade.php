@extends('layouts.app')

@section('content')
    <h1>Resetar palavra passe</h1>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">


        <div class="txt_field">
            <input type="text" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                required autocomplete="email" autofocus>
            <span></span>
            <label for="email">{{ __('Email Address') }}</label>
            <a class=" mail"><i class="fa-solid fa-envelope"></i></a>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="txt_field">
            <input type="password" class="@error('password') is-invalid @enderror" name="password"
                value="{{ old('password') }}" required autocomplete="password" autofocus>
            <span></span>
            <label for="password">{{ __('Nova Password') }}</label>
            <a class=" password"><i class="fa-solid fa-envelope"></i></a>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="txt_field">
            <input id="password-confirm" type="password" class="@error('password') is-invalid @enderror" name="password"
                value="{{ old('password') }}" required autocomplete="password" autofocus>
            <span></span>
            <label for="password-confirm">{{ __('Confirmar Password') }}</label>
            <a class=" password-confirm"><i class="fa-solid fa-envelope"></i></a>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" id="reset" class="btn btn-primary col-md-12 mb-4">
            {{ __('Resetar password') }}
        </button>

    </form>
@endsection
