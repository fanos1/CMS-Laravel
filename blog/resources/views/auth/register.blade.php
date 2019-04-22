@extends('master')

@section('title', 'Register')

@section('content')
    <div class="container">
        <div class="col-12">
            <form class="form-horizontal" method="post">

				@foreach($errors->all() as $error)
					<p class="alert alert-danger">{{ $error }}</p>
				@endforeach

			   {!! csrf_field() !!}

			   <fieldset>
			      <legend>Register	an	account</legend>
			      <div	class="form-group">
			         <label	for="name">Name</label>
			         <div class="col-lg-10">
			            <input	type="text"	class="form-control" id="name" placeholder="Name" name="name"	value="{{ old('name') }}">
			         </div>
			      </div>
			      <div	class="form-group">
			         <label	for="email">Email</label>
			         <div class="col-lg-10">
			            <input	type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
			         </div>
			      </div>
			      <div	class="form-group">
			         <label	for="password">Password</label>
					<div	class="col-lg-10">
					   <input type="password" class="form-control" name="password">
					</div>
			      </div>
			      <div	class="form-group">
					  <label for="password"	class="col-lg-2	control-label">Confirm	password</label>
					  <div	class="col-lg-10">
						<input type="password" class="form-control" name="password_confirmation"/>
					  </div>
			      </div>
			      <div	class="form-group">
			         <div class="col-lg-10	col-lg-offset-2">
			            <button	type="submit" class="btn btn-primary">Submit</button>
			         </div>
			      </div>
			   </fieldset>
			</form>
        </div>
    </div>
@endsection