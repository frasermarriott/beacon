@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div id="subnav">
    <div class="container">
        <div class="col-md-6 col-sm-6 welcome-greeting">
            {{-- Check the time of day and display appropriate greeting. --}}
            @if (Carbon::now()->hour < 12)
                <h1>Good morning, {{ ucwords(\Auth::user()->first_name) }}</h1>
            @elseif (Carbon::now()->hour > 11 && Carbon::now()->hour < 18)
                <h1>Good afternoon, {{ ucwords(\Auth::user()->first_name) }}</h1>
            @elseif(Carbon::now()->hour > 17) 
                <h1>Good evening, {{ ucwords(\Auth::user()->first_name) }}</h1>
            @else
                <h1>Welcome, {{ ucwords(\Auth::user()->first_name) }}</h1>
            @endif  
        </div>

        {{-- OpenWeatherMap --}}
        <!--<div class="col-md-6 col-sm-6 dashboard-weather">
            <div class="hidden">
                <form id="weather_api">
                    {{-- hardcoded location temporarily, will get users location from database --}}
                    <input type="hidden" id="city_name" value="Edinburgh">
                </form>
            </div>

            <h1 class="weather"><div class="weather_temp"></div>&deg;C, <div class="weather_desc"></div></h1>

        </div>-->




    </div>
</div>

<div id="dash-fullsize">
<div class="dashboard-nav">



<div id="tiles">

    <div class="row">
        <a href="{{ route('messages') }}">
            <div class="col-md-4 dashboard-item hvr-curl-top-right dash-tile-messages">
                <div class="dashboard-icon messages">
                    <span class="centerer"></span>

                    <img src="{{ asset('img/dashboard/messages.svg') }}" class="centered">

                    <h2 class="centered tile-title">Messages</h2>

                </div>
            </div>
        </a>

        <a href="{{ route('newsfeed') }}">
            <div class="col-md-4 dashboard-item hvr-curl-top-right dash-tile-newsfeed">
                <div class="dashboard-icon newsfeed">
                    <span class="centerer"></span>

                    <img src="{{ asset('img/dashboard/newsfeed.svg') }}" class="centered">

                    <h2 class="centered tile-title">Activity Feed</h2>

                </div>
            </div>
        </a>

        <a href="{{ route('photos') }}">
            <div class="col-md-4 dashboard-item hvr-curl-top-right dash-tile-photos">
                <div class="dashboard-icon photos">
                    <span class="centerer"></span>

                    <img src="{{ asset('img/dashboard/photos.svg') }}" class="centered">

                    <h2 class="centered tile-title">Photos</h2>

                </div>
            </div>
        </a>

    </div>


    <div class="row">
        <a href="{{ route('family') }}">
            <div class="col-md-4 dashboard-item hvr-curl-top-right dash-tile-family">
                <div class="dashboard-icon family">
                    <span class="centerer"></span>

                    <img src="{{ asset('img/dashboard/family.svg') }}" class="centered">

                    <h2 class="centered tile-title">My Family</h2>

                </div>
            </div>
        </a>

        <a href="{{ route('profile') }}">
            <div class="col-md-4 dashboard-item hvr-curl-top-right dash-tile-profile">
                <div class="dashboard-icon profile">
                    <span class="centerer"></span>

                    <img src="{{ asset('img/dashboard/profile.svg') }}" class="centered">

                    <h2 class="centered tile-title">My Profile</h2>

                </div>       
            </div>
        </a>

        <a href="{{ route('help-and-settings') }}">
            <div class="col-md-4 dashboard-item hvr-curl-top-right dash-tile-settings">
                <div class="dashboard-icon settings">
                    <span class="centerer"></span>

                    <img src="{{ asset('img/dashboard/settings.svg') }}" class="centered">

                    <h2 class="centered tile-title">Help &amp; Settings</h2>

                </div>       
            </div>
        </a>

    </div>

</div> {{-- /tiles --}}



</div>
</div> <!-- /dash-fullsize -->






{{--    MOBILE    --}}




<div id="dash-mobile">
<div class="dashboard-nav">



<div id="tiles">

    <div class="row">
        <a href="{{ route('messages') }}">
            <div class="col-md-6 col-sm-6 col-xs-6 dashboard-item hvr-curl-top-right main-colour">
                <div class="dashboard-icon messages">
                    <span class="centerer"></span>

                    <img src="{{ asset('img/dashboard/messages.svg') }}" class="centered img-responsive">

                    <h2 class="centered tile-title">Messages</h2>

                </div>
            </div>
        </a>

        <a href="{{ route('newsfeed') }}">
            <div class="col-md-6 col-sm-6 col-xs-6 dashboard-item hvr-curl-top-right alt-colour">
                <div class="dashboard-icon newsfeed">
                    <span class="centerer"></span>

                    <img src="{{ asset('img/dashboard/newsfeed.svg') }}" class="centered img-responsive">

                    <h2 class="centered tile-title">Activity Feed</h2>

                </div>
            </div>
        </a>


    </div>


    <div class="row">

        <a href="{{ route('photos') }}">
            <div class="col-md-6 col-sm-6 col-xs-6 dashboard-item hvr-curl-top-right alt-colour">
                <div class="dashboard-icon photos">
                    <span class="centerer"></span>

                    <img src="{{ asset('img/dashboard/photos.svg') }}" class="centered img-responsive">

                    <h2 class="centered tile-title">Photos</h2>

                </div>
            </div>
        </a>

        <a href="{{ route('family') }}">
            <div class="col-md-6 col-sm-6 col-xs-6 dashboard-item hvr-curl-top-right main-colour">
                <div class="dashboard-icon family">
                    <span class="centerer"></span>

                    <img src="{{ asset('img/dashboard/family.svg') }}" class="centered img-responsive">

                    <h2 class="centered tile-title">My Family</h2>

                </div>
            </div>
        </a>

    </div>


    <div class="row">

        <a href="{{ route('profile') }}">
            <div class="col-md-6 col-sm-6 col-xs-6 dashboard-item hvr-curl-top-right main-colour">
                <div class="dashboard-icon profile">
                    <span class="centerer"></span>

                    <img src="{{ asset('img/dashboard/profile.svg') }}" class="centered img-responsive">

                    <h2 class="centered tile-title">My Profile</h2>

                </div>       
            </div>
        </a>

        <a href="{{ route('help-and-settings') }}">
            <div class="col-md-6 col-sm-6 col-xs-6 dashboard-item hvr-curl-top-right alt-colour">
                <div class="dashboard-icon settings">
                    <span class="centerer"></span>

                    <img src="{{ asset('img/dashboard/settings.svg') }}" class="centered img-responsive">

                    <h2 class="centered tile-title">Help &amp; Settings</h2>

                </div>       
            </div>
        </a>

    </div>

</div> {{-- /tiles --}}



</div>
</div> <!-- /dash-mobile -->

@endsection
