<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Feedback;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    
    public function index()
    {
        $about = About::findOrfail('1');
        try {
            $services = Package::all();
            $testimonials = Feedback::all();
        } catch (\Exception $e) {
            Log::error('Failed to retrieve data: ' . $e->getMessage());
            $services = collect(); // return an empty collection on failure
            $testimonials = collect();
        }

        return view('index', compact('services', 'testimonials', 'about'));
    }

    public function about()
    {
        $about = About::findOrfail('1');
        try {
            $services = Package::all();
            $testimonials = Feedback::all();
        } catch (\Exception $e) {
            Log::error('Failed to retrieve data: ' . $e->getMessage());
            $services = collect(); // return an empty collection on failure
            $testimonials = collect();
        }
        return view('pages.about', compact('about', 'services', 'testimonials'));
    }

    public function contact()
    {
        $about = About::findOrfail('1');
        try {
            $services = Package::all();
            $testimonials = Feedback::all();
        } catch (\Exception $e) {
            Log::error('Failed to retrieve data: ' . $e->getMessage());
            $services = collect(); // return an empty collection on failure
            $testimonials = collect();
        }
        return view('pages.contact', compact('about', 'services', 'testimonials'));
    }

    public function services()
    {
        $about = About::findOrfail('1');
        try {
            $services = Package::all();
        } catch (\Exception $e) {
            Log::error('Failed to retrieve services: ' . $e->getMessage());
            $services = collect(); // return an empty collection on failure
        }

        return view('pages.services', compact('services', 'about'));
    }
    public function servicesDetail(string $slug)
    {
        $about = About::findOrfail('1');

        $service = Package::where('slug', $slug)->firstOrFail();

        return view('pages.services-detail', compact('service', 'about'));
    }

    public function feedback()
    {
        $about = About::findOrfail('1');
        try {
            $services = Package::all();
            $testimonials = Feedback::all();
        } catch (\Exception $e) {
            Log::error('Failed to retrieve data: ' . $e->getMessage());
            $services = collect(); // return an empty collection on failure
            $testimonials = collect();
        }
        return view('pages.feedback', compact('about', 'services', 'testimonials'));
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
