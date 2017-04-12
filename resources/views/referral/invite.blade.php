@extends('layouts.app')

@section('title', 'Invite your family to beacon')

@section('content')
<div id="wrap">
<div id="centered">
<div class="container push-top">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Invite a family member to join Beacon</div>
                <div class="panel-body">

                <p>To add a family member to your beacon family, simple ask them to sign up and visit this link </p>
                <pre id="referral_link">https://beacon.pm/referral/{{Auth::user()->linked_to_family}}</pre>


                    
                        {{ csrf_field() }}

                        {{-- <input class="hidden" id="family_id" name="family_id" value="{{$id}}"></input>                        --}}
                        <div class="form-group">
                            <div class="col-md-12 center-block">
                                <button type="button" class="btn btn-primary btn-raised" data-clipboard-target="#referral_link">
                                    Copy link
                                </button>

                            </div>
                        </div>
                    


                </div>
            </div>
        </div>
    </div>
</div>
</div> <!-- /centered -->
</div> <!-- /wrap -->
@endsection
