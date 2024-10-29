<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required|max:500',
            'whatsapp' => 'required|max:20',
            'instagram' => 'required|max:50',
            'facebook' => 'required|max:50',
            'email' => 'required|max:50',
            'address' => 'required|max:500',
        ]);
        $about->update($request->all());
        return back()->with('alert', 'Success Edit About!');
    }
}
