
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
      <x-index.video></x-index.video>

      <!-- ========== CONTACT V2 ========== -->
      <x-index.contact>
      </x-index.contact>



@endsection
