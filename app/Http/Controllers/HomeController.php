<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    protected $contactInfo = [
        'description' => 'Traditional Postpartum Treatment and Care Services for Mothers and Baby',
        'whatsapp' => '+6282279909994',
        'instagram' => 'https://instagram.com/mutiara_confinement',
        'facebook' => 'https://www.facebook.com/MutiaraConfinement',
        'email' => 'tarashairsalon12@gmail.com',
        'address' => 'Jl. Cempaka No. 10, Cempaka Putih, Jakarta Timur',
    ];

    public function index()
    {
        try {
            $services = Package::all();
            $testimonials = Feedback::all();
        } catch (\Exception $e) {
            Log::error('Failed to retrieve data: ' . $e->getMessage());
            $services = collect(); // return an empty collection on failure
            $testimonials = collect();
        }

        return view('index', array_merge($this->contactInfo, compact('services', 'testimonials')));
    }

    public function about()
    {
        return view('pages.about', $this->contactInfo);
    }

    public function contact()
    {
        return view('pages.contact', $this->contactInfo);
    }

    public function services()
    {
        try {
            $services = Package::all();
        } catch (\Exception $e) {
            Log::error('Failed to retrieve services: ' . $e->getMessage());
            $services = collect(); // return an empty collection on failure
        }

        return view('pages.services', array_merge($this->contactInfo, compact('services')));
    }

    public function feedback()
    {
        return view('pages.feedback', $this->contactInfo);
    }

    public function feedbackStore(Request $request)
    {
        $request->validate([
            'name' => 'required:max:50',
            'profession' => 'required|max:50',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'review' => 'required',
            'rating' => 'required|numeric|max:5|min:1',
        ]);

        $feedback = new Feedback();
        $feedback->name = $request->input('name');
        $feedback->profession = $request->input('profession');
        $feedback->review = $request->input('review');
        $feedback->rating = $request->input('rating');

        if ($request->hasFile('img')) {
            $feedback->img = $request->file('img')->store('public');
        }

        $feedback->save();

        return redirect()->back();
    }
}
