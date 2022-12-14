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

        $navlinks = Nav::all();
        return view('back.nav.index', compact('navlinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.nav.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNavRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNavRequest $request)
    {
        Nav::create([
            'name' => $request->input('name'),
            'href' => $request->input('href')
        ]);

    return redirect()->route('nav.index');
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
        return view('back.nav.edit' , compact('nav'));
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
        $nav->update([
            'name'=> $request->name,
            'href' => $request->href
        ]);

    return redirect()->route('nav.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nav  $nav
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nav $nav)
    {
       $nav->delete();
       return redirect()->route('nav.index');
    }
}
