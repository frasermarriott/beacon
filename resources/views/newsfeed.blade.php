@extends('layouts.app')

@section('title', 'Activity Feed')

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
    			<h2>Activity Feed</h2>
    		</div>
    	
        </div>
    </div>
</div>



{{-- Content --}}


<div class="container timeline-container">


    <div class="row">
        <div class="col-md-12">

          {{-- <img src="{{ asset('img/newsfeed-mockup.PNG') }}" class="img-responsive"> --}}



            <section id="cd-timeline" class="cd-container">
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img cd-picture">
                        <img src="{{ asset('img/icons/timeline/cd-icon-picture.svg') }}" alt="Picture">
                    </div> <!-- cd-timeline-img -->

                    <div class="cd-timeline-content">
                        <h2>Post title 1</h2>
                        <img src="https://i.imgur.com/piDKjU9.jpg" class="img-responsive">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                        <a href="#0" class="cd-like"><span class="glyphicon glyphicon-heart"> </span> Like</a>
                        <a href="#0" class="cd-read-more"><span class="glyphicon glyphicon-comment"> </span> Comments</a>
                        <span class="cd-date">Jan 14</span>
                    </div> <!-- cd-timeline-content -->
                </div> <!-- cd-timeline-block -->

                <div class="cd-timeline-block">
                    <div class="cd-timeline-img cd-video">
                        <img src="{{ asset('img/icons/timeline/cd-icon-video.svg') }}" alt="video">
                    </div> <!-- cd-timeline-img -->

                    <div class="cd-timeline-content">
                        <h2>Title of section 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
                        <a href="#0" class="cd-read-more">Comments</a>
                        <span class="cd-date">Jan 18</span>
                    </div> <!-- cd-timeline-content -->
                </div> <!-- cd-timeline-block -->

                <div class="cd-timeline-block">
                    <div class="cd-timeline-img cd-picture">
                        <img src="{{ asset('img/icons/timeline/cd-icon-picture.svg') }}" alt="Picture">
                    </div> <!-- cd-timeline-img -->

                    <div class="cd-timeline-content">
                        <h2>Title of section 3</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
                        <a href="#0" class="cd-read-more">Comments</a>
                        <span class="cd-date">Jan 24</span>
                    </div> <!-- cd-timeline-content -->
                </div> <!-- cd-timeline-block -->

                <div class="cd-timeline-block">
                    <div class="cd-timeline-img cd-text">
                        <img src="{{ asset('img/icons/timeline/cd-icon-text.svg') }}" alt="Location">
                    </div> <!-- cd-timeline-img -->

                    <div class="cd-timeline-content">
                        <h2>Title of section 4</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                        <a href="#0" class="cd-read-more">Comments</a>
                        <span class="cd-date">Feb 14</span>
                    </div> <!-- cd-timeline-content -->
                </div> <!-- cd-timeline-block -->

                <div class="cd-timeline-block">
                    <div class="cd-timeline-img cd-text">
                        <img src="{{ asset('img/icons/timeline/cd-icon-text.svg') }}" alt="Location">
                    </div> <!-- cd-timeline-img -->

                    <div class="cd-timeline-content">
                        <h2>Title of section 5</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
                        <a href="#0" class="cd-read-more">Comments</a>
                        <span class="cd-date">Feb 18</span>
                    </div> <!-- cd-timeline-content -->
                </div> <!-- cd-timeline-block -->

                <div class="cd-timeline-block">
                    <div class="cd-timeline-img cd-video">
                        <img src="{{ asset('img/icons/timeline/cd-icon-video.svg') }}" alt="video">
                    </div> <!-- cd-timeline-img -->

                    <div class="cd-timeline-content">
                        <h2>Final Section</h2>
                        <p>This is the content of the last section</p>
                        <span class="cd-date">Feb 26</span>
                    </div> <!-- cd-timeline-content -->
                </div> <!-- cd-timeline-block -->
            </section> <!-- cd-timeline -->






            
        </div>

    </div>

</div>


@endsection
