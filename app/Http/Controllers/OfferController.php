<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;

class OfferController extends Controller
{
    public function about_index()
        {
            $Offers = Offer::latest()->paginate(3);
            return view('about', compact ('Offers'));
        }
}
