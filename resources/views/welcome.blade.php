@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

<div id="welcome-banner" style="margin-top:50px;">
    <div id="welcome-banner-msg">
        <h1>Welcome to beacon!</h1>
        <div id="button-container">
                    <a href="{{ route('register') }}" class="btn btn-primary btn-raised splash-call-to-action">Sign up now!</a>
                </div>
    </div>
</div>

<div class="container">

{{--     <div class="row">
        <div class="col-md-12">

            <section>

                <img src="{{ asset('img/dashboard-screenshot.png') }}" class="img-responsive banner-image" style="max-height:400px;">



                <div id="button-container">
                    <a href="{{ route('register') }}" class="btn btn-primary btn-raised splash-call-to-action">Sign up now!</a>
                </div>

            </section>

        </div>
    </div> --}}



{{-- About --}}

<section>
    <div class="row section-spacer-about">
        <div class="container">
            <div class="col-md-7">
                <h2>About beacon</h2>
                <p>
                    Beacon is a social media website that is designed to be usable by people who do not have much experience using digital technology. The main aim of the website is to help older adults to keep in touch with their loved ones.  
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pretium sagittis mattis. Integer egestas magna in turpis lobortis, ut accumsan tellus convallis. Aliquam vulputate, ipsum vitae viverra malesuada, quam quam blandit nisl, at egestas tortor lorem quis tellus. Curabitur diam neque, lobortis sit amet maximus at, accumsan sed lorem. In nisl justo, volutpat ut libero vel, pretium finibus lacus. Fusce convallis justo augue, eu sagittis quam luctus quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean varius non elit et dictum.
                </p>
            </div>

            <div class="col-md-5">
                <img src="{{ asset('img/mockup-devices.png') }}" class="img-responsive">
            </div>
        </div> 
    </div>
</section>

<hr>

{{-- Features --}}

<section>

    <div class="row section-spacer">

        <div class="container">
            <div class="col-md-12">
                <h1 style="text-align:center;">Features</h1>
                <hr>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 feature-image-container">
                <img src="{{ asset('img/gentleman-mobile3.jpg') }}" class="img-responsive features-image center-block">
            </div>

            <div class="col-lg-8 col-md-8">
                <h2>Easy to Use</h2>
                <p>
                    Aenean pretium sagittis mattis. Integer egestas magna in turpis lobortis, ut accumsan tellus convallis. Aliquam vulputate, ipsum vitae viverra malesuada, quam quam blandit nisl, at egestas tortor lorem quis tellus. Curabitur diam neque, lobortis sit amet maximus at, accumsan sed lorem.
                </p>
            </div>
        </div>
    </div>



    <div class="row section-spacer">
        <div class="container">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 feature-image-container">
                    <img src="{{ asset('img/gentleman-2-gallery.jpg') }}" class="img-responsive features-image center-block">
                </div>

                <div class="col-lg-8 col-md-8">
                    <h2>Photo Sharing</h2>
                    <p>
                    Aenean pretium sagittis mattis. Integer egestas magna in turpis lobortis, ut accumsan tellus convallis. Aliquam vulputate, ipsum vitae viverra malesuada, quam quam blandit nisl, at egestas tortor lorem quis tellus. Curabitur diam neque, lobortis sit amet maximus at, accumsan sed lorem.
                </p>
                </div>
        </div>               
    </div>



    <div class="row section-spacer">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 feature-image-container">
                <img src="{{ asset('img/gentleman-laptop2-chat.jpg') }}" class="img-responsive features-image center-block">
            </div>

            <div class="col-lg-8 col-md-8">
                <h2>Instant Messaging</h2>
                <p>
                    Aenean pretium sagittis mattis. Integer egestas magna in turpis lobortis, ut accumsan tellus convallis. Aliquam vulputate, ipsum vitae viverra malesuada, quam quam blandit nisl, at egestas tortor lorem quis tellus. Curabitur diam neque, lobortis sit amet maximus at, accumsan sed lorem.
                </p>
            </div>
        </div>
    </div>

 </section>          

            

        
    </div>
</div>

<footer>
    &copy; Beacon 2017
</footer>

@endsection

