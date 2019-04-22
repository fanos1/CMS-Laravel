@extends('master')
@section('title', 'Blog')
@section('content')

    <div class="container col-md-8 col-md-offset-2">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if ($pages->isEmpty())
            <p> There is no post.</p>
        @else
            @foreach ($pages as $page)
                <div class="panel panel-default">
                    <div class="panel-heading">
						<a href="{!! action('BlogController@show', $page->slug) !!}">{!! $page->title !!}</a>
					</div>
                    <div class="panel-body">
                        {!! mb_substr($page->content,0,500) !!}
                    </div>
                </div>
            @endforeach
        @endif
    </div>

@endsection