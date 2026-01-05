@extends('layouts.guest')
@section('title', 'Products')
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
    <section class="page-title page-title-layout5 bg-overlay">
      {{-- <div class="bg-img"><img src="{{ asset('web-assets/images/page-titles/8.jpg') }}" alt="background"></div> --}}
        <div class="bg-video">
            <iframe 
                src="https://player.vimeo.com/video/1144982205?autoplay=1&muted=1&loop=1&background=1" 
                frameborder="0"
                allow="autoplay; fullscreen; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
        <div class="container">
            <div class="row">
            <div class="col-12">
                <h1 class="pagetitle__heading text-white">Our Products</h1>
                <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item text-white"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Products</li>
                </ol>
                </nav>
            </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div>
    </section>

    <section class="blog-grid">
      <div class="container">
        <div class="row">
          
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="post-item">
                    <div class="post__img">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('web-assets/images/blog/grid/1.png') }}" alt="Gynaecology & Obstetrics Surgical Packs" loading="lazy">
                    </a>
                    </div>
                    <div class="post__body">
                        <div class="post__meta-cat">
                            <a href="#">Gynaecology & Obstetrics</a>
                        </div>

                        
                        <p class="post__desc">
                            Our Gynaecology & Obstetrics range includes fully sterile, ready-to-use surgical packs designed 
                            for maternal care procedures. Each pack delivers superior absorption, strong barrier protection, and enhanced comfort for safer, 
                            more efficient surgeries worldwide, supporting medical teams with reliable performance.
                        </p>
                        
                        <h4 class="post__title mt-3">
                            <a href="{{ url('/products/c-section-pack') }}">C-Section Pack</a><br>
                            <a href="{{ url('/products/c-section-drape-sheet') }}">C-Section Drape Sheet</a><br>
                            <a href="{{ url('/products/birth-pack') }}">Birth Pack</a><br>
                            <a href="{{ url('/products/delivery-pack') }}">Delivery Pack</a>
                        </h4>
                        
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="post-item">
                    <div class="post__img">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('web-assets/images/blog/grid/2.png') }}" alt="General Surgery Packs" loading="lazy">
                    </a>
                    </div>

                    <div class="post__body">
                    <div class="post__meta-cat">
                        <a href="#">General Surgery</a>
                    </div>

                    
                    <p class="post__desc">
                        Designed to support a wide range of surgical procedures, our General Surgery line offers 
                        exceptional fluid control, durable barrier protection, and seamless OR workflow efficiency. 
                        Each pack is engineered to enhance patient safety, minimize infection risks, and improve 
                        surgeon comfort during extended operations.
                    </p>
                    <h4 class="post__title mt-3">
                        <a href="{{ url('/products/general-surgery-pack') }}">General Surgery Pack</a><br>
                        <a href="{{ url('/products/laparotomy-pack') }}">Laparotomy Pack</a><br>
                        <a href="{{ url('/products/laparotomy-drape-sheet') }}">Laparotomy Drape Sheet</a>
                    </h4>

                    
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="post-item">
                    <div class="post__img">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('web-assets/images/blog/grid/5.png') }}" alt="Cardiovascular Surgical Packs" loading="lazy">
                    </a>
                    </div>

                    <div class="post__body">
                    <div class="post__meta-cat">
                        <a href="#">Cardiovascular</a>
                    </div>

                    
                    <p class="post__desc">
                        Precision-engineered for high-risk cardiac procedures, our Cardiovascular series delivers 
                        superior fluid management, reinforced barrier protection, and exceptional sterility. 
                        Each pack is designed to support surgeons during complex interventions—ensuring safety
                     and uncompromised performance inside the operating room.
                    </p>
                    
                    <h4 class="post__title mt-3">
                        <a href="{{ url('/products/bypass-pack') }}">Bypass Pack</a><br>
                        <a href="{{ url('/products/angiography-pack') }}">Angiography Pack</a><br>
                        <a href="{{ url('/products/angioplasty-pack') }}">Angioplasty Pack</a>
                    </h4>
                    
                    </div>
                </div>
            </div>
          
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="post-item">
                    <div class="post__img">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('web-assets/images/blog/grid/4.png') }}" alt="Orthopedic Surgical Packs" loading="lazy">
                    </a>
                    </div>

                    <div class="post__body">
                    <div class="post__meta-cat">
                        <a href="#">Orthopedic</a>
                    </div>

                    
                    <p class="post__desc">
                        Designed for precision-driven orthopedic procedures, our orthopedic range offers 
                        advanced barrier protection, efficient fluid control, and ergonomic setup for seamless 
                        surgical workflow. Each pack is tailored to support joint replacement, spinal surgeries, 
                        and minimally invasive procedures with reliability and superior sterility.
                    </p>
                    
                    <h4 class="post__title mt-3">
                        <a href="{{ url('/products/basic-orthopedic-pack') }}">Basic Orthopedic Pack</a><br>
                        <a href="{{ url('/products/hip-pack') }}">Hip Pack</a><br>
                        <a href="{{ url('/products/arthroscopy-pack') }}">Arthroscopy Pack</a><br>
                        <a href="{{ url('/products/arthroplasty-pack') }}">Arthroplasty Pack</a>
                    </h4>
                    
                    </div>
                </div>
            </div>
          
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="post-item">
                    <div class="post__img">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('web-assets/images/blog/grid/5.png') }}" alt="Urology Surgical Packs" loading="lazy">
                    </a>
                    </div>

                    <div class="post__body">
                    <div class="post__meta-cat">
                        <a href="#">Urology</a>
                    </div>

                    
                    <p class="post__desc">
                        Our Urology series offers optimum 
                        fluid management, superior barrier protection, and seamless workflow support. Whether for PCNL 
                        or TURP surgeries, each pack is engineered to maintain sterility, enhance surgeon confidence, 
                        and deliver a controlled, contamination-free operative environment.
                    </p>
                    
                    <h4 class="post__title mt-3">
                        <a href="{{ url('/products/pcnl-pack') }}">PCNL Pack</a><br>
                        <a href="{{ url('/products/pcnl-drape-sheet') }}">PCNL Drape Sheet</a><br>
                        <a href="{{ url('/products/turp-pack') }}">TURP Pack</a><br>
                        <a href="{{ url('/products/turp-drape-sheet') }}">TURP Drape Sheet</a>
                    </h4>
                    
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="post-item">
                    <div class="post__img">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('web-assets/images/blog/grid/6.png') }}" alt="Neurology Surgical Packs" loading="lazy">
                    </a>
                    </div>

                    <div class="post__body">
                    <div class="post__meta-cat">
                        <a href="#">Neurology</a>
                    </div>

                    
                    <p class="post__desc">
                        Designed for high-precision neurosurgical procedures, our Neurology series ensures maximum 
                        sterility, patient protection, and operative control. Each pack supports complex cranial and 
                        spinal surgeries with superior fluid absorption, barrier performance, and ergonomic layouts that 
                        enhance surgeon efficiency and reduce infection risks.
                    </p>
                    
                    <h4 class="post__title mt-3">
                        <a href="{{ url('/products/craniotomy-pack') }}">Craniotomy Pack</a><br>
                        <a href="{{ url('/products/laminectomy-pack') }}">Laminectomy Pack</a>
                    </h4>
                    
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="post-item">
                    <div class="post__img">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('web-assets/images/blog/grid/8.png') }}" alt="Surgical Gowns" loading="lazy">
                    </a>
                    </div>

                    <div class="post__body">
                    <div class="post__meta-cat">
                        <a href="#">Surgical Gowns</a>
                    </div>

                    
                    <p class="post__desc">
                        Premium-quality medical gowns engineered for unmatched fluid resistance, durability, and comfort. Available in four protection levels, these gowns support a wide range of surgical and clinical procedures—ensuring safety, sterility, and reliable performance for healthcare teams.
                    </p>
                    
                    <h4 class="post__title mt-3">
                        <a href="{{ url('/products/isolation-gown-level-1') }}">Isolation Gown – Level I</a><br>
                        <a href="{{ url('/products/standard-gown-level-2') }}">Standard Gown – Level II</a><br>
                        <a href="{{ url('/products/reinforced-surgical-gown-level-3') }}">Reinforced Surgical Gown – Level III</a>
                    </h4>
                    
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="post-item">
                    <div class="post__img">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('web-assets/images/blog/grid/7.png') }}" alt="Ophthalmic Pack" loading="lazy">
                    </a>
                    </div>

                    <div class="post__body">
                    <div class="post__meta-cat">
                        <a href="#">Ophthalmology</a>
                    </div>

                    
                    <p class="post__desc">
                        A sterile, precision-designed surgical pack made specifically for ophthalmic procedures. 
                        The Ophthalmic Pack ensures exceptional visibility, fluid management, and 
                        barrier protection — enabling surgeons to perform delicate eye surgeries with accuracy, 
                        safety, and complete confidence.
                    </p>

                    <h4 class="post__title mt-3">
                        <a href="{{ url('/products/ophthalmic-pack') }}">Ophthalmic Pack</a>
                    </h4>
                    
                    </div>
                </div>
            </div>

        </div>
      </div>
    </section>
@endsection
