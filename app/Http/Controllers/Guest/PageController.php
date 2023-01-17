<?php

namespace App\Http\Controllers\Guest;

use Carbon\Carbon;
use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $trains = Train::all();

        $filtered = $trains->filter(function($value, $day){
            return $value >= Carbon::now();
        });
        $filtered->all();

        return view('homepage', compact('filtered'));
    }
}
