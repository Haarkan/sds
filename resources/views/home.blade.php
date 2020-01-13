@extends('layouts.app')

@section('content')
<main class="page lanidng-page">
        <section class="portfolio-block block-intro">
            <div class="container">
                <div class="about-me">
                    <p>Hello! <strong>Erasmus</strong>. This website is designed for making the preparation of the Learning agreement easier for you.You can select courses and get your courses section of the learning agreement easily.</p>
                    @if (Auth::check()) <a class="btn btn-outline-primary" role="button" href="courses">Courses</a></div>
                    @else <a class="btn btn-outline-primary" role="button" href="login">Login</a></div>
                    @endif
            </div>
        </section>
    </main>
</body>
@endsection
