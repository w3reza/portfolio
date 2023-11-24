@extends('frontend.layouts.app')
@section('title','Reza Protfolio | Home')
@section('content')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>I'm <span>Reza</span> a Professional Web Developer from Bangladesh</h2>
          <p>Blanditiis praesentium aliquam illum tempore incidunt debitis dolorem magni est deserunt sed qui libero. Qui voluptas amet.</p>
          <a href="{{ route('contact') }}" class="btn-get-started">Available for hire</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1000">

  <div class="container">
    <h1>Welcome to My Portfolio</h1>
    <p>Experienced Laravel developer with a strong skill set in building robust web applications. Passionate about delivering high-quality, scalable solutions. Here are some key skills:</p>
    <a href="{{ route('contact') }}" class="btn-get-started">Contact with Me</a>
</div>

   
    

  </main><!-- End #main -->

  @endsection