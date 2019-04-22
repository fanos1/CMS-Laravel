@extends('master')
@section('title',	'View All Menu')

@section('content')

<div  class="container  col-md-8 col-md-offset-2">
  <div   class="panel   panel-default">
         <div  class="panel-heading">
            <h2>All  users</h2>
         </div>
         @if   (session('status'))
            <div  class="alert   alert-success">
               {{ session('status') }}
            </div>
         @endif
         @if($menus->isEmpty())
            <p> There is no user.</p>
         @else
         <table   class="table">
            <thead>
            <tr>
               <th>ID</th>
               <th>Name</th>
               <th>Edit </th>
               <th>Joined  at</th>
            </tr>
            </thead>
            <tbody>
               @foreach($menus as $v)
                  <tr>
                     <td>{!!  $v->id !!}</td>
                     <td>
                        <a href="{!! action('Admin\MenusController@edit',  $v->id) !!}">{!! $v->name !!} </a>
                     </td>
                     <td>
                        <a href="{!! action('Admin\MenusController@edit',  $v->id) !!}">Edit </a>
                     </td>
                     <td>{!!  $v->created_at !!}</td>
                  </tr>
               @endforeach
            </tbody>
         </table>
         @endif
      </div>
</div>
@endsection

