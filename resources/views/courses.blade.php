@extends('layouts.app')

@section('content')
    <main class="page projets-page">
        <section class="portfolio-block project-no-images">
            <div class="container">
                <div class="heading">
                    <h2>Recent Work</h2>
                </div>
                @foreach($courses as $courses )
                    <div class="well">
                            <h2>{{$courses->course_name}}</h2>
                            <h3>{{$courses->university}}</h3>
                            <h4>Lorem ipsum dolor sit amet</h4><a class="btn btn-outline-primary btn-sm" role="button" href="{{ url('add-to-cart/'.$courses->id) }}">See More</a>
                            </div>
                    @endforeach
                </div>
        </section>
    </main>
    <footer class="page-footer">
        <div class="container">
            <div class="links"><a href="#">About me</a><a href="#">Contact me</a><a href="#">Projects</a></div>
        </div>
    </footer>
@endsection