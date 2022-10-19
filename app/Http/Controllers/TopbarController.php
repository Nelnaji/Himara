<?php

namespace App\Http\Controllers;

use App\Models\Topbar;
use App\Http\Requests\StoreTopbarRequest;
use App\Http\Requests\UpdateTopbarRequest;

class TopbarController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTopbarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTopbarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Topbar  $topbar
     * @return \Illuminate\Http\Response
     */
    public function show(Topbar $topbar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Topbar  $topbar
     * @return \Illuminate\Http\Response
     */
    public function edit(Topbar $topbar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTopbarRequest  $request
     * @param  \App\Models\Topbar  $topbar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTopbarRequest $request, Topbar $topbar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topbar  $topbar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topbar $topbar)
    {
        //
    }
}
