@extends('layouts.guest')
@section('title', 'Home – AlphaTec Surgical LLP')
@section('meta_description', 'AlphaTec Surgical LLP provides premium quality surgical drapes, disposable surgery packs, medical textiles, and sterile gowns across Pakistan. Trusted supplier for hospitals, clinics, and healthcare facilities.')
@section('meta_keywords', 'surgical drapes, disposable surgery packs, sterile gowns, medical textiles, surgical products Pakistan, AlphaTec Surgical LLP, healthcare supplies, surgery sets, hospital drapes, medical supplies distributor')
@section('content')

    <section class="slider">
        <div class="slick-carousel m-slides-0"
            data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}'>
            <div class="slide-item align-v-h">
                <div class="bg-img"><img src="{{ asset('web-assets/images/sliders/1.png') }}" alt="slide img"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                        <div class="slide__content mx-5">
                            <h2 class="slide__title text-white">Premium Surgical Draping Solutions</h2>
                            <p class="slide__desc text-white">Ensuring safety, sterility, and comfort in every procedure. AlphaTec Surgical LLP provides
                                high-quality surgical drapes, gowns, and disposable surgery packs trusted by hospitals, clinics,
                                and healthcare professionals across Pakistan.
                            </p>
                            <ul class="features-list list-unstyled mb-0 d-flex flex-wrap">
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
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item align-v-h">
                <div class="bg-img"><img src="{{ asset('web-assets/images/sliders/1.png') }}" alt="slide img"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                            <div class="slide__content mx-5">
                                <h2 class="slide__title text-white">Reliable Surgical Solutions</h2>
                                <p class="slide__desc text-white">We deliver world-class medical textiles and surgical consumables designed to support precision,
                                    hygiene, and operational efficiency in every operating room. Your safety demands the best—so we
                                    deliver nothing less.
                                </p>
                                <ul class="features-list list-unstyled mb-0 d-flex flex-wrap">
                                
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
                                </ul>
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
                <a href="tel:+923700293715" class="phone__number">
                  <i class="icon-phone"></i> <span>+92 370 0293715</span>
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

    <section class="about-layout2 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-1">
            <div class="heading-layout2">
              <h3 class="heading__title mb-60">Enhancing Surgical Safety<br>Through Reliable Draping Solutions</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="text-with-icon">
              <div class="text__icon">
                <i class="icon-doctor"></i>
              </div>
              <div class="text__content">
                <p class="heading__desc font-weight-bold color-secondary mb-30">At AlphaTec Surgical LLP, we are dedicated to
                   supplying premium-quality surgical drapes, gowns, and medical textile solutions across Pakistan.
                    Our products are designed to improve safety, efficiency, and reliability in modern healthcare environments.
                </p>
                <a href="doctors-timetable.html" class="btn btn__secondary btn__rounded mb-70">
                  <span>About Us</span> <i class="icon-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="about__text bg-white">
              <p class="heading__desc mb-30">
                We work closely with healthcare professionals to provide customizable draping packs, gowns,
                 and medical textiles tailored to their procedural needs. Whether you require standard products 
                 or custom-developed solutions, our team ensures accuracy, reliability, and timely delivery.
              </p>
              <p class="heading__desc mb-30">
                We are dedicated to becoming the region’s leading provider of surgical and medical supplies by 
                offering customer-centric, high-quality, and internationally compliant products.</p>
              <ul class="list-items list-unstyled">
                <li>We supply high-grade sterile surgical drapes and packs for various procedures.</li>
                <li>Our materials are lint-free, fluid-resistant, and hypoallergenic—ideal for maintaining OT sterility.
                </li>
                <li>We offer technical guidance and customization, ensuring each hospital receives products that meet their exact protocols.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
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
                            <i class="icon-head"></i>
                            <i class="icon-head"></i>
                        </div>
                        <div class="service__content">
                            <h4 class="service__title">Surgical Drapes</h4>
                            <p class="service__desc">Our surgical drapes are designed to provide maximum protection, fluid resistance, and secure coverage 
                              during medical procedures. Carefully crafted from high-grade materials, they ensure a sterile and safe operating environment.
                            </p>
                            <ul class="list-items list-items-layout1 list-unstyled">
                                <li>General Surgery Drapes</li>
                                <li>Adhesive Drapes</li>
                                <li>Reinforced Drapes</li>
                                <li>Anesthesia Drapes</li>
                            </ul>
                            <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="service-item">
                        <div class="service__icon">
                            <i class="icon-heart"></i>
                            <i class="icon-heart"></i>
                        </div>
                        <div class="service__content">
                            <h4 class="service__title">Surgical Packs & Sets</h4>
                            <p class="service__desc">
                              We provide ready-to-use and customizable surgical packs 
                              designed to improve workflow efficiency, reduce preparation time, and maintain procedural sterility.
                            </p>
                            <ul class="list-items list-items-layout1 list-unstyled">
                                <li>General Surgery Packs</li>
                                <li>Minor Procedure Packs</li>
                                <li>Custom Draping Sets</li>
                                <li>Sterile Gown Kits</li>
                            </ul>
                            <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                                <span>Read More</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="service-item">
                        <div class="service__icon">
                            <i class="icon-microscope"></i>
                            <i class="icon-microscope"></i>
                        </div>
                        <div class="service__content">
                        <h4 class="service__title">Surgical Gowns</h4>
                        <p class="service__desc">Our surgical gowns and medical textiles offer superior protection,
                           durability, and comfort for healthcare staff. Each item is produced using internationally compliant materials.
                        </p>
                        <ul class="list-items list-items-layout1 list-unstyled">
                            <li>Standard & Reinforced Gowns</li>
                            <li>Ultra Protection (ULL Stitch) Gowns</li>
                            <li>Isolation Gowns</li>
                        </ul>
                        <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                        </div>
                    </div>
                    
                    <div class="service-item">
                        <div class="service__icon">
                        <i class="icon-dropper"></i>
                        <i class="icon-dropper"></i>
                        </div>
                        <div class="service__content">
                        <h4 class="service__title">Laboratory Analysis</h4>
                        <p class="service__desc">Analyzing the radon or radon progeny concentrations with passive devices, or
                            the
                            act of calibrating radon or radon progeny measurement devices.
                        </p>
                        <ul class="list-items list-items-layout1 list-unstyled">
                            <li>Newborn Care</li>
                            <li>Umbilical Cord Appearance </li>
                            <li>Repositioning Techniques</li>
                        </ul>
                        <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                        </div>
                    </div>
                    
                    <div class="service-item">
                        <div class="service__icon">
                        <i class="icon-heart3"></i>
                        <i class="icon-heart3"></i>
                        </div>
                        <div class="service__content">
                        <h4 class="service__title">Pediatric Clinic</h4>
                        <p class="service__desc">Pediatric providers see patients from birth into early adulthood to make sure
                            children achieve stay healthy. Our care includes preventive health checkups.
                        </p>
                        <ul class="list-items list-items-layout1 list-unstyled">
                            <li>Clinical laboratory</li>
                            <li>Research Analyst</li>
                            <li>Quality Assurance</li>
                        </ul>
                        <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                        </div>
                    </div>
                    
                    <div class="service-item">
                        <div class="service__icon">
                        <i class="icon-heart2"></i>
                        <i class="icon-heart2"></i>
                        </div>
                        <div class="service__content">
                        <h4 class="service__title">Cardiac Clinic</h4>
                        <p class="service__desc">For people requiring additional follow up, the Cardiac Clinic provides rapid
                            access to professionals specialized in diagnosing and treating heart disease.
                        </p>
                        <ul class="list-items list-items-layout1 list-unstyled">
                            <li>Macular degeneration</li>
                            <li>Diabetic retinopathy</li>
                            <li>Excessive tearing</li>
                        </ul>
                        <a href="services-single.html" class="btn btn__secondary btn__outlined btn__rounded">
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

    <section class="notes border-top pt-60 pb-60">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="note font-weight-bold">
              <i class="far fa-file-alt color-primary"></i>
              <span>Delivering tomorrow’s health care for your family.</span>
              <a href="doctors-timetable.html" class="btn btn__link btn__secondary">
                <span>View Doctors’ Timetable</span><i class="icon-arrow-right"></i>
              </a>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="info__meta d-flex flex-wrap justify-content-between align-items-center">
              <div class="testimonials__rating">
                <div class="testimonials__rating-inner d-flex align-items-center">
                  <span class="total__rate">4.9</span>
                  <div>
                    <span class="overall__rate">Zocdoc Overall Rating</span>
                    <span>, based on 7541 reviews.</span>
                  </div>
                </div>
              </div>
              <a href="appointment.html" class="btn btn__primary btn__rounded">
                <span>Make Appointment</span> <i class="icon-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="features-layout2 pt-130 bg-overlay bg-overlay-primary">
      <div class="bg-img"><img src="{{ asset('web-assets/images/backgrounds/2.jpg') }}" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-1">
            <div class="heading__layout2 mb-50">
              <h3 class="heading__title color-white">AlphaTec Surgical LLP — Supporting Healthcare with Trusted Surgical Draping Solutions</h3>
            </div>
          </div><!-- /col-lg-5 -->
        </div>
        <div class="row mb-100">
          <div class="col-sm-3 col-md-3 col-lg-1 offset-lg-5">
            <div class="heading__icon">
              <i class="icon-insurance"></i>
            </div>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-9 col-md-9 col-lg-6">
            <p class="heading__desc font-weight-bold color-white mb-30">Since 2023, AlphaTec Surgical LLP has been committed to 
              delivering high-quality, sterile, and reliable surgical draping systems across Pakistan. Our mission is to enhance
               surgical safety, improve procedural efficiency, and support hospitals with dependable medical supplies they can trust.
            </p>
            <a href="{{ route('home') }}" class="btn btn__white btn__link">
              <i class="icon-arrow-right icon-filled"></i>
              <span>Our Core Values</span>
            </a>
          </div>
        </div>
        <div class="row">
          
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('web-assets/images/services/1.jpg') }}" alt="service" loading="lazy">
              </div>
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-heart"></i>
                </div>
                <h4 class="feature__title">GYNAECOLOGY</h4>
              </div>
              <a href="{{ route('home') }}" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('web-assets/images/services/2.jpg') }}" alt="service" loading="lazy">
              </div>
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-doctor"></i>
                </div>
                <h4 class="feature__title">GENERAL SURGERY</h4>
              </div>
              <a href="{{ route('home') }}" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('web-assets/images/services/3.jpg') }}" alt="service" loading="lazy">
              </div>
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-ambulance"></i>
                </div>
                <h4 class="feature__title">CARDIOVASCULAR</h4>
              </div>
              <a href="{{ route('home') }}" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('web-assets/images/services/4.jpg') }}" alt="service" loading="lazy">
              </div>
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-drugs"></i>
                </div>
                <h4 class="feature__title">ORTHOPEDIC</h4>
              </div>
              <a href="{{ route('home') }}" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div>
          </div>

          </div>

          <div class="row">

          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('web-assets/images/services/5.jpg') }}" alt="service" loading="lazy">
              </div>
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-first-aid-kit"></i>
                </div>
                <h4 class="feature__title">UROLOGY</h4>
              </div>
              <a href="{{ route('home') }}" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('web-assets/images/services/6.jpg') }}" alt="service" loading="lazy">
              </div>
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-hospital"></i>
                </div>
                <h4 class="feature__title">NEUROLOGY</h4>
              </div>
              <a href="{{ route('home') }}" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('web-assets/images/services/7.jpg') }}" alt="service" loading="lazy">
              </div>
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-expenses"></i>
                </div>
                <h4 class="feature__title">OPHTHALMOLOGY</h4>
              </div>
              <a href="{{ route('home') }}" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div>
          </div>
          
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="feature-item">
              <div class="feature__img">
                <img src="{{ asset('web-assets/images/services/8.jpg') }}" alt="service" loading="lazy">
              </div>
              <div class="feature__content">
                <div class="feature__icon">
                  <i class="icon-bandage"></i>
                </div>
                <h4 class="feature__title">SURGICAL GOWNS</h4>
              </div>
              <a href="{{ route('home') }}" class="btn__link">
                <i class="icon-arrow-right icon-outlined"></i>
              </a>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-md-12 col-lg-6 offset-lg-3 text-center">
            <p class="font-weight-bold color-gray mb-0">Your Trusted Partner in Surgical Draping & Medical Supplies
              <a href="{{ route('home') }}" class="color-secondary">
                <span>Contact Us For More Information</span> <i class="icon-arrow-right"></i>
              </a>
            </p>
          </div>
        </div>
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
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-7">
              <div class="slider-with-navs">
                <!-- Testimonial #1 -->
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
                    range of backgrounds and bring with them a diversity of skills and special interests. They also have
                    registered nurses on staff who are available to triage any urgent matters, and the administration
                    and support staff all have exceptional people skills”
                  </h3>
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #2 -->
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
                    range of backgrounds and bring with them a diversity of skills and special interests. They also have
                    registered nurses on staff who are available to triage any urgent matters, and the administration
                    and support staff all have exceptional people skills”
                  </h3>
                </div><!-- /. testimonial-item -->
                <!-- Testimonial #3 -->
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
                    range of backgrounds and bring with them a diversity of skills and special interests. They also have
                    registered nurses on staff who are available to triage any urgent matters, and the administration
                    and support staff all have exceptional people skills”
                  </h3>
                </div><!-- /. testimonial-item -->
              </div><!-- /.slick-carousel -->
              <div class="slider-nav mb-60">
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="{{ asset('web-assets/images/testimonials/thumbs/1.png') }}" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Sami Wade</h4>
                    <p class="testimonial__meta-desc">7oroof Inc</p>
                  </div>
                </div><!-- /.testimonial-meta -->
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="{{ asset('web-assets/images/testimonials/thumbs/2.png') }}" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Ahmed</h4>
                    <p class="testimonial__meta-desc">Web Inc</p>
                  </div>
                </div><!-- /.testimonial-meta -->
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="{{ asset('web-assets/images/testimonials/thumbs/3.png') }}" alt="author thumb">
                  </div><!-- /.testimonial-thumb -->
                  <div>
                    <h4 class="testimonial__meta-title">Sonia Blake</h4>
                    <p class="testimonial__meta-desc">Web Inc</p>
                  </div>
                </div><!-- /.testimonial-meta -->
              </div><!-- /.slider-nav -->
            </div><!-- /.col-lg-7 -->
          </div>
        </div><!-- /.testimonials-wrapper -->
      </div>
    </section>

    <section class="contact-layout3 bg-overlay bg-overlay-primary-gradient pb-60">
      <div class="bg-img"><img src="{{ asset('web-assets/images/banners/3.jpg') }}" alt="banner"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="contact-panel mb-50">
              <form class="contact-panel__form" method="post" action="assets/php/contact.php" id="contactForm">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title">Need Assistance? We're Here to Help.</h4>
                    <p class="contact-panel__desc mb-30">Whether you need support selecting the right drape, customizing a 
                      surgical pack, or placing a bulk order, our team is ready to assist you with professional guidance and fast response times.
                    </p>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-news form-group-icon"></i>
                      <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                        required>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-email form-group-icon"></i>
                      <input type="email" class="form-control" placeholder="Email" id="contact-email"
                        name="contact-email" required>
                    </div>
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                      <i class="icon-phone form-group-icon"></i>
                      <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                        name="contact-phone" required>
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group form-group-date">
                      <i class="icon-calendar form-group-icon"></i>
                      <input type="date" class="form-control" id="contact-date" name="contact-date" required>
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group form-group-date">
                      <i class="icon-clock form-group-icon"></i>
                      <input type="time" class="form-control" id="contact-time" name="contact-time" required>
                    </div>
                  </div><!-- /.col-lg-4 -->
                  <div class="col-12">
                    <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                      <span>Submit</span> <i class="icon-arrow-right"></i>
                    </button>
                    <div class="contact-result"></div>
                  </div><!-- /.col-lg-12 -->
                </div>
              </form>
            </div>
          </div><!-- /.col-lg-7 -->
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="heading heading-light mb-30">
              <h3 class="heading__title mb-30">High-Quality Surgical Solutions for Every Procedure</h3>
              <p class="heading__desc">Our offerings help healthcare professionals maintain a sterile environment 
                during surgeries while improving efficiency and ensuring patient safety.
              </p>
            </div>
            <div class="d-flex align-items-center">
              <a href="contact-us.html" class="btn btn__white btn__rounded mr-30">
                <i class="fas fa-heart"></i> <span>Make A Gift</span>
              </a>
              <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
                <span class="video__btn-title color-white">Play Video</span>
              </a>
            </div>
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
              <a class="popup-gallery-item" href="assets/images/gallery/1.jpg') }}">
                <img src="{{ asset('web-assets/images/gallery/1.jpg') }}" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/2.jpg') }}">
                <img src="{{ asset('web-assets/images/gallery/2.jpg') }}" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/3.jpg') }}">
                <img src="{{ asset('web-assets/images/gallery/3.jpg') }}" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/4.jpg') }}">
                <img src="{{ asset('web-assets/images/gallery/4.jpg') }}" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/5.jpg') }}">
                <img src="{{ asset('web-assets/images/gallery/5.jpg') }}" alt="gallery img">
              </a>
              <a class="popup-gallery-item" href="assets/images/gallery/6.jpg') }}">
                <img src="{{ asset('web-assets/images/gallery/6.jpg') }}" alt="gallery img">
              </a>
            </div><!-- /.gallery-images-wrapper -->
          </div><!-- /.col-xl-5 -->
        </div>
      </div>
    </section>
@endsection