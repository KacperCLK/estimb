<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $offers = Offer::all();

        return view('index', compact('offers'));
    }
}
