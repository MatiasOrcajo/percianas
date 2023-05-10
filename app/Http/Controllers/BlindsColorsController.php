<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BlindsColors;
use Illuminate\Http\Request;

class BlindsColorsController extends Controller
{
    public function store(Request $request)
    {
        BlindsColors::create($request->toArray());

        return back();
    }

    public function edit(BlindsColors $color, Request $request)
    {
        $color->update($request->toArray());

        return back();
    }

    public function delete(BlindsColors $color)
    {
        $color->delete();

        return back();
    }
}
