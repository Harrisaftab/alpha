@extends('layouts.guest')
@section('title', 'Surgical Drapes & Medical Textiles Supplier in Pakistan | AlphaTec Surgical LLP')
@section('meta_description', 'AlphaTec Surgical LLP is a trusted supplier of surgical drapes, disposable surgery packs, sterile gowns, and medical textiles for hospitals across Pakistan.')
@section('meta_keywords', 'surgical drapes, disposable surgery packs, sterile gowns, medical textiles, surgical products Pakistan, AlphaTec Surgical LLP, healthcare supplies, surgery sets, hospital drapes, medical supplies distributor')
@section('content')
<style>
  .bg-video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: -1;
  }

  .bg-video iframe {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 177.7778vh; /* 100vh * (16/9) */
      height: 100vh;
      transform: translate(-50%, -50%);
      border: 0;
      pointer-events: none;
  }

  /* For very wide screens (landscape desktops) */
  @media (min-aspect-ratio: 16/9) {
      .bg-video iframe {
          width: 100vw;
          height: 56.25vw; /* 100vw * (9/16) */
      }
  }

  /* For tall screens (mobiles and tablets) */
  @media (max-aspect-ratio: 16/9) {
      .bg-video iframe {
          width: 177.7778vh;
          height: 100vh;
      }
  }
</style>
    <section class="slider">
        <div class="slick-carousel m-slides-0"
            data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}'>
            <div class="slide-item align-v-h">
              {{-- <div class="bg-img"><img src="{{ asset('web-assets/images/sliders/2.png') }}" alt="slide img"></div> --}}
                  <div class="bg-video">
                      <iframe 
                          src="https://player.vimeo.com/video/1144981229?autoplay=1&muted=1&loop=1&background=1" 
                          frameborder="0"
                          allow="autoplay; fullscreen; picture-in-picture"
                          allowfullscreen>
                      </iframe>
                  </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                        <div class="slide__content mx-5">
                            <h1 class="slide__title text-white">Premium Surgical Draping Solutions</h1>
                            <p class="slide__desc text-white">AlphaTec Surgical LLP delivers safe, sterile, and comfortable solutions for every procedure, providing 
                              high-quality surgical drapes, gowns, and disposable surgery packs trusted by hospitals, clinics, and 
                              healthcare professionals across Pakistan.
                            </p>
                              <div class="d-flex flex-wrap align-items-center">
                                <a href="{{ route('contact') }}" class="btn btn__primary btn__rounded mr-30" tabindex="0">
                                  <span>Contact Us</span>
                                  <i class="icon-arrow-right"></i>
                                </a>
                                <a href="{{ route('all_services.index') }}" class="btn btn__white btn__rounded" tabindex="0">
                                  <span>Our Products</span>
                                  <i class="icon-arrow-right"></i>
                                </a>
                              </div>
                            {{-- <ul class="features-list list-unstyled mb-0 d-flex flex-wrap">
                                <li class="feature-item">
                                <div class="feature__icon">
                                    <i class="icon-heart"></i>
                                </div>
                                <h2 class="feature__title text-white">Sterile Drapes</h2>
                                </li>
                                <li class="feature-item">
                                <div class="feature__icon">
                                    <i class="icon-medicine"></i>
                                </div>
                                <h2 class="feature__title text-white">Surgery Packs</h2>
                                </li>
                                <li class="feature-item">
                                <div class="feature__icon">
                                    <i class="icon-heart2"></i>
                                </div>
                                <h2 class="feature__title text-white">Reinforced Gowns</h2>
                                </li>
                                <li class="feature-item">
                                <div class="feature__icon">
                                    <i class="icon-blood-test"></i>
                                </div>
                                <h2 class="feature__title text-white">Reinforced Gowns</h2>
                                </li>
                            </ul> --}}
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item align-v-h">
                {{-- <div class="bg-img"><img src="{{ asset('web-assets/images/sliders/1.png') }}" alt="slide img"></div> --}}
                  <div class="bg-video">
                      <iframe 
                          src="https://player.vimeo.com/video/1144982205?autoplay=1&muted=1&loop=1&background=1" 
                          frameborder="0"
                          allow="autoplay; fullscreen; picture-in-picture"
                          allowfullscreen>
                      </iframe>
                  </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                            <div class="slide__content mx-5">
                                <h2 class="slide__title text-white">Reliable Surgical Solutions</h2>
                                <p class="slide__desc text-white">We deliver world-class medical textiles and surgical consumables designed to support precision,
                                    hygiene, and operational efficiency in every operating room. Your safety demands the best—so we
                                    deliver nothing less.
                                </p>
                                <div class="d-flex flex-wrap align-items-center">
                                  <a href="{{ route('contact') }}" class="btn btn__primary btn__rounded mr-30" tabindex="0">
                                    <span>Contact Us</span>
                                    <i class="icon-arrow-right"></i>
                                  </a>
                                  <a href="{{ route('all_services.index') }}" class="btn btn__white btn__rounded" tabindex="0">
                                    <span>Our Products</span>
                                    <i class="icon-arrow-right"></i>
                                  </a>
                                </div>
                                {{-- <ul class="features-list list-unstyled mb-0 d-flex flex-wrap">
                                
                                    <li class="feature-item">
                                        <div class="feature__icon">
                                        <i class="icon-heart"></i>
                                        </div>
                                        <h2 class="feature__title text-white">Premium Drapes</h2>
                                    </li>
                                    
                                    <li class="feature-item">
                                        <div class="feature__icon">
                                        <i class="icon-medicine"></i>
                                        </div>
                                        <h2 class="feature__title text-white">Custom Packs</h2>
                                    </li>
                                    
                                    <li class="feature-item">
                                        <div class="feature__icon">
                                        <i class="icon-heart2"></i>
                                        </div>
                                        <h2 class="feature__title text-white">Gowns</h2>
                                    </li>
                                    
                                    <li class="feature-item">
                                        <div class="feature__icon">
                                        <i class="icon-blood-test"></i>
                                        </div>
                                        <h2 class="feature__title text-white">OR Solutions</h2>
                                    </li>
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-info py-0">
      <div class="container">
        <div class="row row-no-gutter boxes-wrapper">
          <div class="col-sm-12 col-md-4">
            <div class="contact-box d-flex">
              <div class="contact__icon">
                <i class="icon-call3"></i>
              </div>
              <div class="contact__content">
                <h2 class="contact__title">Customer Support</h2>
                <p class="contact__desc">Have questions about our surgical drapes, gowns, or disposable packs? 
                  Our support team is available to assist with product inquiries, quotations, and order requirements.</p>
                <a href="tel:+923206995613" class="phone__number">
                  <i class="icon-phone"></i> <span>+92 320 6995613</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="contact-box d-flex">
              <div class="contact__icon">
                <i class="icon-health-report"></i>
              </div>
              <div class="contact__content">
                <h2 class="contact__title">Product Catalogue</h2>
                <p class="contact__desc">Explore our complete range of surgical drapes, 
                  customized procedure packs, medical textiles, and sterile gowns designed for all clinical environments.</p>
                <a href="{{ route('home') }}" class="btn btn__white btn__outlined btn__rounded">
                  <span>View Products</span><i class="icon-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="contact-box d-flex">
              <div class="contact__icon">
                <i class="icon-heart2"></i>
              </div>
              <div class="contact__content w-100">
                <h2 class="contact__title">Business Hours</h2>
                <ul class="time__list list-unstyled mb-0">
                  <li><span>Monday - Friday</span> <span>9:00 am - 9:00 pm</span></li>
                  <li><span>Saturday</span><span>10:00 am – 4:00 pm</span></li>
                  <li><span>Sunday</span><span>Closed</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="about-layout1 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading-layout2">
              <h3 class="heading__title mb-40">Enhancing Healthcare Quality Through Advanced Surgical Solutions.</h3>
            </div><!-- /heading -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="about__Text">
              <p class="mb-30">Our mission is to provide reliable, innovative, and high-quality surgical products that 
                empower healthcare professionals to deliver safer and more efficient patient care.
              </p>
              <p class="mb-30">From premium surgical drapes and sterile packs to protective gowns and custom solutions,
                 we ensure every product meets strict international standards for performance, safety, and comfort.</p>
              <div class="d-flex align-items-center mb-30">
                <a href="doctors-grid.html" class="btn btn__primary btn__outlined btn__rounded mr-30">
                   Explore Our Products</a>
                <img src="web-assets/images/about/singnture.png" alt="singnture">
              </div>
            </div>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="video-banner">
              <img src="web-assets/images/about/1.jpg" alt="about">
              <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
              </a>
            </div><!-- /.video-banner -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
    <section class="features-layout1 pt-130 pb-50 mt--90">
      <div class="bg-img"><img src="web-assets/images/backgrounds/1.jpg" alt="background"></div>
      <div class="container">
        <div class="row mb-40">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="heading__layout2">
              <h3 class="heading__title">Why Healthcare Providers Trust Us.</h3>
            </div>
          </div><!-- /col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
            <p class="heading__desc font-weight-bold">We provide certified, reliable, and innovative products that support
               hospitals with consistent supply, customization, and premium quality.
            </p>
            <div class="d-flex flex-wrap align-items-center mt-40 mb-30">
              <a href="{{ route('contact') }}" class="btn btn__primary btn__rounded mr-30">
                <span>Request a Quote</span>
                <i class="icon-arrow-right"></i>
              </a>
              <a href="#" class="btn btn__secondary btn__link">
                <i class="icon-arrow-right icon-filled"></i>
                <span>Learn More</span>
              </a>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('web-assets/images/services/1.png') }}" alt="service" loading="lazy">
              </div>
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-heart"></i>
                </div>
                <h4 class="feature__title">GYNAECOLOGY</h4>
              </div>
              <a href="{{ route('all_services.index') }}" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('web-assets/images/services/2.png') }}" alt="service" loading="lazy">
              </div>
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-doctor"></i>
                </div>
                <h4 class="feature__title">GENERAL SURGERY</h4>
              </div>
              <a href="{{ route('all_services.index') }}" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('web-assets/images/services/3.png') }}" alt="service" loading="lazy">
              </div>
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-ambulance"></i>
                </div>
                <h4 class="feature__title">CARDIOVASCULAR</h4>
              </div>
              <a href="{{ route('all_services.index') }}" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('web-assets/images/services/4.png') }}" alt="service" loading="lazy">
              </div>
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-drugs"></i>
                </div>
                <h4 class="feature__title">ORTHOPEDIC</h4>
              </div>
              <a href="{{ route('all_services.index') }}" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('web-assets/images/services/5.png') }}" alt="service" loading="lazy">
              </div>
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-first-aid-kit"></i>
                </div>
                <h4 class="feature__title">UROLOGY</h4>
              </div>
              <a href="{{ route('all_services.index') }}" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('web-assets/images/services/6.png') }}" alt="service" loading="lazy">
              </div>
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-hospital"></i>
                </div>
                <h4 class="feature__title">NEUROLOGY</h4>
              </div>
              <a href="{{ route('all_services.index') }}" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('web-assets/images/services/7.png') }}" alt="service" loading="lazy">
              </div>
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-expenses"></i>
                </div>
                <h4 class="feature__title">OPHTHALMOLOGY</h4>
              </div>
              <a href="{{ route('all_services.index') }}" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('web-assets/images/services/8.png') }}" alt="service" loading="lazy">
              </div>
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-bandage"></i>
                </div>
                <h4 class="feature__title">SURGICAL GOWNS</h4>
              </div>
              <a href="{{ route('all_services.index') }}" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-md-12 col-lg-6 offset-lg-3 text-center">
            <p class="font-weight-bold mb-0">Your Trusted Partner in Surgical Draping & Medical Supplies 
              <a href="#" class="color-secondary">
                <span>Contact Us For More Information</span> <i class="icon-arrow-right"></i>
              </a>
            </p>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
    <section class="services-layout1 services-carousel">
        <div class="bg-img"><img src="{{ asset('web-assets/images/backgrounds/2.jpg') }}" alt="background"></div>
        <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-60">
                <h2 class="heading__subtitle">Premium Surgical Draping & Medical Supply Solutions</h2>
                <h3 class="heading__title">Delivering Reliable, Sterile, and High-Quality Products for Modern Healthcare Facilities.</h3>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slick-carousel"
                    data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                    
                    <div class="service-item">
                        <div class="service__icon">
                            <i class="icon-head"></i><i class="icon-head"></i>
                        </div>
                        <div class="service__content">
                            <h4 class="service__title">Surgical Drapes</h4>
                            <p class="service__desc">
                                Our high-performance surgical drapes are engineered from medical-grade materials 
                                to deliver superior barrier protection, fluid resistance, and reliable coverage 
                                across a wide range of procedures. Each drape ensures a sterile field and 
                                enhanced infection control in the operating environment.
                            </p>
                            <ul class="list-items list-items-layout1 list-unstyled">
                                <li>General Surgery Drapes</li>
                                <li>Adhesive & Incise Drapes</li>
                                <li>Reinforced Procedure Drapes</li>
                                <li>Anesthesia & Utility Drapes</li>
                            </ul>
                            <a href="#" class="btn btn__secondary btn__outlined btn__rounded">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="service__icon">
                            <i class="icon-heart"></i><i class="icon-heart"></i>
                        </div>
                        <div class="service__content">
                            <h4 class="service__title">Surgical Packs & Procedure Sets</h4>
                            <p class="service__desc">
                                We manufacture sterile, ready-to-use surgical packs designed to reduce preparation 
                                time, enhance workflow efficiency, and maintain strict aseptic standards. Each pack 
                                is assembled using premium components tailored to procedural requirements.
                            </p>
                            <ul class="list-items list-items-layout1 list-unstyled">
                                <li>General Surgery Packs</li>
                                <li>Minor & Major Procedure Packs</li>
                                <li>Custom Draping Sets</li>
                                <li>Sterile Gown & Drape Kits</li>
                            </ul>
                            <a href="#" class="btn btn__secondary btn__outlined btn__rounded">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="service__icon">
                            <i class="icon-microscope"></i><i class="icon-microscope"></i>
                        </div>
                        <div class="service__content">
                            <h4 class="service__title">Surgical Gowns</h4>
                            <p class="service__desc">
                                Our surgical gowns offer the ideal balance of protection, comfort, and durability. 
                                Produced using internationally compliant materials, these gowns protect healthcare 
                                professionals from fluid exposure while maintaining breathability and ease of movement.
                            </p>
                            <ul class="list-items list-items-layout1 list-unstyled">
                                <li>Standard & Reinforced Gowns</li>
                                <li>Advanced ULL-Stitched Protection Gowns</li>
                                <li>Isolation & Procedure Gowns</li>
                            </ul>
                            <a href="#" class="btn btn__secondary btn__outlined btn__rounded">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="service__icon">
                            <i class="icon-dropper"></i><i class="icon-dropper"></i>
                        </div>
                        <div class="service__content">
                            <h4 class="service__title">Laboratory Consumables</h4>
                            <p class="service__desc">
                                We supply high-quality laboratory consumables designed for accuracy, hygiene, and 
                                efficient clinical workflow. All products meet international quality benchmarks 
                                for diagnostic and analytical environments.
                            </p>
                            <ul class="list-items list-items-layout1 list-unstyled">
                                <li>Sample Collection Materials</li>
                                <li>Sterile Disposable Lab Items</li>
                                <li>Fluid Handling Accessories</li>
                            </ul>
                            <a href="#" class="btn btn__secondary btn__outlined btn__rounded">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="service__icon">
                            <i class="icon-heart3"></i><i class="icon-heart3"></i>
                        </div>
                        <div class="service__content">
                            <h4 class="service__title">Pediatric & General Care Disposables</h4>
                            <p class="service__desc">
                                Our pediatric and general-care disposable range ensures safe, hygienic, and 
                                comfortable usage across healthcare environments. Designed for single-use 
                                efficiency and optimal patient care.
                            </p>
                            <ul class="list-items list-items-layout1 list-unstyled">
                                <li>Disposable Underpads</li>
                                <li>Pediatric Absorbent Sheets</li>
                                <li>General Ward Consumables</li>
                            </ul>
                            <a href="#" class="btn btn__secondary btn__outlined btn__rounded">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="service__icon">
                            <i class="icon-heart2"></i><i class="icon-heart2"></i>
                        </div>
                        <div class="service__content">
                            <h4 class="service__title">Medical Protection Supplies</h4>
                            <p class="service__desc">
                                We provide a complete range of personal and clinical protection supplies 
                                designed to minimize contamination risk and support infection control 
                                in medical environments.
                            </p>
                            <ul class="list-items list-items-layout1 list-unstyled">
                                <li>Sterile Face Masks & Caps</li>
                                <li>Medical Shoe Covers</li>
                                <li>Protective Laminated Sheets</li>
                            </ul>
                            <a href="#" class="btn btn__secondary btn__outlined btn__rounded">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="work-process work-process-carousel pt-130 pb-0 bg-overlay-secondary">
        {{-- <div class="bg-img"><img src="web-assets/images/banners/1.jpg" alt="background"></div> --}}
        <div class="cta bg-primary pt-5">
            <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-2 col-lg-2">
                <img src="web-assets/images/icons/alert.png" class="cta__img" alt="alert">
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-12 col-md-7 col-lg-7">
                <h4 class="cta__title">True Healthcare For Your Family!</h4>
                <p class="cta__desc">Serve the community by improving the quality of life through better health. We have
                    put protocols to protect our patients and staff while continuing to provide medically necessary care.
                </p>
                </div><!-- /.col-lg-7 -->
                <div class="col-sm-12 col-md-12 col-lg-3">
                <a href="{{ route('contact') }}" class="btn btn__secondary btn__secondary-style2 btn__rounded mr-30">
                    <span>Healthcare Programs</span>
                    <i class="icon-arrow-right"></i>
                </a>
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </section>
    <section class="testimonials-layout2 pt-130 pb-40">
      <div class="container">
        <div class="testimonials-wrapper">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5">
              <div class="heading-layout2">
                <h3 class="heading__title">Inspiring Stories!</h3>
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-7">
              <div class="slider-with-navs">
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“We have been using Alphatec’s drapes, gowns, and custom procedure packs for several months.
                      The quality is exceptional and our surgeons prefer their reinforced gowns due to comfort and protection.
                      Highly recommended for any medical facility.”
                  </h3>
                </div>
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Alphatec Surgical LLP has consistently delivered high-quality surgical consumables.
                      Their products are reliable, sterile, and perfectly packaged for our operation room needs.
                      Delivery is always on time and the support team is extremely responsive.”
                  </h3>
                </div>
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Their customized surgical packs have helped us reduce preparation time and improve workflow efficiency.
                      The material quality, absorbency, and durability are far superior to what we used previously.”
                  </h3>
                </div>
              </div>
              <div class="slider-nav mb-60">
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="{{ asset('web-assets/images/testimonials/thumbs/1.png') }}" alt="author thumb">
                  </div>
                  <div>
                    <h4 class="testimonial__meta-title">Dr. Ahsan</h4>
                    <p class="testimonial__meta-desc">Senior Surgeon</p>
                  </div>
                </div>
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="{{ asset('web-assets/images/testimonials/thumbs/2.png') }}" alt="author thumb">
                  </div>
                  <div>
                    <h4 class="testimonial__meta-title">Nimra</h4>
                    <p class="testimonial__meta-desc">Purchasing Manager</p>
                  </div>
                </div>
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="{{ asset('web-assets/images/testimonials/thumbs/3.png') }}" alt="author thumb">
                  </div>
                  <div>
                    <h4 class="testimonial__meta-title">Dr. Bilal</h4>
                    <p class="testimonial__meta-desc">HOD of OT</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contact-layout3 bg-overlay bg-overlay-primary-gradient pb-60">
      <div class="bg-img"><img src="{{ asset('web-assets/images/banners/3.jpg') }}" alt="banner"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="contact-panel mb-50">
              <form class="contact-panel__form" id="contactForm" onsubmit="sendToWhatsApp(event)">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title">Need Assistance? We're Here to Help.</h4>
                    <p class="contact-panel__desc mb-30">
                      Whether you need support selecting the right drape, customizing a 
                      surgical pack, or placing a bulk order, our team is ready to assist you.
                    </p>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <i class="icon-news form-group-icon"></i>
                      <input type="text" class="form-control" placeholder="Name" id="contact-name" required>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <i class="icon-email form-group-icon"></i>
                      <input type="email" class="form-control" placeholder="Email" id="contact-email" required>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group">
                      <i class="icon-phone form-group-icon"></i>
                      <input type="text" class="form-control" placeholder="Phone" id="contact-phone" required>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group form-group-date">
                      <i class="icon-calendar form-group-icon"></i>
                      <input type="date" class="form-control" id="contact-date" required>
                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group form-group-date">
                      <i class="icon-clock form-group-icon"></i>
                      <input type="time" class="form-control" id="contact-time" required>
                    </div>
                  </div>

                  <div class="col-12">
                    <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                      <span>Submit</span> <i class="icon-arrow-right"></i>
                    </button>
                  </div>
                </div>
              </form>
              <script>
                  function sendToWhatsApp(event) {
                    event.preventDefault();

                    let name = document.getElementById("contact-name").value;
                    let email = document.getElementById("contact-email").value;
                    let phone = document.getElementById("contact-phone").value;
                    let date = document.getElementById("contact-date").value;
                    let time = document.getElementById("contact-time").value;

                    let message =
                      "New Contact Request:%0A%0A" +
                      "Name: " + name + "%0A" +
                      "Email: " + email + "%0A" +
                      "Phone: " + phone + "%0A" +
                      "Preferred Date: " + date + "%0A" +
                      "Preferred Time: " + time;

                    let whatsappNumber = "923206995613"; // WITHOUT + sign

                    let url = "https://wa.me/" + whatsappNumber + "?text=" + message;

                    window.open(url, "_blank");
                  }
              </script>

            </div>
          </div><!-- /.col-lg-7 -->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="heading heading-light mb-30">
              <h3 class="heading__title mb-30">High-Quality Surgical Solutions for Every Procedure</h3>
              <p class="heading__desc">Our offerings help healthcare professionals maintain a sterile environment 
                during surgeries while improving efficiency and ensuring patient safety.
              </p>
            </div>
            {{-- <div class="d-flex align-items-center">
              <a href="contact-us.html" class="btn btn__white btn__rounded mr-30">
                <i class="fas fa-heart"></i> <span>Make A Gift</span>
              </a>
              <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
                <span class="video__btn-title color-white">Play Video</span>
              </a>
            </div> --}}
            <div class="text__block">
              <p class="text__block-desc color-white font-weight-bold">Book an Appointment / Inquiry Form (Updated Text)
                Request a Consultation or Product Inquiry
                Please feel welcome to reach out to our team for product details, quotations,
                bulk orders, or custom pack development. Our representatives will respond promptly.</p>
            </div><!-- /.text__block -->
          </div><!-- /.col-lg-5 -->
        </div>
      </div>
    </section>
    <section class="gallery pt-90 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "autoplay": true, "arrows": true, "dots": false, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
              <a class="popup-gallery-item" href="{{ asset('web-assets/images/services/9.png') }}">
                <img src="{{ asset('web-assets/images/services/9.png') }}" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="{{ asset('web-assets/images/services/8-.png') }}">
                <img src="{{ asset('web-assets/images/services/8-.png') }}" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="{{ asset('web-assets/images/services/10.png') }}">
                <img src="{{ asset('web-assets/images/services/10.png') }}" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="{{ asset('web-assets/images/services/11.png') }}">
                <img src="{{ asset('web-assets/images/services/11.png') }}" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="{{ asset('web-assets/images/services/12.png') }}">
                <img src="{{ asset('web-assets/images/services/12.png') }}" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="{{ asset('web-assets/images/services/13.png') }}">
                <img src="{{ asset('web-assets/images/services/13.png') }}" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="{{ asset('web-assets/images/services/14.png') }}">
                <img src="{{ asset('web-assets/images/services/14.png') }}" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="{{ asset('web-assets/images/services/15.png') }}">
                <img src="{{ asset('web-assets/images/services/15.png') }}" alt="gallery img">
              </a>
            </div><!-- /.gallery-images-wrapper -->
          </div><!-- /.col-xl-5 -->
        </div>
      </div>
    </section>
    <section class="notes border-top pt-60 pb-60">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="note font-weight-bold">
              <i class="far fa-file-alt color-primary"></i>
              <span>Providing reliable, quality products for your medical needs.</span>
              <a href="doctors-timetable.html" class="btn btn__link btn__secondary">
                <span>Explore Our Products</span><i class="icon-arrow-right"></i>
              </a>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="info__meta d-flex flex-wrap justify-content-between align-items-center">
              <div class="testimonials__rating">
                <div class="testimonials__rating-inner d-flex align-items-center">
                  <span class="total__rate">4.9</span>
                  <div>
                    <span class="overall__rate">Customer Satisfaction Rating</span>
                    <span>, based on 7541 reviews.</span>
                  </div>
                </div>
              </div>
              <a href="{{ route('contact') }}" class="btn btn__primary btn__rounded">
                <span>Contact Us</span> <i class="icon-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection