@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="dashboard-nav">

    <div class="container">
       {{--  <div class="row">
            <div class="col-md-12 dashboard-heading">
            <br><br>
            <h1>Welcome, {{ ucwords(\Auth::user()->name) }}</h1>

            <br>
            Weather: <div id="weather_temp"></div>°C

            </div>
        </div> --}}

        <div class="row">
            <div class="col-md-6 dashboard-heading">
                <h1>Welcome, {{ ucwords(\Auth::user()->name) }}</h1>
            </div>


            <div class="col-md-6 dashboard-heading dashboard-weather">
                <div class="hidden">
                    <form id="weather_api">
                        {{-- hardcoded location temporarily, will get users location from database --}}
                        <input type="hidden" id="city_name" value="Edinburgh">
                    </form>
                </div>


                <h1 class="weather"><div id="weather_temp"></div>°C, <div id="weather_desc"></div></h1>

            </div>
        </div>

    </div>

    




    <div class="row">
        <div class="col-md-4 dashboard-item" style="background-color:#9e4c3b">

        </div>

        <div class="col-md-4 dashboard-item" style="background-color:#d2ab59">
        
        </div>

        <div class="col-md-4 dashboard-item" style="background-color:#549767">
        
        </div>

    </div>


    <div class="row">

        <div class="col-md-4 dashboard-item" style="background-color:#34908f">

        </div>

        <div class="col-md-4 dashboard-item" style="background-color:#756099">
        
        </div>

        <div class="col-md-4 dashboard-item" style="background-color:#346ca4">
        
        </div>

    </div>




{{--     <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard - Logged in as <strong>{{ ucwords(\Auth::user()->name) }}</strong></div>

                <div class="panel-body">
                    <img src="{{ asset('img/dashboard-mockup.png') }}" class="img-responsive">
                </div>
            </div>
        </div>
    </div> --}}

</div>
@endsection
