@extends('layouts.guest')

@section('title', 'Contact Us')

@section('content')
    <section class="google-map py-0">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1808.565938083567!2d67.06273268947437!3d24.961627436043432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1764861790775!5m2!1sen!2s" 
        width="100%" 
        height="500" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    </section>
    <section class="contact-layout1 pt-0 mt--100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="contact-panel d-flex flex-wrap">
                <form class="contact-panel__form" method="post" action="web-assets/php/contact.php" id="contactForm">
                    <div class="row">
                        <div class="col-sm-12">
                        <h4 class="contact-panel__title">Get in Touch with AlphaTec Surgical LLP</h4>
                        <p class="contact-panel__desc mb-30">
                            We are here to answer your inquiries and provide professional support for all your surgical and medical needs. 
                            Our team will respond promptly to ensure you receive the assistance you require.
                        </p>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <i class="icon-user form-group-icon"></i>
                            <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name" required>
                        </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <i class="icon-email form-group-icon"></i>
                            <input type="email" class="form-control" placeholder="Email" id="contact-email" name="contact-email" required>
                        </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <i class="icon-phone form-group-icon"></i>
                            <input type="text" class="form-control" placeholder="Phone" id="contact-phone" name="contact-phone" required>
                        </div>
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="form-group">
                            <i class="icon-news form-group-icon"></i>
                            <select class="form-control" name="contact-subject" required>
                            <option value="">Select Subject</option>
                            <option value="product-inquiry">Product Inquiry</option>
                            <option value="order-support">Order Support</option>
                            <option value="general">General Inquiry</option>
                            </select>
                        </div>
                        </div>

                        <div class="col-12">
                        <div class="form-group">
                            <i class="icon-alert form-group-icon"></i>
                            <textarea class="form-control" placeholder="Message" id="contact-message" name="contact-message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                            <span>Submit Request</span> <i class="icon-arrow-right"></i>
                        </button>
                        <div class="contact-result"></div>
                        </div>
                    </div>
                </form>

                <div class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                <div class="bg-img">
                    <img src="web-assets/images/banners/1.jpg" alt="AlphaTec Surgical LLP Banner">
                </div>
                <div>
                    <h4 class="contact-panel__title color-white">Quick Contacts</h4>
                    <p class="contact-panel__desc font-weight-bold color-white mb-30">
                    Reach out to our friendly staff for professional support and enquiries about our surgical products.
                    </p>
                </div>
                <div>
                    <ul class="contact__list list-unstyled mb-30">
                    <li>
                        <i class="icon-phone"></i> <a href="tel:+923206995613">Emergency Line: +92 320 6995613</a>
                    </li>
                    <li>
                        <i class="icon-location"></i> 
                        <a href="#">Office Address: A-536, 2nd Floor, Sector-14/B, Shadman Town, North Nazimabad, Karachi</a>
                    </li>
                    <li>
                        <i class="icon-clock"></i> <a href="#">Mon - Fri: 8:00 am - 7:00 pm</a>
                    </li>
                    <li>
                        <i class="icon-email"></i> <a href="mailto:contact@alphatecsurgicalllp.com">contact@alphatecsurgicalllp.com</a>
                    </li>
                    <li>
                        <i class="icon-globe"></i> <a href="https://alphatecsurgicalllp.com">alphatecsurgicalllp.com</a>
                    </li>
                    </ul>
                    <a href="#" class="btn btn__white btn__rounded btn__outlined">Contact Us</a>
                </div>
                </div>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
@endsection