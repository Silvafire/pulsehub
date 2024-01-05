@extends('layouts.app')

@section('content')
    <h1>Reset Password</h1>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
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

        <button type="submit" id="reset" class="btn btn-primary col-md-12 mb-4">
            {{ __('Enviar email para resetar a password') }}
        </button>

    </form>
@endsection
