@extends('master')
@section('title',	'All Articles')

@section('content')

<div class="container">
   <div class="col-12">
         <div class="panel-heading">
            <h2> All Articles </h2>
         </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if ($articles->isEmpty())
                <p> There is no page.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Slug</th>     
                        <th>Created At</th>
                        <th>Updated At</th>                  
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{!! $article->id !!}</td>
                            <td>
                                <a href="{!! action('Admin\ArticlesController@edit', $article->id) !!}">{!! $article->title !!} </a>
                            </td>
                            <td>{!! $article->slug !!}</td>
                            <td>{!! $article->created_at !!}</td>
                            <td>{!! $article->updated_at !!}</td>                   
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
      </div>
</div>
@endsection

