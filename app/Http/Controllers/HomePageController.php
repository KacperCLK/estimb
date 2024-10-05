<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Text;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $offers = Offer::all();
        $texts = Text::all()->keyBy('key');

        return view('index', compact('offers', 'texts'));
    }
}
