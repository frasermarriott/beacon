@extends('layouts.app')

@section('title', 'My Family')

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
    			<h2>My Family</h2>
    		</div>
    	
    </div>
</div>


<div class="container">


    <div class="row">
        <div class="col-md-12">

          <img src="{{ asset('img/family-mockup.PNG') }}" class="img-responsive">

            
        </div>

    </div>

</div>
@endsection
