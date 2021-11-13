<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\Discussion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileDiscussionController extends Controller
{
    public function index()
    {
        $discussions = Discussion::where('user_id', Auth::user()->id)->get();

        return view('pages.front.profile.discussion', [
            'discussions' => $discussions
        ]);
    }
}
