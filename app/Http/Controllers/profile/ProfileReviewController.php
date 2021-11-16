<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ProfileReviewController extends Controller
{
    public function index()
    {
        return view('pages.front.profile.review');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store('assets/review','public');

        Review::create($data);

        return redirect()->route('profile-review-index');
    }
}
