<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function provinces(Request $requset)
    {
        return Province::all();
    }

    public function regencies(Request  $requset, $provinces_id)
    {
        return Regency::where('province_id', $provinces_id)->get();
    }

    public function districts(Request  $requset, $regencies_id)
    {
        return District::where('regency_id', $regencies_id)->get();
    }

    public function villages(Request  $requset, $districts_id)
    {
        return Village::where('district_id', $districts_id)->get();
    }
}
