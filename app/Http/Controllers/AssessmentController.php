<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\Category;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function showCreate()
    {
        $categories = Category::all();
        return view('pages.assessment.create', compact('categories'));
    }

    public function create(Request $request){

        $validated = $request->validate([
            'title' => ['required', 'max:255'],
            'assessment' => ['string'],
            'category' => ['required', 'max:10']
        ]);

        $assessment = Assessment::create([
            'title' => $validated['title'],
            'assessment' => $validated['assessment'],
            'user_id' => session()->get('user_id')
        ]);

        $assessment->categories()->attach($validated['category']);

        return redirect()->route('show.user.dashboard');

    }

    public function overview($id){
        $assessment = Assessment::find($id);
        // dd($assessment->categories);
        $comments = $assessment->comments;
        return view('pages.assessment.overview', compact('comments'));
    }

    public function category($id){
        $category = Category::find($id);
        $assessments = $category->assessments;
        return view('pages.assessment.category', compact('assessments', 'category'));
    }
}
