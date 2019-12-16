@extends('layouts.app')

@section('content')
<main class="page lanidng-page">
        <section class="portfolio-block block-intro">
            <div class="container">
                <div class="avatar" style="background-image:url(&quot;assets/img/avatars/avatar.jpg&quot;);"></div>
                <div class="about-me">
                    <p>Hello! <strong>Erasmus</strong>. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla euismod tellus eget volutpat. Aliquam rhoncus ut nunc at iaculis. Nam fringilla nulla in velit viverra, eu scelerisque odio tincidunt.</p><a class="btn btn-outline-primary" role="button" href="#">Lorem</a></div>
            </div>
        </section>
        <section class="portfolio-block photography">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"></a></div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"></a></div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#"></a></div>
                </div>
            </div>
        </section>
        <section class="portfolio-block skills">
            <div class="container">
                <div class="heading">
                    <h2>Special Skills</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-star-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Lorem ipsum dolor sit amet</h3>
                                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-lightbulb-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Lorem ipsum dolor sit amet</h3>
                                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-gear-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Lorem ipsum dolor sit amet</h3>
                                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <section class="portfolio-block website gradient">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-5 offset-lg-1 text">
                    <h3>Lorem</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eget velit ultricies, feugiat est sed, efr nunc, vivamus vel accumsan dui. Quisque ac dolor cursus, volutpat nisl vel, porttitor eros.</p>
                </div>
                <div class="col-md-12 col-lg-5">
                    <div class="portfolio-laptop-mockup">
                        <div class="screen">
                            <div class="screen-content" style="background-image:url(&quot;assets/img/tech/image6.png&quot;);"></div>
                        </div>
                        <div class="keyboard"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="page-footer">
        <div class="container">
            <div class="links"><a href="#">About me</a></div>
        </div>
    </footer>
</body>
@endsection
