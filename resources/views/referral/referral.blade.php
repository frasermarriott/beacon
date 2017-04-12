@extends('layouts.app')

@section('title', 'Join your family on beacon')

@section('content')
<div id="wrap">
<div id="centered">
<div class="container push-top">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">You've been invited to join your family on beacon</div>
                <div class="panel-body">


                    <form class="form-horizontal" role="form" method="POST" action="{{ route('confirm_referral') }}">
                        {{ csrf_field() }}

                        <input class="hidden" id="family_id" name="family_id" value="{{$id}}"></input>                       
                        <div class="form-group">
                            <div class="col-md-12 center-block">
                                <button type="submit" class="btn btn-primary btn-raised">
                                    Join Family
                                </button>

                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
</div> <!-- /centered -->
</div> <!-- /wrap -->
@endsection
