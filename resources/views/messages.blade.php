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
</div>





<div class="container push-top" style="margin-top:200px;">


  <div class="jumbotron list-content center-block">
    <ul class="list-group">

      <h2>{{ucwords(Auth::user()->first_name)}} {{ucwords(Auth::user()->surname)}}'s Family</h2>

      <br>

        @foreach($users as $user)
              <li href="#" class="list-group-item text-left">
                @if($user->id !== Auth::user()->id)
                    <a href="{{route('message.read', ['id'=>$user->id])}}">
                        <img class="img-thumbnail" src="{{$user->avatar}}">
                    </a>
                    
                    <label class="name user-name">
                        <a href="{{route('message.read', ['id'=>$user->id])}}">{{ucwords($user->first_name)}} {{ucwords($user->surname)}}</a><br>
                    </label>
                @endif
           {{--      @if($user->id == Auth::user()->id)
                    <a href="#">{{ucwords($user->first_name)}} {{ucwords($user->surname)}}</a><br>
                @endif --}}
                @if($user->id !== Auth::user()->id)
                    <label class="pull-right list-send-msg-btn">
                        <a href="{{route('message.read', ['id'=>$user->id])}}" class="btn btn-success btn-xl btn-raised">View Messages</a>
                    </label>
                @endif
                <div class="break"></div>
              </li>
        @endforeach

    </ul>
  </div>
</div>




@endsection
