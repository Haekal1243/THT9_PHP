@extends('layout.app')

@section('title', $blog['title'])

@section('content')
<div class="blog-post">
    <div class="container">
        <h1>{{ $blog['title'] }}</h1>
        <p>{{ $blog['content'] }}</p>
        <div class="social-share">
            <p>Share this post:</p>
            <a href="#" class="btn-primary">Share on Facebook</a>
            <a href="#" class="btn-primary">Share on Twitter</a>
        </div>
        <a href="/blog" class="btn-secondary">Back to Blogs</a>
    </div>
</div>
@endsection
