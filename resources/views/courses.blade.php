@extends('layouts.app')

@section('content')
    <main class="page projets-page">
        <section class="portfolio-block project-no-images">
            <div class="container">
                <div class="heading">
                    <h2>Available Courses</h2>
                </div>
                @foreach($courses as $courses )
                    <div class="well" id="well">
                            <h2>{{$courses->course_name}}</h2>
                            <h3>{{$courses->university}}</h3>
                            <h4>Credit :{{$courses->credits}}</h4><a class="btn btn-outline-primary btn-sm" role="button" href="{{ url('add-to-cart/'.$courses->id) }}">Add To Session</a>

                        </div>
                        <div id="alma">{{$courses->details}}</div>

                    @endforeach
                </div>
        </section>
    </main>
@endsection