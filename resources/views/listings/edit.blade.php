@extends('layout')
@section('title', ' | Create')

@section('content')
    
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3 card mt-4 px-4 py-3">
			<h2 class="text-center">Update Job</h2>
			<hr>
			<form action="{{ url('listing/edit/'.$listing->id) }}" method="post" enctype="multipart/form-data">
				@csrf
			  <div class="form-group mb-4">
			    <label class="form-label">Title<em class="text-danger">*</em></label>
			    <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $listing->title }}">
			    @error('title')
				    <em class="text-danger">{{ $message }}</em>
				@enderror
			  </div>
			  <div class="form-group mb-4">
			    <label class="form-label">Company<em class="text-danger">*</em></label>
			    <input type="text" name="company" class="form-control" placeholder="Company" value="{{ $listing->company }}">
			    @error('company')
				    <em class="text-danger">{{ $message }}</em>
				@enderror
			  </div>
			  <div class="form-group mb-4">
			    <label class="form-label">Location<em class="text-danger">*</em></label>
			    <input type="text" name="location" class="form-control" placeholder="Location" value="{{ $listing->location }}">
			    @error('location')
				    <em class="text-danger">{{ $message }}</em>
				@enderror
			  </div>
			  <div class="form-group mb-4">
			    <label class="form-label">Company Email<em class="text-danger">*</em></label>
			    <input type="text" name="email" class="form-control" placeholder="Company Email" value="{{ $listing->email }}">
			    @error('email')
				    <em class="text-danger">{{ $message }}</em>
				@enderror
			  </div>
			  <div class="form-group mb-4">
			    <label class="form-label">Website<em class="text-danger">*</em></label>
			    <input type="text" name="website" class="form-control" placeholder="Website" value="{{ $listing->website }}">
			    @error('website')
				    <em class="text-danger">{{ $message }}</em>
				@enderror
			  </div>
			  <div class="form-group mb-4">
			    <label class="form-label">Tags<em class="text-danger">*</em> (comma separated)</label>
			    <input type="text" name="tags" class="form-control" placeholder="Tags" value="{{ $listing->tags }}">
			    @error('tags')
				    <em class="text-danger">{{ $message }}</em>
				@enderror
			  </div>
			  <div class="form-group mb-4">
			    <label class="form-label">Description<em class="text-danger">*</em></label>
			    <textarea name="description" class="form-control">{{ $listing->description }}</textarea>
			    @error('description')
			        <em class="text-danger">{{ $message }}</em>
			    @enderror
			  </div>
			  <div class="form-group mb-4">
			    <label class="form-label">Logo (jpeg, png)</label>
			    <input type="file" name="logo" class="form-control">
			    @error('logo')
			        <em class="text-danger">{{ $message }}</em>
                @enderror
                @if($listing->logo)
                    <img src="{{ asset($listing->logo) }}" alt="logo" style="max-width: 100px;"/>
                @endif
			  </div>
			  	<p class="mb-0 fst-italic fwt-lighter"><em class="text-danger">*</em> fields are mandatory field</p><br>
				<a href="{{ url('listing/'.$listing->id) }}" class="btn btn-secondary">Back</a>
			  <button type="submit" class="btn btn-success float-end">Submit</button>
			</form>
		</div>
	</div>
</div>

@endsection