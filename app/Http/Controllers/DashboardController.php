<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Package;
use App\Models\Feedback;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all()->count();
        $categories = Category::all()->count();
        $packages = Package::all()->count();
        $feedbacks = Feedback::all()->count();
        return view('admin.dashboard', compact('users', 'categories', 'packages', 'feedbacks'));
    }
}
