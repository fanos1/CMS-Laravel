@extends('master')
@section('title',	'Admin	Control	Panel')

@section('content')

<div class="container">
   <div	class="row	banner">
      <div class="col-md-12">
         <div class="list-group">
            <div class="list-group-item">
              
               <div	class="row-content">                  
                  <h4 class="list-group-item-heading">Manage	User</h4>
                  <a href="/admin/users" class="btn	btn-success	btn-raised">All	Users</a>
               </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">               
               <div	class="row-content">
                  <h4 class="list-group-item-heading">Manage	Roles</h4>
                  <a href="/admin/roles" class="btn	btn-success	btn-raised">All	Roles </a>
                  <a href="/admin/roles/create"	class="btn	btn-primary	btn-raised">Create	A	Role</a>
               </div>
            </div>
            <div class="list-group-separator"></div>
            <div class="list-group-item">
               <div	class="row-content">                  
                  <h4 class="list-group-item-heading">Manage	Posts</h4>
                  <a href="/admin/pages" class="btn	btn-success	btn-raised">All	pages</a>
                  <a href="/admin/pages/create"	class="btn	btn-primary	btn-raised">Create	A	Page</a>
               </div>
            </div>
            <div class="list-group-item">
               <div  class="row-content">                  
                  <h4 class="list-group-item-heading">Manage Articles</h4>
                  <a href="/admin/articles" class="btn   btn-success btn-raised">All Articles</a>
                  <a href="/admin/articles/create" class="btn  btn-primary btn-raised">Create an Article</a>
               </div>
            </div>
            
            <div class="list-group-separator"></div>
         </div>
      </div>
   </div>
</div>

@endsection

