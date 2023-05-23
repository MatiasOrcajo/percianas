<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blinds;
use Illuminate\Http\Request;

class BlindsController extends Controller
{
    public function index()
    {
        $blinds = Blinds::all();

        return view('admin.blinds', compact('blinds'));
    }

    public function store(Request $request)
    {
        Blinds::create($request->toArray());

        return back();
    }

    public function edit(Blinds $blind, Request $request)
    {
        $blind->update($request->toArray());

        return back();
    }

    public function delete(Blinds $blind)
    {
        $blind->delete();

        return back();
    }

    public function show(Blinds $blind)
    {
//        dd($blind);
        return view('admin.showBlind', compact('blind'));
    }
}
