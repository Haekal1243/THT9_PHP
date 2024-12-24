@extends('layout.app')

@section('title', 'Sign Up')

@section('content')
<div class="auth-page">
    <div class="container">
        <h2>Create a New Account</h2>
        <form action="/signup" method="POST" class="auth-form">
            @csrf
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <button type="submit" class="btn-primary">Sign Up</button>
        </form>
        <p>Already have an account? <a href="/signin">Sign In</a></p>
    </div>
</div>
@endsection
