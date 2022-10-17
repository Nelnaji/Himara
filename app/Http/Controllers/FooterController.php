<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Http\Requests\StoreFooterRequest;
use App\Http\Requests\UpdateFooterRequest;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footers = Footer::all();
        return view('back.footer.index', compact('footers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.footer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFooterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFooterRequest $request)
    {
        Footer::create([
            'name' => $request->input('name'),

        ]);

    return redirect()->route('footer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        return view('back.footer.edit' , compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFooterRequest  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFooterRequest $request, Footer $footer)
    {
        $footer->update([
            'name'=> $request->name,

        ]);

    return redirect()->route('footer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        $footer->delete();
        return redirect()->route('footer.index');
    }
}
