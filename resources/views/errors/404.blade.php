@extends('layouts.web')

@section('title', 'The page you were looking for doesn\'t exist (404)')

@section('content')

    <div class="error-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-page-image wow fadeInUp">
                       <br><br><br><br><br><br><br><br><br><br>

                    </div>
                    <div class="error-page-content">
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Oops! page not found</h2>
                        </div>
                        <div class="error-page-content-body">
                            <p class="wow fadeInUp" data-wow-delay="0.2s">The page you are looking for does not exist.</p>
                            <a class="btn-default wow fadeInUp" data-wow-delay="0.4s" href="./">Back to Homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
