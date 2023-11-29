@extends('layouts.app')
@section('content')
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
            <img id="aboutImage" src="assets/img/illustration/dark_illustration.svg" class="img-fluid rounded"
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
            <span class="skill">React <i class="val">25%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
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
        </div>
        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">React Router <i class="val">20%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>
          <div class="progress">
            <span class="skill">PHP <i class="val">60%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Laravel <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Api <i class="val">70%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
              </div>
            </div>
          </div>
          <div class="progress">
            <span class="skill">Restful Api <i class="val">50%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
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


  


    <!-- End Contact -->
  </main>

@endsection
