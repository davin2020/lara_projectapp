@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Edit Project</h2>
			</div>
			<div class="pull-right">
				<a class="btn btn-primary" href="{{ route('projects.index') }}" title="Go Back"><i class="fas fa-backward"></i>
				</a>
			</div>
		</div>
	</div>

	@if ($errors->any())
	<div class="alert alert-danger">
		<strong>Whoops!</strong>There were some problems with your input<br><br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<form action="{{ route('projects.update', $project->id) }}" method="POST">
		@csrf
		@method('PUT')

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Name:</strong>
					<input type="text" name="name" class="form-control" placeholder="Name" value="{{ $project->name }}">
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Introduction:</strong>
					<textarea name="introduction" class="form-control" placeholder="Introduction" style="height:50px">{{ $project->introduction }}</textarea>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Location:</strong>
					<input type="text" name="location" class="form-control" placeholder="Location" value="{{ $project->location }}">
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Cost:</strong>
					<input type="number" name="cost" class="form-control" placeholder="{{ $project->cost }}" value="{{ $project->cost }}">
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
@endsection
