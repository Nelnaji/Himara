      <!-- ========== VIDEO ========== -->
      <section
        class="video np parallax gradient-overlay op6"
        data-src="images/{{ $video[0]->image }}"
        data-parallax="scroll"
        data-speed="0.3"
        data-mirror-selector=".wrapper"
        data-z-index="0"
      >
        <div class="inner gradient-overlay">
          <div class="container">
            <div class="video-popup">
              <a
                class="popup-vimeo"
                href="{{ $video[0]->url }}"
              >
                <i class="fa fa-play"></i>
              </a>
            </div>
          </div>
        </div>
      </section>
