@props(['listing'])

<div class="card">
    <div class="card-body" style="overflow: hidden">
        <a href="{{ url('listing/' . $listing->id) }}"><h5 class="card-title">{{ strlen($listing->title) > 25 ? substr($listing->title, 0, 25) . "..." : $listing->title }}</h5></a>
        <h6 class="card-subtitle">{{ $listing->location}}</h6>
        <div class="d-flex gap-2 my-2" style="overflow: hidden">
            <x-listing-tags :listing="$listing" />
        </div>
        <p class="card-text">{{ strlen($listing->description) > 100 ? substr($listing->description, 0, 100) . "..." : $listing->description }}</p>
        {{-- <p class="fst-italic">{{ strlen($listing->email) > 40 ? substr($listing->email, 0, 40) . "..." : $listing->email  }}</p> --}}
        {{-- <a href="#" class="card-link">{{ strlen($listing->website) > 40 ? substr($listing->website, 0, 40) . "..." : $listing->website  }}</a> --}}
    </div> 
</div>