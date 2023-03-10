<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $trains = Train::where('departure_time', '>=', now())->get();

        return view('homepage', compact('trains'));
    }
}
