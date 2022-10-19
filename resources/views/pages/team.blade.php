@extends('layouts.index')
@section('content')
        <!-- ========== PAGE TITLE ========== -->
        <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
        background-size: cover;">
            <div class="container">
              <div class="inner">
                <h1>OUR STAFF</h1>
                <ol class="breadcrumb">
                  <li>
                    <a href="index.html">Home</a>
                  </li>
                  <li>Our Staff</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- ========== MAIN ========== -->
          <main class="location-page">
            <div class="container">
              <div class="row">

@foreach ($teammembers as $staff )
 <!-- ITEM -->
 <div class="col-lg-3 col-md-6">
    <div class="staff-item">
      <figure>
        <img src="images/staff/{{ $staff->image }}" class="img-fluid" alt="Image">
        <div class="position">{{ $staff->title }}</div>
      </figure>
      <div class="details">
        <h5>{{ $staff->name }}</h5>
        <p>{{ $staff->description }}</p>
      </div>
    </div>
  </div>
@endforeach



              </div>
            </div>
          </main>
@endsection
