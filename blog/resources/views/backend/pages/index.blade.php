@extends('master')
@section('title',	'All Page')

@section('content')

<div class="container">
   <div class="col-12">
         <div class="panel-heading">
            <h2> All Pages </h2>
         </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if ($pages->isEmpty())
                <p> There is no page.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pages as $page)
                        <tr>
                            <td>{!! $page->id !!}</td>
                            <td>
                                <a href="{!! action('Admin\PagesController@edit', $page->id) !!}">{!! $page->title !!} </a>
                            </td>
                            <!-- <td>{!! $page->status ? 'Pending' : 'Answered' !!}</td> -->
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
      </div>
</div>
@endsection

