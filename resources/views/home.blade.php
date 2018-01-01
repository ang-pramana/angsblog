@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading" style="text-align: center;">
                    <h3>Welcome Blogger</h3>
                </div>

                <div class="panel-body" style="text-align: center;">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Let's Start Your Blog !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
