<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('back.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSliderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSliderRequest $request)
    {



        $request->validate([
        'main_title' => 'required|unique:posts|max:255',
        'sub_title' => 'required|unique:posts|max:255',
        'image' => ['required', 'mimes:jpg,png,jpeg,svg,gif', 'max:5048']

        ]);


        Slider::create([
            'star_title' => $request->input('star_title'),
            'main_title' => $request->input('main_title'),
            'sub_title' => $request->input('sub_title'),
            'button1' => $request->input('button1'),
            'button2' => $request->input('button2'),
            'image' => $this->storeImage($request),

        ]);

    return redirect()->route('slider.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('back.slider.edit' , compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSliderRequest  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        $slider->update([
            'main_title'=> $request->main_title,
            'sub_title'=> $request->sub_title,
            'star_title'=> $request->star_title,
            'button1'=> $request->button1,
            'button2'=> $request->button2,
            'image'=> $request->image
        ]);


    return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('slider.index');
    }

    private function storeImage($request) {
        $newImageName = uniqid() . '-' . $request->image . '.' . $request->image->extension();
        return $request->image->move(public_path('images/slider/'), $newImageName);
    }
}
