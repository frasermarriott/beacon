@extends('layouts.app')

@section('title', 'New text post')

@section('content')
<div id="wrap">
<div id="centered">
<div class="container push-top">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New text post</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('submit_new_text_post') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('post_title') ? ' has-error' : '' }}">
                            <label for="post_title" class="col-md-4 control-label">Post Title</label>

                            <div class="col-md-6">
                                <input id="post_title" type="text" class="form-control" name="post_title" value="{{ old('post_title') }}" required autofocus>

                                @if ($errors->has('post_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('post_description') ? ' has-error' : '' }}">
                            <label for="post_description" class="col-md-4 control-label">Post Description</label>

                            <div class="col-md-6">
                                <textarea id="post_description" type="text" class="form-control" name="post_description" value="{{ old('post_description') }}" required></textarea>

                                @if ($errors->has('post_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
{{-- 
                        <div class="form-group{{ $errors->has('post_link') ? ' has-error' : '' }}">
                            <label for="post_link" class="col-md-4 control-label">Share a link</label>

                            <div class="col-md-6">
                                <input id="post_link" type="post_link" class="form-control" name="post_link" value="{{ old('post_link') }}" required>

                                @if ($errors->has('post_link'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post_link') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}



                        <input id="post_img" type="hidden" name="post_img" value="default">
                        <input id="post_link" type="hidden" name="post_link" value="default">
                        <input id="posted_by_user" type="hidden" name="posted_by_user" value="{{Auth::user()->id}}">
                        <input id="likes" type="hidden" name="likes" value="0">
                        <input id="shared_with" type="hidden" name="shared_with" value="{{Auth::user()->linked_to_family}}">

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-raised">
                                    Submit Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div> <!-- /centered -->
</div> <!-- /wrap -->
@endsection
