@extends('layouts.app')

@section('title', 'Photos')

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
    			<h2>Photos</h2>
    		</div>
    	
        </div>
    </div>
</div>


<div class="container photos-container">

<br>
    <div class="row">

            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive photo-grid-item" src="https://i.imgur.com/mRKOegq.png" alt="">
                    <div class="caption">
                    	<h3>Image title</h3>
                    	<p>Some information about the photo.</p>
                    	<small>Posted by user</small>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive photo-grid-item" src="https://i.imgur.com/QsUijMI.png" alt="">
					<div class="caption">
                    	<h3>Image title</h3>
                    	<p>Some information about the photo.</p>
                    	<small>Posted by user</small>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive photo-grid-item" src="https://i.imgur.com/sJGD2as.jpg" alt="">
                    <div class="caption">
                    	<h3>Image title</h3>
                    	<p>Some information about the photo.</p>
                    	<small>Posted by user</small>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive photo-grid-item" src="https://i.imgur.com/w9r5Qx3.jpg" alt="">
                    <div class="caption">
                    	<h3>Image title</h3>
                    	<p>Some information about the photo.</p>
                    	<small>Posted by user</small>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive photo-grid-item" src="https://i.imgur.com/rJRGahL.jpg" alt="">
                    <div class="caption">
                    	<h3>Image title</h3>
                    	<p>Some information about the photo.</p>
                    	<small>Posted by user</small>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive photo-grid-item" src="https://i.imgur.com/azR91EE.jpg" alt="">
                    <div class="caption">
                    	<h3>Image title</h3>
                    	<p>Some information about the photo.</p>
                    	<small>Posted by user</small>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive photo-grid-item" src="https://i.imgur.com/6ffMyt1.jpg" alt="">
                    <div class="caption">
                    	<h3>Image title</h3>
                    	<p>Some information about the photo.</p>
                    	<small>Posted by user</small>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive photo-grid-item" src="https://i.imgur.com/piDKjU9.jpg" alt="">
                    <div class="caption">
                    	<h3>Image title</h3>
                    	<p>Some information about the photo.</p>
                    	<small>Posted by user</small>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive photo-grid-item" src="https://i.imgur.com/666AnvS.jpg" alt="">
                    <div class="caption">
                    	<h3>Image title</h3>
                    	<p>Some information about the photo.</p>
                    	<small>Posted by user</small>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive photo-grid-item" src="https://i.imgur.com/4KUH4At.jpg" alt="">
                    <div class="caption">
                    	<h3>Image title</h3>
                    	<p>Some information about the photo.</p>
                    	<small>Posted by user</small>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive photo-grid-item" src="https://i.imgur.com/6eQLQTb.jpg" alt="">
                    <div class="caption">
                    	<h3>Image title</h3>
                    	<p>Some information about the photo.</p>
                    	<small>Posted by user</small>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive photo-grid-item" src="https://i.imgur.com/AjIrkBi.jpg" alt="">
                    <div class="caption">
                    	<h3>Image title</h3>
                    	<p>Some information about the photo.</p>
                    	<small>Posted by user</small>
                    </div>
                </a>
            </div>
        </div>


</div>
@endsection
