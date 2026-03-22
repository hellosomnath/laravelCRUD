<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::latest()->filter(request(['search']))->paginate(6);
        return view('listings/index', ['listings' => $listings]);
    }

    public function create()
    {
        return view('listings/create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            "title" => "required|min:10",
            "company" => "required",
            "location" => "required",
            "email" => "required|email",
            "website" => "required",
            "tags" => "required",
            "description" => "required|min:50",
            "logo" => "mimes:jpeg,png"
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'logo');
        }
        
        $formFields['user_id'] = auth()->id();
        Listing::create($formFields);

        flash()->success('Job created successfully!');
        return redirect('/');
    }

    public function show(Listing $listing)
    {
        return view('listings/show', ['listing' => $listing]);
    }

    public function edit(Listing $listing)
    {
        if($listing->user_id != auth()->id()) {
            return redirect('/');
        }

        return view('listings/edit', ['listing' => $listing]);
    }

    public function update(Request $request, Listing $listing)
    {
        $formFields = $request->validate([
            "title" => "required|min:10",
            "company" => "required",
            "location" => "required",
            "email" => "required|email",
            "website" => "required",
            "tags" => "required",
            "description" => "required|min:50",
            "logo" => "mimes:jpeg,png"
        ]);

        if($request->hasFile('logo')) {
            if($listing->logo) {
                $logo = explode('/', $listing->logo);
                unlink(public_path() . '\\logos\\' . $logo[1]);
            }
            $formFields['logo'] = $request->file('logo')->store('logos', 'logo');
        }

        $listing->update($formFields);

        flash()->success('Job updated successfully!');
        return redirect('/');
    }

    public function delete(Listing $listing)
    {
        if($listing->logo) {
            $logo = explode('/', $listing->logo);
            unlink(public_path() . '\\logos\\' . $logo[1]);
        }
        $listing->delete();
        flash()->success('Job deleted successfully!');
        return redirect('/');
    }

    
}
