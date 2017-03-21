@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            {{-- <div class="panel panel-default">
                <div class="panel-heading">Splash page</div>

                <div class="panel-body">
                    Welcome
                </div>
            </div> --}}

            <section>

                <img src="http://placehold.it/750x250" class="img-responsive banner-image">

                <div id="button-container">
                    <a href="{{ route('register') }}" class="btn btn-primary btn-raised splash-call-to-action">Sign up now!</a>
                </div>

            </section>

            <hr><br>

            <section>

            <h3>Information about the website</h3>
                <div class="col-md-8">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pretium sagittis mattis. Integer egestas magna in turpis lobortis, ut accumsan tellus convallis. Aliquam vulputate, ipsum vitae viverra malesuada, quam quam blandit nisl, at egestas tortor lorem quis tellus. Curabitur diam neque, lobortis sit amet maximus at, accumsan sed lorem. In nisl justo, volutpat ut libero vel, pretium finibus lacus. Fusce convallis justo augue, eu sagittis quam luctus quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean varius non elit et dictum.
                    </p>
                </div>

                <div class="col-md-4">
                    <img src="http://placehold.it/350x350" class="img-responsive">
                </div>
                

            </section>

            <hr><br>

            <h3>Features</h3>
                <div class="col-md-7">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pretium sagittis mattis. Integer egestas magna in turpis lobortis, ut accumsan tellus convallis. Aliquam vulputate, ipsum vitae viverra malesuada, quam quam blandit nisl, at egestas tortor lorem quis tellus. Curabitur diam neque, lobortis sit amet maximus at, accumsan sed lorem. In nisl justo, volutpat ut libero vel, pretium finibus lacus. Fusce convallis justo augue, eu sagittis quam luctus quis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean varius non elit et dictum.
                    </p>
                </div>

                <div class="col-md-5">
                    <img src="{{ asset('img/mockup-devices.png') }}" class="img-responsive">
                    {{-- <img src="http://placehold.it/450x350" class="img-responsive"> --}}
                </div>
                

            </section>

            <br><br>

        </div>
    </div>
</div>
@endsection

