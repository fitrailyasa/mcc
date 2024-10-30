<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('admin.feedback.index', compact('feedbacks'));
    }

    public function destroy(string $id)
    {
        Feedback::findOrFail($id)->delete();
        return back()->with('alert', 'Success Delete Feedback!');
    }
}
