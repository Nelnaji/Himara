@extends('layouts.index')
@section('content')
  <!-- ========== PAGE TITLE ========== -->
  <div
  class="page-title gradient-overlay op6"
  style="
    background: url(images/breadcrumb.jpg);
    background-repeat: no-repeat;
    background-size: cover;
  "
>
  <div class="container">
    <div class="inner">
      <h1>GALLERY</h1>
      <ol class="breadcrumb">
        <li>
          <a href="{{ route('welcome') }}">Home</a>
        </li>
        <li>Gallery</li>
      </ol>
    </div>
  </div>
</div>
<!-- ========== MAIN ========== -->
<main class="gallery-page">
  <!-- FILTERS -->
  <div class="container">
    <div class="gallery-filters">
      <a href="#" data-filter="*" class="filter active">ALL</a>
      <a href="#" data-filter=".filter-restaurant" class="filter"
        >RESTAURANT</a
      >
      <a href="#" data-filter=".filter-swimmingpool" class="filter"
        >SWIMMING POOL</a
      >
      <a href="#" data-filter=".filter-spa" class="filter">SPA</a>
      <a href="#" data-filter=".filter-roomview" class="filter"
        >ROOM VIEW</a
      >
    </div>
  </div>
  <!-- GALLERY -->
  <div class="container">
    <div class="grid image-gallery row">
      <!-- ITEM -->

      @foreach ($items as $item)
      <div class="gallery-item {{ $item->filter }} col-md-3">
        <figure class="gradient-overlay image-icon">
          <a href="images/gallery/{{ $item->image }}">
            <img
              src="images/gallery/{{ $item->image }}"
              class="img-fluid"
              alt="Image"
            />
          </a>
          <figcaption>{{ $item->figcaption }}</figcaption>
        </figure>
      </div>
      @endforeach



    </div>
  </div>
</main>

@endsection
