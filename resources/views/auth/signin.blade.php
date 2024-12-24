@extends('layout.app')

@section('title', 'Sign In')

@section('content')
<div class="auth-page">
    <div class="container">
        <h2>Sign In to Your Account</h2>
        <form action="/signin" method="POST" class="auth-form">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn-primary">Sign In</button>
        </form>
        <p>Don't have an account? <a href="/signup">Sign Up</a></p>
    </div>
</div>
@endsection
