<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chat;
use App\Models\SubChat;
use Illuminate\Support\Facades\Auth;

class SellerChatController extends Controller
{
    public function index()
    {
        // return view('pages.seller.chats');

        $chats = Chat::where('user_id', Auth::user()->id)->get();
        // $lastsent = Chat::where('friend_id', Auth::user()->id)->get();

        // $chats = Chat::whereHas('subchat', function ($query) {
        //     return $query->where('user_id', '=', Auth::user()->id);
        // })->where('friend_id', Auth::user()->id)->get();
        $subchats = SubChat::where('user_id', Auth::user()->id)->get();
        return view('pages.seller.chats', [
            'chats' => $chats,
            'subchats' => $subchats,
            // 'lastsent' => $lastsent,
        ]);
    }
}
