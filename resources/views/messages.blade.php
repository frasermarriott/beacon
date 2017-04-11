@extends('layouts.app')

@section('title', 'Messages')

@section('content')


<div id="subnav">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-2">
                <div class="button-wrapper">
                <a href="{{ route('home') }}" class="btn btn-default btn-lg"> < Back</a>
                </div>
            </div>

            <div class="col-md-8 col-sm-8 col-xs-8" style="text-align:center;">
                <h2>Messages</h2>
            </div>
        
    </div>
</div>


<div class="container push-top">


    <div class="row">
        <div class="col-xl-12">

          {{-- <img src="{{ asset('img/messages-mockup.png') }}" class="img-responsive"> --}}

            @foreach($users as $user)
                    <table class="table">
                        <tr>
                            <td>
                                <img src="{{$user->avatar}}">
                                {{$user->first_name}}
                            </td>
                            <td>
                                <a href="{{route('message.read', ['id'=>$user->id])}}" class="btn btn-success pull-right">Send Message</a>
                            </td>
                        </tr>
                    </table>
            @endforeach



            
        </div>

    </div>

</div>


@endsection
