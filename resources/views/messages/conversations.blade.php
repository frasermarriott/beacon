@extends('layouts.chat')

@section('content')
    <div class="chat-history" id="chat-history" style="overflow:auto !important;">
        <ul id="talkMessages">

            @foreach($messages as $message)
                @if($message->sender->id == auth()->user()->id)
                    <li class="clearfix" id="message-{{$message->id}}">
                        <div class="message-data align-right">
                            <span class="message-data-time" >{{$message->humans_time}} ago</span> &nbsp; &nbsp;
                            <span class="message-data-name" >{{ucwords($message->sender->first_name)}}</span>
                            <a href="#" class="talkDeleteMessage" data-message-id="{{$message->id}}" title="Delete Message"><i class="fa fa-close"></i></a>
                        </div>
                        <div class="message other-message float-right">
                            {{$message->message}}
                        </div>
                    </li>
                @else

                    <li id="message-{{$message->id}}">
                        <div class="message-data">
                            <span class="message-data-name"> <a href="#" class="talkDeleteMessage" data-message-id="{{$message->id}}" title="Delete Message"><i class="fa fa-close" style="margin-right: 3px;"></i></a>{{ucwords($message->sender->first_name)}}</span>
                            <span class="message-data-time">{{$message->humans_time}} ago</span>
                        </div>
                        <div class="message my-message">
                            {{$message->message}}
                        </div>
                    </li>
                @endif
            @endforeach


        </ul>

    </div> <!-- end chat-history -->

@endsection