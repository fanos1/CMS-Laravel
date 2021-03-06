@extends('master')

@section('title', 'Edit Menu')

@section('content')
   
   <div	class="container	col-md-8	col-md-offset-2">
		<div class="well well bs-component">

			<form class="form-horizontal" method="post">
				@foreach($errors->all() as $error)
					<p	class="alert alert-danger">{{ $error }}</p>
				@endforeach

				@if	(session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
				@endif

				{!!	csrf_field() !!}

				<fieldset>
					<legend>Edit user</legend>
					<div class="form-group">
						<label for="name"	class="col-lg-2	control-label">Name</label>
						<div class="col-lg-10">
							<input	type="text"	class="form-control" id="name"	placeholder="Name"	
								name="name" value="{{ $menu->name }}" />
						</div>
					</div>
					<button	type="submit" class="btn btn-primary">Edit</button>
				</fieldset>
			</form>

		</div>
	</div>		

@endsection