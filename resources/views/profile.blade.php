@extends('layouts.app')

@section('title', 'My Profile')

@section('content')

<div id="subnav">
    <div class="container">
    	<div class="row">
    		<div class="col-md-2 col-sm-2 col-xs-2">
    			<div class="button-wrapper">
    			<a href="{{ URL::previous() }}" class="btn btn-default btn-lg"> < Back</a>
    			</div>
    		</div>

    		<div class="col-md-8 col-sm-8 col-xs-8" style="text-align:center;">
    			<h2>My Profile</h2>
    		</div>
    	
        </div>
    </div>
</div>


<div class="container push-top-profile">
    <div class="row profile-page">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="https://placehold.it/300x300.jpg" class="img-responsive" alt="">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        Example name
                    </div>
{{--                     <div class="profile-usertitle-job">
                        Grandma
                    </div> --}}
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                    {{-- <button type="button" class="btn btn-success btn-sm">Follow</button> --}}
                    {{-- <button type="button" class="btn btn-danger btn-sm">Message</button> --}}
                </div>
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">
                            <i class="glyphicon glyphicon-home"></i>
                            About Me </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="glyphicon glyphicon-user"></i>
                            Account Settings </a>
                        </li>
{{--                         <li>
                            <a href="#" target="_blank">
                            <i class="glyphicon glyphicon-ok"></i>
                            Tasks </a>
                        </li> --}}
                        <li>
                            <a href="#">
                            <i class="glyphicon glyphicon-flag"></i>
                            Help </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">
               Some user related content goes here...
            </div>
        </div>
    </div>
</div>



{{-- <div class="messages-container">


    <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-6">

        	<div class="conversations-container" style="display:inline-block; width:100%;">
        		<div class="container">
        			<img src="https://i.imgur.com/X0yttnd.jpg" class="profile-pic img-responsive" alt="My Profile Picture">
        			<button class="btn btn-default btn-raised change-profile-pic"><span class="glyphicon glyphicon-paperclip"> </span>Change my profile picture</button>
        		</div>
        	</div>

        </div>


        <div class="col-md-7 col-sm-8 col-xs-6">
        <h2>Elizabeth Munro</h2>

        <h3>About me</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.

Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
        </div>

    </div>

</div> --}}
@endsection
