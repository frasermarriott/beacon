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


<div class="container pus-top">


  <div class="jumbotron list-content">
    <ul class="list-group">
      <li href="#" class="list-group-item title">
        My Family
      </li>
      <br>
      <li href="#" class="list-group-item text-left">
        <img class="img-thumbnail" src="http://bootdey.com/img/Content/User_for_snippets.png">
        <label class="name">
            Person 1<br>
        </label>
        <label class="pull-right">
            <a  class="btn btn-success btn-xs glyphicon glyphicon-user" href="#" title="View"></a>
            <a  class="btn btn-danger  btn-xs glyphicon glyphicon-trash" href="#" title="Delete"></a>
            <a  class="btn btn-info  btn-xs glyphicon glyphicon glyphicon-comment" href="#" title="Send message"></a>
        </label>
        <div class="break"></div>
      </li>
      <li href="#" class="list-group-item text-left">
          <img class="img-thumbnail"  src="http://bootdey.com/img/Content/user_1.jpg">
        <label class="name">
          Person 2
        </label>
        <label class="pull-right">
            <a  class="btn btn-success btn-xs glyphicon glyphicon-user" href="#" title="View"></a>
            <a  class="btn btn-danger  btn-xs glyphicon glyphicon-trash" href="#" title="Delete"></a>
            <a  class="btn btn-info  btn-xs glyphicon glyphicon glyphicon-comment" href="#" title="Send message"></a>
        </label>
        <div class="break"></div>
      </li>
      <li href="#" class="list-group-item text-left">
          <img class="img-thumbnail"  src="http://bootdey.com/img/Content/user_2.jpg">
          <label class="name">
            Person 3
          </label>
        <label class="pull-right">
            <a  class="btn btn-success btn-xs glyphicon glyphicon-user" href="#" title="View"></a>
            <a  class="btn btn-danger  btn-xs glyphicon glyphicon-trash" href="#" title="Delete"></a>
            <a  class="btn btn-info  btn-xs glyphicon glyphicon glyphicon-comment" href="#" title="Send message"></a>
        </label>
        <div class="break"></div>
      </li>
      {{-- <li href="#" class="list-group-item text-left">
        <a class="btn btn-block btn-primary">
            <i class="glyphicon glyphicon-refresh"></i>
            Load more...
        </a>
      </li> --}}
    </ul>
  </div>
  </div>

{{-- 
    <div class="row">
        <div class="col-md-12">

          <img src="{{ asset('img/family-mockup.PNG') }}" class="img-responsive">

            
        </div>

    </div> --}}

</div>
@endsection
