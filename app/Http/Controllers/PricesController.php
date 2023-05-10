<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Prices;
use Illuminate\Http\Request;

class PricesController extends Controller
{
    public function index()
    {
        $price = Prices::first();

        return view('prices', compact('price'));
    }
}
