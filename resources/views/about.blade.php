@extends('layouts.master')
@section('container')

<!-- About Section -->
<section id="about" class="about section">
    <div class="container mt-4">
        <H1>ABOUT</H1>
      <div class="row gy-4">

        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
          <p class="who-we-are">Who We Are</p>
          <h3>Unleashing Potential with Creative Strategy</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
            <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
          </ul>
          <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">
            <div class="col-lg-6">
              <img src="img/about-company-1.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6">
              <div class="row gy-4">
                <div class="col-lg-12">
                  <img src="img/about-company-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-12">
                  <img src="img/about-company-3.jpg" class="img-fluid" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section><!-- /About Section -->


@endsection
