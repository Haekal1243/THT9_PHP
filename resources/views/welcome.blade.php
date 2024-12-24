@extends('layout.app')

@section('title', 'Welcome to Team RRQ')

@section('content')
<div class="hero" style="background: url('{{ asset('images/hero-bg.jpg') }}') no-repeat center center/cover; position: relative;">
    <div class="overlay"></div>
    <div class="container">
        <h1>Welcome to Team RRQ</h1>
        <p>The home of champions in the world of esports. Stay updated with the latest news, events, and insights from the team.</p>
        <a href="/blog" class="btn-primary">Explore Blogs</a>
    </div>
</div>

<div class="about-team">
    <div class="container">
        <div class="about-content">
            <h2>About Team RRQ</h2>
            <p>Team RRQ (Rex Regum Qeon) is one of the most iconic esports teams in Southeast Asia. With numerous championships in games like <strong>Mobile Legends</strong>, <strong>PUBG Mobile</strong>, and <strong>Valorant</strong>, RRQ represents excellence, dedication, and the spirit of gaming.</p>
        </div>
    </div>
</div>

<div class="features">
    <div class="container grid">
        <div class="feature">
            <img src="{{ asset('images/trophy.jpeg') }}" alt="Trophy">
            <h3>Championship Wins</h3>
            <p>Discover how Team RRQ has dominated the esports scene with multiple championships worldwide.</p>
        </div>
        <div class="feature">
            <img src="{{ asset('images/team.jpg') }}" alt="Team">
            <h3>Meet the Team</h3>
            <p>Learn more about the players and staff behind the success of Team RRQ.</p>
        </div>
        <div class="feature">
            <img src="{{ asset('images/events.jpeg') }}" alt="Events">
            <h3>Upcoming Events</h3>
            <p>Stay informed about upcoming tournaments, meet-ups, and more!</p>
        </div>
    </div>
</div>

<div class="latest-news">
    <div class="container">
        <h2>Latest News</h2>
        <div class="news-cards">
            <div class="news-card">
                <h3><a href="#">RRQ wins the MPL Championship Season 12</a></h3>
                <p>An incredible journey to the championship with outstanding gameplay.</p>
            </div>
            <div class="news-card">
                <h3><a href="#">New roster announcement for Valorant division</a></h3>
                <p>Meet the new players joining our Valorant team for the upcoming season.</p>
            </div>
            <div class="news-card">
                <h3><a href="#">Fan meet-up highlights from Jakarta</a></h3>
                <p>Exciting moments shared with our beloved fans during the latest meet-up.</p>
            </div>
        </div>
    </div>
</div>

@endsection
`   