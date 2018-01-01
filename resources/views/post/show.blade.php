@extends ('layouts.app')

@section ('content')
	<div class="container">
	    <div class="row">
			<div class="col-md-10 col-md-offset-1">

	        	<div class="panel panel-primary">
	                <div class="panel-heading" style="text-align: center; background-color: 0889DB;">
	                	<h3>{{ $post->title }}</h3> | {{ $post->category->name }} |
	                </div>
	                <div class="panel-body">
	                	<p>{{ $post->content }}</p>
	                </div>
	                <div class="panel-footer" style="text-align: center; background-color: 456BF7">
	                	{{ $post->title }} | &copy Copyright 2017
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection