<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $packages = Package::all();
        return view('admin.package.index', compact('packages', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'desc' => 'required|max:500',
            'price' => 'nullable|numeric|max:10000',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'nullable',
        ]);
        $package = Package::create($request->all());

        if ($request->hasFile('img')) {
            $package->img = $request->file('img')->store('public');
        }
        return back()->with('alert', 'Success create package!');
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:50',
            'desc' => 'required|max:500',
            'price' => 'nullable|numeric|max:10000',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'nullable',
        ]);

        $package = Package::where('id', $id)->first();
        $packageData = $request->all();

        if ($request->hasFile('img')) {
            $packageData['img'] = $request->file('img')->store('public');
        }

        $package->update($packageData);
        return back()->with('alert', 'Success Edit package!');
    }

    public function destroy(string $id)
    {
        Package::findOrFail($id)->delete();
        return back()->with('alert', 'Success Delete package!');
    }
}
