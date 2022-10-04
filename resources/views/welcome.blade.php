
@extends('layouts.index')
@section('content')

    <!-- ========== PRELOADER ========== -->
    <div class="loader loader3">
        <div class="loader-inner">
          <div class="spin">
            <span></span>
            <img src="images/logo.svg" alt="Hotel Himara" />
          </div>
        </div>
      </div>






      {{-- this is the Authentification that I'll have to change, Breeze --}}
{{--
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

        <!-- ========== SLIDER ========== You can find the component, in compenents/index-->
    <x-index.slider>
    </x-index.slider>

      <!-- ========== ABOUT ========== -->
      <x-index.about>
    </x-index.about>

      <!-- ========== ROOMS ========== -->
    <x-index.rooms>
    </x-index.rooms>


      <!-- ========== SERVICES ========== -->
     <x-index.services>
    </x-index.services>
      <!-- ========== GALLERY ========== -->
    <x-index.gallery>
    </x-index.gallery>

      <!-- ========== TESTIMONIALS ========== -->
    <x-index.testimonials>
    </x-index.testimonials>
      <!-- ========== RESTAURANT ========== -->
    <x-index.restaurant>
    </x-index.restaurant>
      <!-- ========== NEWS ==========-->
      <x-index.news>
      </x-index.news>
      <!-- ========== VIDEO ========== -->
      <x-video.news></x-video.news>

      <!-- ========== CONTACT V2 ========== -->
      <x-index.contact>
      </x-index.contact>



@endsection
