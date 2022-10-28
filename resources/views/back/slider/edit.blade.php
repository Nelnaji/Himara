@extends('layouts.app')
@section('backContent')
<div class="flex flex-wrap items-center">
    <div
      class="relative w-full px-4 max-w-full flex-grow flex-1"
    >
      <h3 class="font-semibold text-lg text-blueGray-700">
        slider  {{ $slider->id }} /edit
      </h3>
    </div>
  </div>



    <div class="px-4 md:px-10 mx-auto w-full">
        <div class="flex flex-wrap mt-4">
          <div class="w-full mb-12 px-4">
            <div
              class="flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white"
            >

              <div class="block w-full overflow-x-auto">


                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                <form method="POST" action="{{ route('slider.update', $slider) }}" enctype='multipart/form-data' >
                        @csrf
                        @method('PUT')

                      <h6
                        class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase"
                      >
                        slider Link Information  ID : {{ $slider->id }}
                      </h6>
                      <div class="flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                                <label
                                  class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                  htmlFor="grid-password"
                                >
                                Star title
                                </label>
                                <input
                                  type="text"
                                  class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                  name="star_title"
                                  value="{{ $slider->star_title }}"
                                />

                              </div>
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                              main title
                            </label>
                            <input
                              type="text"
                              class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                              name="main_title"
                              value="{{ $slider->main_title }}"
                            />

                          </div>
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                             Sub title
                            </label>
                            <input
                              type="text"
                              class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                              name="sub_title"
                              value="{{ $slider->sub_title }}"
                            />

                          </div>
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                              Left button
                            </label>
                            <input
                              type="text"
                              class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                              name="button1"
                              value="{{ $slider->button1 }}"
                            />

                          </div>
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                              Right button
                            </label>
                            <input
                              type="text"
                              class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                              name="button2"
                              value="{{ $slider->button2 }}"
                            />

                          </div>
                        </div>
                        <div class="w-full lg:w-6/12 px-4">
                          <div class="relative w-full mb-3">
                            <label for="image"
                              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"

                            >
                              Image
                            </label>

                            <img src="/images/slider/{{ $slider->image }}" class="h-48 py-2" alt="">

                    <input value="{{ $slider->image }}" type="file" class="inline-flex items-center px-4 py-2 bg-currentGold border border-transparent rounded-ls font-semibold text-xs text-white uppercase tracking-widest hover:bg-hoverGold active:bg-hoverGold focus:outline-none focus:border-hoverGold focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" name="image" />


                          </div>
                        </div>

                      </div>

    <button type="submit" class="inline-flex items-center px-4 py-2 bg-currentGold border border-transparent rounded-ls font-semibold text-xs text-white uppercase tracking-widest hover:bg-hoverGold active:bg-hoverGold focus:outline-none focus:border-hoverGold focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Save Changes</button>

                    </form>
                  </div>
                <!-- Projects table -->

              </div>
            </div>
          </div>

        </div>

    </div>

</section>
@endsection
