@extends('layouts.login.login')

@section('content')
    <div class="bg-img">
        <div class="content">
            <header>Welcome Back!</header>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" required placeholder="Email or Phone" class="@error('password') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                </div>
                @error('email')
                    <span class="invalid-feedback text-red"   role="alert">
                        <strong >{{ $message }}</strong>
                    </span>
                @enderror
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" class="pass-key @error('password') is-invalid @enderror" required
                        placeholder="Password" name="password" required autocomplete="current-password">
                    <span class="show">SHOW</span>
                </div>
                <div class="pass">
                    <a href="#">Forgot Password?</a>
                </div>
                <div class="field">
                    <input type="submit" value="LOGIN">
                </div>
            </form>
        </div>
    </div>
@endsection
