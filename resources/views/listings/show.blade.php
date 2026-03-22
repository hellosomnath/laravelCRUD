@extends('layout')

@section('title', ' | Listing')

@section('content')
<div class="container">
    <a href="{{ url('/') }}" class="btn btn-outline-secondary m-2 ms-0 btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
    @auth
    <div class="btn-group btn-group-sm float-end">
        <a href="{{ url('listing/edit/' . $listing->id) }}" class="btn btn-outline-info m-2 ms-0 float-end btn-sm"><i class="fa fa-pencil"></i> Edit</a>
        <form action="{{ url('listing/delete/' . $listing->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger mt-2 ms-0 float-end btn-sm"><i class="fa fa-trash"></i> Delete</button>
        </form>
    </div>
    @endauth
    <div class="card">
    <img src="{{ ($listing->logo) ? asset($listing->logo) : asset('assets/images/no-image.png')}}" class="d-block mx-auto mt-2" alt="..." style="max-height:300px" >
        <div class="card-body">
            <h3 class="card-title text-center">{{ $listing->title }}</h3>
            <div class="d-flex gap-2 mb-2 justify-content-center">
                <x-listing-tags :listing="$listing" />
            </div>
            <h5 class="text-bold text-center">{{$listing->company}}</h5>
            <p class="card-text text-center">{{ $listing->location }}</p>
            <hr>
            <p class="card-text text-center" style="overflow: hidden">{{ $listing->description }}</p>
            <div class="d-grid mb-2"><a href="mailto:{{ $listing->email}}" class="btn btn-primary"><i class="fa fa-envelope"></i> Contact Employer</a></div>
            <div class="d-grid"><a href="{{ $listing->website }}" class="btn btn-secondary"><i class="fa fa-globe"></i> Visit Website</a></div>
        </div>
      </div>
</div>
@endsection