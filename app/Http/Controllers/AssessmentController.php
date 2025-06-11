<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\Category;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AssessmentController extends Controller
{
    public function showCreate()
    {
        $categories = Category::all();
        return view('pages.assessment.create', compact('categories'));
    }

    public function create(Request $request){
        // return $request;

        // dd(var_dump(session()->get('user_id')));
        $validated = $request->validate([
            'title' => ['required', 'max:255'],
            'assessment' => ['string'],
            'category' => ['required', 'max:10']
        ]);

        // unset($validated['category']);
        // dd($validated);
        // dd(session()->get('user_id'));
        // dd(session()->get('user_id'));

        $assessment = Assessment::create([
            'title' => $validated['title'],
            'assessment' => $validated['assessment'],
            'user_id' => session()->get('user_id')
        ]);

        // dd('data', $assessment);


        $assessment->categories()->attach($validated['category']);

        return redirect()->route('show.user.dashboard');

        // dd($assessment);
    }
}
