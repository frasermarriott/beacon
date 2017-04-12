@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

<div id="welcome-banner" style="margin-top:50px;">
    <div id="welcome-banner-msg">
        <h1>Welcome to beacon!</h1>
        <div id="button-container">
                    <a href="{{ route('register') }}" class="btn btn-primary btn-raised splash-call-to-action">Sign up for free now!</a>
        </div>
    </div>
</div>

<div class="container welcomepage">

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
                    Beacon is a social media website that is designed to be usable by people who do not have much experience using digital technology. Beacon aims to help older adults to keep in touch with their loved ones. With Beacon, your whole family can stay connected.
                    
                </p>
            </div>

            <div class="col-md-5">
                <img src="{{ asset('img/mockup-devices.png') }}" class="img-responsive" alt="An image of the website displayed on various devices.">
            </div>
        </div> 
    </div>
</section>

<br>
<hr>

{{-- Features --}}

<section>

    <div class="row section-spacer">

        <div class="container">
            <div class="col-md-12">
                <h1 style="text-align:center;">Features</h1>   
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 feature-image-container">
                <img src="{{ asset('img/gentleman-mobile3.jpg') }}" class="img-responsive features-image center-block" alt="An image of a gentleman using Beacon on his mobile phone.">
            </div>

            <div class="col-lg-9 col-md-9">
                <h2>Easy to Use</h2>
                <p>
                    Beacon's simple dashboard interface gives you everything you need in one place. 
                </p>

                <button type="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#myModal">Take a look</button>

                <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" data-dismiss="modal">
                            <img src="{{ asset('img/dashboard-img.png') }}" class="img-responsive center-block" alt="Preview of the Beacon dashboard">
                        </div>
                    </div>
                  </div>
                </div>

            </div>
        </div>
    </div>



    <div class="row section-spacer">
        <div class="container">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 feature-image-container">
                    <img src="{{ asset('img/gentleman-2-gallery.jpg') }}" class="img-responsive features-image center-block" alt="An image of a gentleman using the application to view photos posted by his family.">
                </div>

                <div class="col-lg-9 col-md-9">
                    <h2>Photo Sharing</h2>
                    <p>
                        No need to download email attatchments, all of your family photos displayed in an elegant gallery.
                    </p>

                    <button type="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#myModal2">Take a look</button>

                    <div id="myModal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body" data-dismiss="modal">
                                <img src="{{ asset('img/gallery-screenshot-1280x800.png') }}" class="img-responsive center-block" alt="Preview of the Beacon gallery.">
                            </div>
                        </div>
                      </div>
                    </div>

                </div>
        </div>               
    </div>



    <div class="row section-spacer">
        <div class="container">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 feature-image-container">
                <img src="{{ asset('img/gentleman-laptop2-chat.jpg') }}" class="img-responsive features-image center-block" alt="A gentleman using Beacon to chat with his family.">
            </div>

            <div class="col-lg-9 col-md-9">
                <h2>Instant Messaging</h2>
                <p>
                    Beacon's instant messaging service allows you to easily keep in touch with your loved ones throughout the day.
                </p>

                <button type="button" class="btn btn-primary btn-raised" data-toggle="modal" data-target="#myModal3">Take a look</button>

                <div id="myModal3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body" data-dismiss="modal">
                            <img src="{{ asset('img/messages-screenshot-desktop.png') }}" class="img-responsive center-block" alt="Preview of the Beacon instant messaging service.">
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

 </section>          

 

        
    </div>
</div>

 {{-- Security --}}

<section style="background:#e2ebff;">
    <div class="row section-spacer-about">
        <div class="container">
        <div class="container welcomepage">
            <div class="col-md-7">
                <h2><span class="glyphicon glyphicon-lock"> </span> Your own private social network</h2>
                <p>
                    With Beacon, the only people who can see what you share are your family members. Your personal information is not exposed to anyone else. 
                </p>
            </div>

            {{-- <div class="col-md-5">
                <img src="{{ asset('img/mockup-devices.png') }}" class="img-responsive" alt="An image of the website displayed on various devices.">
            </div> --}}
        </div> 
        </div>
    </div>
</section>

<footer>
    <span>&copy; Beacon 2017</span><br>
    <a href="{{ route('welcome') }}" style="color:#fff;">Home</a> | 
    <a href="{{ route('privacy_policy') }}" style="color:#fff;">Privacy Policy</a> | 
    <a href="{{ route('contact_us') }}" style="color:#fff;">Contact</a>
</footer>

@endsection

