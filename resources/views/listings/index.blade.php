@extends('layout')

@section('title', ' | Listings')

@section('content')
    <div class="container-fluid ">
        <div class="row">
            <div class="homeFigure">
                <img src="{{ asset('assets/images/no-image.png')}}" class="d-block mx-auto mt-2" alt="HomeFigure" >
                <h4 class="text-center">Search your dream job here</h4>
                @auth
                    <a href="{{ url('post-job') }}" class="btn btn-outline-warning btn-sm float-end">Post Job</a>
                @endauth
            </div>
        </div>
    </div>
    
    <div class="container homecontainer">
        <div class="mb-4">
            <form action="/" method="get" class="d-flex">
                <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <div class="row">
            @if (!empty($listings[0]))
                @foreach ($listings as $listing)
                <div class="col-md-4">
                    <x-listing-card :listing="$listing" />
                </div>
                @endforeach 
            @else
                <h4 class="text-secondary text-center">No result found</h4>
            @endif
            
        </div>
        {{ $listings->links() }}     
    </div>
@endsection('content')
