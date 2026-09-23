@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <header class="page-header">
        <div class="container">
            <h1 class="mb-3">Get In Touch</h1>
            <div class="breadcrumb-custom">
                <a href="{{ route('home') }}">Home</a> <span>/</span> <span class="active">Contact</span>
            </div>
        </div>
    </header>

    <!-- CONTACT INFO CARDS -->
    <section class="section pb-0">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4 reveal">
                    <div class="card-premium text-center">
                        <div class="icon-box icon-box-primary mx-auto mb-3"><i class="bi bi-geo-alt"></i></div>
                        <h3 class="card-title">Visit Us</h3>
                        <p class="mb-0">Graha Catania, Jl. Graha Catania Raya No.20 Blok U1, Ciakar, <br>Kec. Panongan, Kabupaten Tangerang, Banten 15710</p>
                    </div>
                </div>
                <div class="col-md-4 reveal">
                    <div class="card-premium text-center">
                        <div class="icon-box icon-box-secondary mx-auto mb-3"><i class="bi bi-envelope"></i></div>
                        <h3 class="card-title">Email Us</h3>
                        <p class="mb-1">General inquiries:<br><a href="jasamuda@gmail.com"
                                class="text-primary-custom fw-semibold text-decoration-none">jasamuda@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-4 reveal">
                    <div class="card-premium text-center">
                        <div class="icon-box icon-box-success mx-auto mb-3"><i class="bi bi-telephone"></i></div>
                        <h3 class="card-title">Call Us</h3>
                        <p class="mb-0">Mon – Sun, 8am – 6pm WIB<br><a href="tel:+6285111328168"
                                class="text-primary-custom fw-semibold text-decoration-none">+62 851-1132-8168</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FORM + MAP -->
    <section class="section">
        <div class="container">
            <div class="row g-5 align-items-stretch">
                <div class="col-lg-7 reveal">
                    <span class="eyebrow">Send a message</span>
                    <h2 class="section-title mb-4">Tell us about your project</h2>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="fullName">Full Name</label>
                                <input type="text" class="form-control" id="fullName" required>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="workEmail">Email</label>
                                <input type="email" class="form-control" id="workEmail" required>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="companyName">Company</label>
                                <input type="text" class="form-control" id="companyName">
                            </div>
                            {{-- <div class="col-md-6">
                <label class="form-label" for="budget">Estimated Budget</label>
                <select class="form-select" id="budget" required>
                  <option value="" selected disabled>Select a range</option>
                  <option>Under $5,000</option>
                  <option>$5,000 – $15,000</option>
                  <option>$15,000 – $50,000</option>
                  <option>$50,000+</option>
                </select>
                <div class="invalid-feedback">Please select a budget range.</div>
              </div> --}}
                            <div class="col-12">
                                <label class="form-label" for="service">Service Needed</label>
                                <select class="form-select" id="service" required>
                                    <option value="" selected disabled>Select a service</option>
                                    <option>Product Strategy</option>
                                    <option>UI/UX Design</option>
                                    <option>Web Development</option>
                                    <option>Cloud &amp; DevOps</option>
                                    <option>Growth Marketing</option>
                                    <option>Something else</option>
                                </select>
                                <div class="invalid-feedback">Please select a service.</div>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="message">Project Details</label>
                                <textarea class="form-control" id="message" rows="5"
                                    placeholder="Tell us a bit about your goals, timeline, and anything else we should know." required></textarea>
                                <div class="invalid-feedback">Please share a few details about your project.</div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                                    <label class="form-check-label small text-slate" for="agreeTerms">
                                        I agree to the <a href="#" class="text-primary-custom">Privacy Policy</a> and
                                        consent to being contacted about my inquiry.
                                    </label>
                                    <div class="invalid-feedback">You must agree before submitting.</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-lg-custom">Send Message <i
                                        class="bi bi-send ms-1"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-5 reveal">
                    <div class="map-frame mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9539350979703!2d106.52752129999999!3d-6.2697886999999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e42077a48929279%3A0x89908795131b142f!2sServis%20Berkat%20Komputer!5e0!3m2!1sen!2sid!4v1789613474560!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" title="Jasamuda office location map"> </iframe>
                    </div>
                    <div class="widget bg-gradient-dark text-white border-0">
                        <div class="icon-box icon-box-white mb-3"><i class="bi bi-clock"></i></div>
                        <h5 class="text-white mb-3">Office Hours</h5>
                        <ul class="widget-link-list" style="--n-border: rgba(255,255,255,0.1);">
                            <li style="border-color: rgba(255,255,255,0.1); color:#fff;">Monday – Friday <span
                                    style="color:rgba(255,255,255,0.6);">8:00 AM – 5:00 PM</span></li>
                            <li style="border-color: rgba(255,255,255,0.1); color:#fff;">Saturday – Sunday<span
                                    style="color:rgba(255,255,255,0.6);">9:00 AM – 6:00 PM</span></li>
                        </ul>
                        <p class="text-white-50 small mt-3 mb-0">All times in Western Indonesia Time (WIB).</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section bg-soft">
        <div class="container">
            <div class="row section-header justify-content-center text-center">
                <div class="col-lg-7 reveal">
                    <span class="eyebrow">Before you reach out</span>
                    <h2 class="section-title">Quick answers</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 reveal">
                    <div class="accordion accordion-custom" id="contactFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#cfaq1">How soon will I hear back?</button>
                            </h2>
                            <div id="cfaq1" class="accordion-collapse collapse show" data-bs-parent="#contactFaq">
                                <div class="accordion-body">We respond to all inquiries within one business day, usually
                                    much sooner.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#cfaq2">Do I need a fully scoped brief?</button>
                            </h2>
                            <div id="cfaq2" class="accordion-collapse collapse" data-bs-parent="#contactFaq">
                                <div class="accordion-body">Not at all — a rough idea is enough to start. We'll help you
                                    scope the rest during a free discovery call.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#cfaq3">Can we sign an NDA before discussing details?</button>
                            </h2>
                            <div id="cfaq3" class="accordion-collapse collapse" data-bs-parent="#contactFaq">
                                <div class="accordion-body">Yes, we're happy to sign your NDA — just mention it in your
                                    message and we'll send it over before our first call.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
