@extends('layouts.default', ['title' => 'Contact '])

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
				<h2>Get In Touch</h2>
				<p class="text-muted">If you having trouble with this service,<a href="mailto:{{ config('laracarte.admin_support_email') }}"> please ask for help.</a></p>


				<form action="{{ route('contact_path') }}" method="POST">
					{{ csrf_field() }}
					<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
						<label for="name" class="control-label">Name</label>
						<input type="text" name="name" id="name" class="form-control" required="required" value="{{ old('name') }}">
						{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
					</div>
					<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
						<label for="email" class="control-label">Email</label>
						<input type="email" name="email" id="email" class="form-control" required="required" value="{{ old('email') }}">
						{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
					</div>
					<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
						<textarea name="message" id="message" class="form-control" rows="10" cols="10" required="required">{{ old('email') }}</textarea>
						{!! $errors->first('message', '<span class="help-block">:message</span>') !!}
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
					</div>
				</form>

			</div>
		</div>
       </div>

@stop