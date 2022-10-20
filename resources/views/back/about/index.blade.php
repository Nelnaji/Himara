@extends('layouts.app')
@section('backContent')
<div class="flex flex-wrap items-center">
    <div
      class="relative w-full px-4 max-w-full flex-grow flex-1"
    >
      <h3 class="font-semibold text-lg text-blueGray-700">
        about links
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



                <!-- Projects table -->
                <table
                  class="items-center w-full bg-transparent border-collapse"
                >

                {{-- Table header --}}
                  <thead>
                    <tr>
                      <th
                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                      >
                        Name
                      </th>
                      <th
                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                      >
                        href
                      </th>

                      <th
                        class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"
                      ></th>
                    </tr>
                  </thead>


                  {{-- Table body --}}
                  <tbody>


                    @foreach ($abouts as $about)


                    <tr>

                      <td
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                      >
                       {{$about->name}}
                      </td>
                      <td
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                      >
                        <i class="fas fa-circle text-orange-500 mr-2"></i>

                      </td>

                      <td
                        class="relative border-t-0 px-6border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right"
                      >
                        <a
                          href="#"
                          class="text-blueGray-500 block py-1 px-3"
                          onclick="openDropdown(event,'table-light-{{ $about->id }}-dropdown')"
                        >
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div
                          class="hidden absolute bg-white text-base z-50 float-right py-2 list-none text-left rounded shadow-lg min-w-48 right-0 top-0"
                          id="table-light-{{ $about->id }}-dropdown"
                        >
                          <a
                            href="{{ route('about.edit', $about->id) }}"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                            >Edit</a
                          >
                          <div
                            class="h-0 my-2 border border-solid border-blueGray-100"
                          ></div>
                          <a
                            href="{{ route('about.destroy', $about) }}"
                            class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                            >Delete</a
                          >
                        </div>
                      </td>
                    </tr>
                    @endforeach


                  </tbody>

                </table>

              </div>

            </div>
            <div class="flex w-full justify-end">

                <a href="{{ route('about.create') }}" class="px-4 py-2 bg-currentGold border border-transparent rounded-ls font-semibold text-xs text-white uppercase tracking-widest hover:bg-hoverGold active:bg-hoverGold focus:outline-none focus:border-hoverGold focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ">Add new link</a>
            </div>
            </div>

        </div>

    </div>

</section>
@endsection
