 <!-- ========== GALLERY ========== -->
 <section class="gallery">
    <div class="container">
      <div class="section-title">
        <h4>{{ $titles[3]->main_title }} <span class="text-himara">{{ $titles[3]->color_title }}</span></h4>
        <p class="section-subtitle">Check out our image gallery</p>
        <a href="{{ route("gallery") }}" class="view-all">View gallery images</a>
      </div>
      <div class="gallery-owl owl-carousel image-gallery">
        @foreach ($items as $item)
        <!-- ITEM -->
        <div class="gallery-item">
            <figure class="gradient-overlay image-icon">
              <a href="images/gallery/{{ $item->image }}">
                <img src="images/gallery/{{ $item->image }}" alt="image" />
              </a>
              <figcaption>{{ $item->figcaption }}</figcaption>
            </figure>
          </div>


        @endforeach
      </div>
    </div>
  </section>
