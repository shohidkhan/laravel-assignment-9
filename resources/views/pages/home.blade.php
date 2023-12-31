@extends('layouts.app')
@section('content')
<!-- Start Hero -->
<section id="hero" class="hero d-flex align-items-center justify-content-between">
    <div class="container left" data-aos="zoom-in" data-aos-delay="200">
      <h1>Shahid Ullah</h1>
      <p>
        I'm a
        <span class="typed" data-typed-items="Laravel Developer, Frontend Developer"></span>
      </p>
      <p class="mb-4">Every Expert Is Once A Beginner.</p>
      <div class="resume">
        <a href="https://drive.google.com/file/d/1k3Cw2tNJjr7omR6_1aKuMWy0U6rQwx_P/view?usp=sharing"
          class="download-resume my-sm-2 mx-sm-0" target="_blank">
          <i class="bx bxs-cloud-download"></i>
          Download Resume
        </a>
      </div>
    </div>
    <div class=" right" style="margin-right: 150px;">
      <img class="illustration" width="400" src="{{ asset('assets') }}/img/portfolio/tanjil-bg.png" alt="">
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- Start About -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>About</h2>
        </div>
        <div class="row">
          <div class="img-container col-lg-4 d-flex justify-content-center align-items-center overflow-hidden"
            data-aos="fade-right">
            <img id="aboutImage" src="{{ asset('assets') }}/img/illustration/dark_illustration.svg" class="img-fluid rounded"
              alt="Programmer Avatar" />
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Web Developer</h3>
            <p>
              Hi, I'm Tanjil. Enthusiastic web developer eager to contribute to team success through hard work,
              attention to detail, and excellent organizational skills. A clear understanding of coding and web
              development. Motivated to learn, grow and excel in computer-related fields. I wake up every morning
              excited to be as productive every day as I can. </p>

            <h5>Hobbies</h5>
            <div class="hobbies-icons">
              <i class='bx bxs-plane bx-flashing-hover' title="Traveling"></i>
              <i class='bx bx-code-block bx-flashing-hover' title="Coding"></i>
              <i class='bx bxs-joystick bx-flashing-hover' title="Playstation"></i>
              <i class='bx bxs-chess bx-flashing-hover' title="Chess"></i>
              <i class='bx bxs-music bx-flashing-hover' title="Music"></i>
            </div>
            <p>
              I consider myself equipped with most of web development skills, but I know I still need to learn a lot
              more. I am highly trainable and can easily learn tasks. If I don't have experience with software or skill,
              I am doing all the research to study it.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End About -->

    <!-- Start Skills -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Skills</h2>
          <p>
            These are the technologies and programming languages which I learned
          </p>
        </div>
        <div class="row skills-content">
          <div class="col-lg-6">
            <div class="progress">
              <span class="skill">HTML <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">CSS <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">TailwindCSS <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Bootstrap / React Bootstrap <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">React <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Material UI <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">React Router <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Node <i class="val">40%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Express <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Firebase <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">MongoDB <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">UI & UX <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Git &amp; Github<i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Skills -->



    <!-- Start Portfolio -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Projects</h2>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item">
            <div class="portfolio-wrap">
              <img data-src="{{ asset('assets') }}/img/portfolio/bikebd.PNG " class="img-fluid lazy" alt="A ecommerce website" />
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
              <img data-src="{{ asset('assets') }}/img/portfolio/dreamTravel.PNG" class="img-fluid lazy" alt="A ecommerce website" />
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
              <img data-src="{{ asset('assets') }}/img/portfolio/cityCare.PNG" class="img-fluid lazy" alt="A ecommerce website" />
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

    <!-- Start Contact -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact</h2>
          <p>
            Interested to work together? Let's talk.
          </p>
        </div>

        <div class="row mt-1">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class='bx bxs-map'></i>
                <h4>Location:</h4>
                <p>Dhaka, Bangladesh</p>
              </div>

              <div class="email">
                <i class='bx bxs-envelope'></i>
                <h4>Email:</h4>
                <p>shohidkhan4361@gmail.com</p>
              </div>

              <div class="phone">
                <i class='bx bxs-phone'></i>
                <h4>Phone:</h4>
                <p>+88-01879738480</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <!-- form submit or kaj baki roise  -->
            <form action="https://formsubmit.co/sanjidmahe@gmail.com" method="POST" class="php-email-form"
              id="contact-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Name" />
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" />
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" />
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" id="message"></textarea>
              </div>
              <div class="text-center">
                <button type="submit">Send Message</button>
              </div>
              <input type="hidden" name="_next" value="https://the-shahriar.github.io/thanks.html">
              <input type="hidden" name="_subject" value="You have a new email!">
            </form>
          </div>
        </div>
      </div>
    </section>
    <div class="form-alert"></div>
    <!-- End Contact -->
  </main>
@endsection