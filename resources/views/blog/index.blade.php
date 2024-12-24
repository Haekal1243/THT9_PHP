@extends('layout.app')

@section('title', 'Team RRQ Blogs')

@section('content')
<div class="blog-list">
    <div class="container">
        <h1>Team RRQ Blogs</h1>
        <p>Explore articles, insights, and behind-the-scenes stories from Team RRQ.</p>

        <div class="blog-cards">
            @foreach($blogs as $blog)
            <div class="blog-card">
                <img src="{{ asset('images/blog-placeholder.jpg') }}" alt="Blog Image">
                <div class="blog-card-content">
                    <h3><a href="/blog/{{ $blog['id'] }}">{{ $blog['title'] }}</a></h3>
                    <p>{{ $blog['excerpt'] }}</p>
                    <a href="/blog/{{ $blog['id'] }}" class="btn-primary">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
