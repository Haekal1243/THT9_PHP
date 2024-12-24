@extends('layout.app')

@section('title', 'Profile')

@section('content')
<div class="profile">
    <div class="container">
        <h1>Welcome, {{ Auth::user()->name }}</h1>
        <p>Email: {{ Auth::user()->email }}</p>

        <h2>Your Activities</h2>
        <ul>
            <li>Commented on "RRQ Wins MPL Championship"</li>
            <li>Shared "RRQ’s Gaming House Tour"</li>
            <li>Favorited "Interview with Lemon"</li>
        </ul>

        <a href="/logout" class="btn-primary">Logout</a>
    </div>
</div>
@endsection
