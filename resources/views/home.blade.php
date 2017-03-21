@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard - Logged in as <strong>{{ ucwords(\Auth::user()->name) }}</strong></div>

                <div class="panel-body">
                    <img src="{{ asset('img/dashboard-mockup.png') }}" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
