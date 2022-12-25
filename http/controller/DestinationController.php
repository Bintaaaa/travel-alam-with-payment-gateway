<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Province;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['provinces'] = Province::all();
        $this->data['locations'] = Location::with('province')->get();

        return view('travel-alam.destinasi.index', $this->data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $location = Location::where('slug', $slug)->first();

        if (!$location) {
            return redirect('destinasi');
        }

        $this->data['location'] = $location;

        return view('travel-alam.destinasi.detail', $this->data);
    }
}
