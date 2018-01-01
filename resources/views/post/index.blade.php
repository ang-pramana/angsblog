@extends ('layouts.app')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @foreach ($posts as $post)
	            <div class="panel panel-info">
	                <div class="panel-heading">
	                	<a href="{{ route('post.show', $post) }}">{{ $post->title }}</a>
	                	
	                	
	                	<div class="pull-right">
	                		<form action="{{ route('post.destroy', $post) }}" method="post">
	                		{{ csrf_field() }}
	                		{{ method_field('DELETE')}}
	                		<button type="submit" class="btn btn-xs btn-danger">Delete</button> 
	                		<a href="{{ route('post.edit', $post) }}" class="btn btn-xs btn-primary"> Edit</a>  	
	                		</form>	                		
	                	</div>
	                </div>

	                <div class="panel-body">
	                	<p>{{ str_limit($post->content, 200,' ....') }}</p>	                	
	                </div>

	                	
	            </div>
	        @endforeach
        </div>
    </div>
</div>
@endsection