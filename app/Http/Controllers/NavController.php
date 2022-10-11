<?php

namespace App\Http\Controllers;

use App\Models\Nav;
use App\Http\Requests\StoreNavRequest;
use App\Http\Requests\UpdateNavRequest;

class NavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        $nav = Nav::all();
        return view('back.nav.index', compact('nav'));
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
     * @param  \App\Http\Requests\StoreNavRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNavRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nav  $nav
     * @return \Illuminate\Http\Response
     */
    public function show(Nav $nav)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nav  $nav
     * @return \Illuminate\Http\Response
     */
    public function edit(Nav $nav)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNavRequest  $request
     * @param  \App\Models\Nav  $nav
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNavRequest $request, Nav $nav)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nav  $nav
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nav $nav)
    {
        //
    }
}
