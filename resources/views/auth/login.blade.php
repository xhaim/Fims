@extends('layouts.app')

@section('content')
<section class="login-clean">
    
    <form id="form_box_shadow" method="POST" action="{{route('login')}}">
        @csrf
        <div class="illustration">
            <h1 id="heading-form">Welcome back!Log in to your account</h1>
        </div>
        <div class="mb-3">
            <input  class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Username"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="mb-3" id="password-container">
            <input class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" type="password" name="password" placeholder="Password" id="password">
            <div class="toggle-password " onclick="showPasswordToggleVisibility()">
                <i id="showPasswordToggle" id="icon-eye" class="fas fa-eye"></i>
            </div>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="mb-3">
            <button class="btn btn-primary d-block w-100" id="log-in-button" type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
        </div>
    </form>
</section>
@endsection
