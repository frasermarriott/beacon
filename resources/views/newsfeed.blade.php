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


    <div class="row push-top">
        <div class="col-md-12">


        <div class="text-center">
           <div class="btn-group">
              <a href="{{ route('new_text_post') }}" class="btn btn-primary btn-xl btn-raised">New text post</a>
              <a href="{{ route('new_image_post') }}" class="btn btn-primary btn-xl btn-raised">Share a photo</a>
           </div>
        </div>




            <section id="cd-timeline" class="cd-container">



            @foreach($posts as $post)
                <div class="cd-timeline-block">

                    @if($post->post_img !== 'default')
                        <div class="cd-timeline-img cd-picture">
                            <img src="{{ asset('img/icons/timeline/cd-icon-picture.svg') }}" alt="Picture">
                        </div> <!-- cd-timeline-img -->
                    @else
                        <div class="cd-timeline-img cd-picture">
                            <img src="{{ asset('img/icons/timeline/cd-icon-text.svg') }}" alt="Picture">
                        </div> <!-- cd-timeline-img -->
                    @endif
  
                    <div class="cd-timeline-content">
                    <caption>Posted by {{$post->posted_by_user_name}}</caption>
                        <h2>{{ucfirst($post->post_title)}}</h2>


                        @if($post->post_img !== 'default')
                            {{-- <img src="https://i.imgur.com/piDKjU9.jpg" class="img-responsive"> --}}
                            <img src="img/uploads/posts/{{$post->post_img}}" class="img-responsive">
                        @endif

                        <p>{{ucfirst($post->post_description)}}</p>

                        

                        <a href="#0" class="cd-like"><span class="glyphicon glyphicon-heart"> </span> Like</a>
                        <a href="#0" class="cd-read-more"><span class="glyphicon glyphicon-comment"> </span> Comments</a>
                        <span class="cd-date">{{Carbon::parse($post->created_at)->toFormattedDateString()}}</span>
                    </div> <!-- cd-timeline-content -->
                </div> <!-- cd-timeline-block -->
            @endforeach












                {{-- <div class="cd-timeline-block">
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
                </div> <!-- cd-timeline-block --> --}}
            </section> <!-- cd-timeline -->






            
        </div>

    </div>

</div>


@endsection
