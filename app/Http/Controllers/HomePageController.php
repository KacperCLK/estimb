<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\OurValue;
use App\Models\Text;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $offers = Offer::all();
        $texts = Text::all()->keyBy('key');
        $ourValues = OurValue::all();

        return view('index', compact('offers', 'texts', 'ourValues'));
    }
}
