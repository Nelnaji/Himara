<section class="about mt100">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="section-title">
            <h4 class="text-uppercase">
                {{ $titles[0]->main_title }} <span class="text-himara"> {{ $titles[0]->color_title }}</span>
            </h4>
            <p class="section-subtitle">
          {{$about{0}->sub_title}}
            </p>
          </div>
          <div class="info-branding">
            <p>
         {{$about[0]->body}}
            </p>
            <div class="providers">
              <span>Recommended on:</span>
              <!-- ITEM -->
              <div class="item">
                <a href="#">
                  <img src="images/providers/{{ $about[0]->recommended_1 }}" alt="Image" />
                </a>
              </div>
              <!-- ITEM -->
              <div class="item">
                <a href="#">
                  <img src="images/providers/{{ $about[0]->recommended_2 }}" alt="Image" />
                </a>
              </div>
              <!-- ITEM -->
              <div class="item">
                <a href="#">
                  <img src="images/providers/{{ $about[0]->recommended_3 }}" alt="Image" />
                </a>
              </div>
              <!-- ITEM -->
              <div class="item">
                <a href="#">
                  <img src="images/providers/{{ $about[0]->recommended_4 }}" alt="Image" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="brand-info">
            <div class="inner">
              <div class="content">
                <img
                  src="images/logo-big-transparent.svg"
                  width="100"
                  alt="Image"
                />
                <div class="stars">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <h5 class="title">{{ $about[0]->card_title }}</h5>
                <p class="mt20">
               {{$about[0]->card_body}}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
