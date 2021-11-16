<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\SubChat;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        $chats = Chat::where('friend_id', Auth::user()->id)->get();
        // $lastsent = Chat::where('user_id', Auth::user()->id)->get();
        // $chats = Chat::whereHas('subchat', function ($query) {
        //     return $query->where('user_id', '=', Auth::user()->id);
        // })->where('friend_id', Auth::user()->id)->get();
        $subchats = SubChat::where('user_id', Auth::user()->id)->get();
        return view('pages.front.profile.chat', [
            'chats' => $chats,
            'subchats' => $subchats,
            // 'lastsent' => $lastsent,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Chat::create($data);

        return redirect()->route('chat');
    }

    public function storeSub(Request $request)
    {
        $data = $request->all();

        SubChat::create($data);

        return back();
    }
}
