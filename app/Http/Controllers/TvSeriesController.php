<?php

namespace App\Http\Controllers;

use App\Models\TvSeries;
use Illuminate\Http\Request;

class TvSeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tvSeries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate input
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image_url' => 'required',
            'episode_number' => 'required',
            'rating' => 'required',
        ]);

        //create a new tv serie
        TvSeries::create($request->all());

        //redirect user and send friendly msg
        return redirect()->route('tvseries.index')->with('success', 'Tv Series added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TvSeries  $tvSeries
     * @return \Illuminate\Http\Response
     */
    public function show(TvSeries $tvSeries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TvSeries  $tvSeries
     * @return \Illuminate\Http\Response
     */
    public function edit(TvSeries $tvSeries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TvSeries  $tvSeries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TvSeries $tvSeries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TvSeries  $tvSeries
     * @return \Illuminate\Http\Response
     */
    public function destroy(TvSeries $tvSeries)
    {
        //
    }
}
