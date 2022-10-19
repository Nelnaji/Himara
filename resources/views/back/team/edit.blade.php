@extends('layouts.app')
@section('backContent')
<div class="flex flex-wrap items-center">
    <div
      class="relative w-full px-4 max-w-full flex-grow flex-1"
    >
      <h3 class="font-semibold text-lg text-blueGray-700">
       team  {{ $team->id }} /edit
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
                <form method="POST" action="{{ route('team.update', $team) }}">
                        @csrf
                        @method('PUT')
                      <h6
                        class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase"
                      >
                        Team Link Information  ID : {{ $team->id }}
                      </h6>
                      <div class="flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4">
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                             Title
                            </label>
                            <input
                              type="text"
                              class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                              name="title"
                              value="{{ $team->title }}"
                            />

                          </div>
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                             name
                            </label>
                            <input
                              type="text"
                              class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                              name="name"
                              value="{{ $team->name }}"
                            />

                          </div>
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                              htmlFor="grid-password"
                            >
                              Description
                            </label>
                            <input
                              type="text"
                              class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                              name="description"
                              value="{{ $team->description }}"
                            />

                          </div>

                        </div>
                        <div class="w-full lg:w-6/12 px-4">
                          <div class="relative w-full mb-3">
                            <label
                              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"

                            >
                              Image
                            </label>

                            <img src="/images/staff/{{ $team->image }}" class="h-48 py-2" alt="">

            <input type="file" class="form-control" name="image" />


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
