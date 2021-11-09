<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayController extends Controller
{
    public function index()
    {
        return view('pages.front.buy-direct');
    }
}
