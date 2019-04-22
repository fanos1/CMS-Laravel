@extends('master')
@section('title', 'View a post/page')
@section('content')


<div class="container">
        <div class="col-12">
            <div class="content">
                <h2 class="header">{!! $page->title !!}</h2>
                <p> {!! $page->content !!} </p>
            </div>
            <div class="clearfix"></div>
        

        <div><img src="/images/{{ $page->img }}" /></div>

        <?php /* 
                @foreach($comments as $comment)
                    <div class="well well bs-component">
                        <div class="content">
                            {!! $comment->content !!}
                        </div>
                    </div>
                @endforeach
            */
        ?>

        @foreach($articlesForThisPage as $article)
            <div class="content">
                {!! $article->title !!}
            </div>
        @endforeach
        
    </div>
</div>
@endsection