<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('img/icons/favicon.ico') }}">

    {{-- Mobile Themes --}}
    <meta name="theme-color" content="#009688">
    <meta name="msapplication-navbutton-color" content="#009688">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    {{-- Mobile Settings --}}
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel="icon" type="image/png" href="{{ asset('img/icons/logo-icon.png') }}" sizes="192x192">

    <title>Messages</title>
    
    
    <link rel="stylesheet" href="{{asset('chat/css/reset.css')}}">

    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="{{asset('chat/css/style.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-material-design.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ripples.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hover.min.css') }}" rel="stylesheet">

    {{-- Check if User is signed in --}}
    @if(Auth::User())
        {{-- Use high contrast stylesheet if required --}}
        {{-- @if(Auth::User()->contrast_settings =='high_contrast') --}}
            <link href="{{ asset('css/contrast.css') }}" rel="stylesheet">
        {{-- @endif --}}

        {{-- Set font-size --}}
        <style type="text/css">
            @if(Auth::User()->font_settings =='large')
                body {
                    font-size: -webkit-calc(100% + 0.8em);
                    font-size:        -calc(100% + 0.8em);
                }
            @endif

            @if(Auth::User()->font_settings =='small') 
                body {
                    font-size: -webkit-calc(100% - 0.1em);
                    font-size:        -calc(100% - 0.1em);
                }
            @endif
        </style>
    @endif

    {{-- jQuery --}}
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>

    {{-- JS --}}
    <script src="{{ asset('js/custom.js') }}"></script>
    
    <script src="https://js.pusher.com/4.0/pusher.min.js"></script>

    <!-- Scripts -->
{{--     <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script> --}}

    
  </head>

  <body>
{{-- <div class="header">
    <div class="container header-brand">
        <a href="{{url('/home')}}" class="brand">Talk Message</a>
    </div>
</div> --}}


  <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('img/logo1.svg') }}">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Sign up</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ ucwords(\Auth::user()->first_name) }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
  </nav>

  <div id="subnav">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-2">
                <div class="button-wrapper">
                <a href="{{ URL::previous() }}" class="btn btn-default btn-lg"> < Back</a>
                </div>
            </div>

            <div class="col-md-8 col-sm-8 col-xs-8" style="text-align:center;">
                <h2>Messages</h2>
            </div>
        
        </div>
    </div>
  </div>

<div id="chat-height-fixer">

  <div class="chat-container clearfix">
   @include('partials.peoplelist')
    
    <div class="chat col-lg-8 col-md-12 col-sm-12 col-xs-12">
      <div class="chat-header clearfix">
        @if(isset($user))
            <img src="{{@$user->avatar}}" alt="avatar" />
        @endif
        <div class="chat-about">
            @if(isset($user))
                <div class="chat-with">{{'Chat with ' . ucwords(@$user->first_name . ' ' . @$user->surname)}}</div>
            @else
                <div class="chat-with">No Thread Selected</div>
            @endif
        </div>
        <i class="fa fa-star"></i>
      </div> <!-- end chat-header -->
      
      @yield('content')
      
      <div class="chat-message clearfix">
      <form action="" method="post" id="talkSendMessage">
            {{-- <input type="hidden" id="token" value="{{ csrf_token() }}"> --}}
            {{-- {{ csrf_field() }} --}}
            <textarea name="message-data" id="message-data" placeholder ="Type your message" rows="3"></textarea>
            <input type="hidden" name="_id" value="{{@request()->route('id')}}">
            <button type="submit" class="btn btn-primary btn-raised">Send</button>
      </form>

      </div> <!-- end chat-message -->
      
    </div> <!-- end chat -->
    
  </div> <!-- end container -->

</div> <!-- end chat-height-fixer -->

      <script>
          var __baseUrl = "{{url('/')}}"
      </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/list.js/1.1.1/list.min.js'></script>



    <script src="{{asset('chat/js/talk.js')}}"></script>

    <script>

        // Show new messages

        var show = function(data) {
            alert(data.sender.first_name + " - '" + data.message + "'");
        }
        var msgshow = function(data) {

            var html = '<li id="message-' + data.id + '">' +
            '<div class="message-data">' +
            '<span class="message-data-name"> <a href="#" class="talkDeleteMessage" data-message-id="' + data.id + '" title="Delete Message"><i class="fa fa-close" style="margin-right: 3px;"></i></a>' + data.sender.first_name + '</span>' +
            '<span class="message-data-time">Just now</span>' +
            '</div>' +
            '<div class="message my-message">' +
            data.message +
            '</div>' +
            '</li>';
            // Append new messages
            $('#talkMessages').append(html);
            // Scroll to bottom of chat window
            $('#chat-history').scrollTop($('#chat-history')[0].scrollHeight);

        }


    </script>
    {!! talk_live(['user'=>["id"=>auth()->user()->id, 'callback'=>['msgshow']]]) !!}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/material.min.js') }}"></script>
    <script src="{{ asset('js/ripples.min.js') }}"></script>

    <script>
        $.material.init();
    </script>

  </body>


</html>