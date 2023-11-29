@extends('layouts.app')
@section('content')
<main id="main">

    <!-- Start Portfolio -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Projects</h2>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/bikebd.PNG " class="img-fluid lazy" alt="A ecommerce website" />
              <div class="portfolio-info">
                <h4>Bike BD</h4>
                <p>This is a a bike booking site. A complete project including front-end and backend.
                  User can book tour from this site.</p>
                <div class="portfolio-links">
                  <a target="_blank" href="https://assignment-12-79dce.web.app/">
                    Live Site
                  </a>
                  <a target="_blank" href="https://github.com/tanjilulkarim/bike-bd-server">
                    Details
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/dreamTravel.PNG" class="img-fluid lazy" alt="A ecommerce website" />
              <div class="portfolio-info">
                <h4>Dream Travels</h4>
                <p>This is a a online tour booking site. A complete project including front-end and backend.
                  User can book tour from this site.</p>
                <div class="portfolio-links">
                  <a target="_blank" href="https://dream-travels-bd.web.app/">
                    Live Site
                  </a>
                  <a target="_blank" href="https://github.com/tanjilulkarim/dream-travels-server-site">
                    Details
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/cityCare.PNG" class="img-fluid lazy" alt="A ecommerce website" />
              <div class="portfolio-info">
                <h4>City Care</h4>
                <p>It is a pharmacy and healthcare website.Pharmacists provide optimal management of medication for
                  chronic
                </p>
                <div class="portfolio-links">
                  <a target="_blank" href="https://citycare-online-pharmacy.web.app/">
                    Live Site
                  </a>
                  <a target="_blank" href="https://github.com/tanjilulkarim/health-care">
                    Details
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </section>
    <!-- End Portfolio -->

  </main>

@endsection