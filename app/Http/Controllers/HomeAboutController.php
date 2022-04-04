<?php

namespace App\Http\Controllers;

use App\Models\HomeAbout;
use App\Http\Requests\StoreHomeAboutRequest;
use App\Http\Requests\UpdateHomeAboutRequest;
use App\Models\Option;

class HomeAboutController extends Controller
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
        return view('back.pages.home.home-about-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHomeAboutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHomeAboutRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeAbout  $homeAbout
     * @return \Illuminate\Http\Response
     */
    public function show(HomeAbout $homeAbout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeAbout  $homeAbout
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeAbout $homeAbout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomeAboutRequest  $request
     * @param  \App\Models\HomeAbout  $homeAbout
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomeAboutRequest $request, HomeAbout $homeAbout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeAbout  $homeAbout
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeAbout $homeAbout)
    {
        //
    }
}
