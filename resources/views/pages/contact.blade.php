@extends('layouts.app')

@section('content')
<main id="main">
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