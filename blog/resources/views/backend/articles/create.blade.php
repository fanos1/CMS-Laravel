@extends('master')
@section('title',	'Create a Article')

@section('content')

<div class="container">
   <div class="col-12">
      
      <form class="form-horizontal" method="post" enctype="multipart/form-data">
         @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
         @endforeach

         @if(session('status')) 
            <div class="alert alert-success">
               {{ session('status') }}
            </div>
         @endif   

         <input type="hidden" name="_token" value="{!! csrf_token() !!}" />

         <fieldset>
            <legend>Create a new article</legend>
            <div class="form-group">
               <div class="col-lg-10">
                  <input type="text" name="title" class="form-control" placeholder="Title">
               </div>
            </div>             
            
            <div class="form-group">
               <label for="content" class="col-lg-2 control-label">Content</label>
               <div class="col-lg-10">
                  <textarea rows="3" name="content" class="form-control"></textarea>
               </div>
            </div>

            <div class="form-group">
               <label for="pages"   class="col-lg-2 control-label">Pages</label>
               <div class="col-lg-10">
                  <select  class="form-control" id="page" name="pages[]" multiple>
                     
                     @foreach($pages as $page)
                     <option  value="{!! $page->id !!}">
                        {!! $page->title !!}
                     </option>
                     @endforeach
                  </select>
               </div>
            </div>
            <!-- 
            <div class="form-group">
               <div class="col-lg-10">
                  <input type="text" name="slug" class="form-control" placeholder="Slug">
               </div>
            </div> 
            -->

            <div class="form-group">
               <input type="hidden" name="img" class="form-control" value="no-image.png">  
               <!--  <input type="file" name="img" /> -->
               <input type="file" name="img" />
            </div> 

            <div class="form-group">
               <div class="col-lg-10">
                  <input type="text" name="h2" class="form-control" placeholder="h2">
               </div>
            </div> 
            <div class="form-group">
               <div class="col-lg-10">
                  <input type="text" name="h3" class="form-control" placeholder="h3">
               </div>
            </div> 

            <div class="form-group">
               <div class="col-lg-10 col-lg-offset-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
               </div>
           </div>
         </fieldset>        

      </form>


   </div>
</div>
@endsection

