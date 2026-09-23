@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- PAGE HEADER -->
    <header class="page-header">
        <div class="container">
            <h1 class="mb-3">About Jasamuda</h1>
            <div class="breadcrumb-custom">
                <a href="{{ route('home') }}">Home</a> <span>/</span> <span class="active">About</span>
            </div>
        </div>
    </header>

    <!-- STORY -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 reveal">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=700&h=560&fit=crop"
                        class="rounded-img w-100" alt="Nexora studio workspace" style="aspect-ratio:5/4; object-fit:cover;">
                </div>
                <div class="col-lg-6 reveal">
                    <span class="eyebrow">Our story</span>
                    <h2 class="section-title">Menghadirkan Solusi untuk Kebutuhan yang Terus Berkembang</h2>
                    <p class="section-subtitle mb-3">Jasamuda hadir untuk membantu bisnis, organisasi, dan individu
                        menghadapi kebutuhan digital yang terus berkembang. Kami menggabungkan teknologi, data, kreativitas,
                        dan keahlian profesional untuk menghadirkan solusi yang praktis dan berdampak.</p>
                    <p class="mb-4">Dari pengembangan website dan sistem informasi, AI & automation, data dan business
                        intelligence, hingga kebutuhan riset dan layanan profesional — kami membantu mengubah kebutuhan
                        menjadi solusi yang dapat digunakan.</p>
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-3">
                                <div class="icon-box icon-box-primary"><i class="bi bi-calendar-check"></i></div>
                                <div><strong class="text-navy d-block">IT + AI + Data</strong><small
                                        class="text-slate">Integrated Solutions</small></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-3">
                                <div class="icon-box icon-box-success"><i class="bi bi-globe"></i></div>
                                <div><strong class="text-navy d-block">Research + Creative</strong><small
                                        class="text-slate">Professional Support</small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MISSION / VALUES -->
    <section class="section bg-soft">
        <div class="container">
            <div class="row section-header justify-content-center text-center">
                <div class="col-lg-7 reveal">
                    <span class="eyebrow">What drives us</span>
                    <h2 class="section-title">Principles We Build With</h2>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 reveal">
                    <div class="card-premium text-center">
                        <div class="icon-box icon-box-primary mx-auto mb-3"><i class="bi bi-bullseye"></i></div>
                        <h3 class="card-title">Purpose First</h3>
                        <p>Setiap solusi dimulai dari kebutuhan dan tujuan yang jelas.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 reveal">
                    <div class="card-premium text-center">
                        <div class="icon-box icon-box-secondary mx-auto mb-3"><i class="bi bi-chat-square-text"></i></div>
                        <h3 class="card-title">Simple & Effective</h3>
                        <p>Teknologi digunakan untuk membuat pekerjaan lebih mudah, bukan lebih rumit.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 reveal">
                    <div class="card-premium text-center">
                        <div class="icon-box icon-box-success mx-auto mb-3"><i class="bi bi-gem"></i></div>
                        <h3 class="card-title">Quality Matters</h3>
                        <p>Kami menjaga kualitas dari proses hingga hasil akhir.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 reveal">
                    <div class="card-premium text-center">
                        <div class="icon-box icon-box-primary mx-auto mb-3"><i class="bi bi-arrow-repeat"></i></div>
                        <h3 class="card-title">Always Evolving</h3>
                        <p>Kami terus belajar, beradaptasi, dan mengembangkan solusi untuk kebutuhan yang berubah.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM -->
    <section class="section">
        <div class="container">
            <div class="row section-header justify-content-center text-center">
                <div class="col-lg-7 reveal">
                    <span class="eyebrow">Leadership</span>
                    <h2 class="section-title">Meet the Team Behind Jasamuda</h2>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 reveal">
                    <div class="card-premium text-center">
                        <img src="https://i.pravatar.cc/160?img=8" class="rounded-circle mb-3"
                            style="width:96px;height:96px;object-fit:cover;" alt="Daniel Hwang, CEO">
                        <h3 class="card-title">Elfan Pradita Rusmin</h3>
                        <p class="text-primary-custom fw-semibold mb-2">Technology &amp; Development</p>
                        <p class="small">Mengembangkan website, aplikasi, dan sistem informasi yang fungsional dan
                            scalable.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 reveal">
                    <div class="card-premium text-center">
                        <img src="https://i.pravatar.cc/160?img=47" class="rounded-circle mb-3"
                            style="width:96px;height:96px;object-fit:cover;" alt="Priya Nair, Head of Design">
                        <h3 class="card-title">Defia Ulandari</h3>
                        <p class="text-primary-custom fw-semibold mb-2">Data & AI</p>
                        <p class="small">Mengolah data dan memanfaatkan AI untuk menghasilkan insight serta meningkatkan
                            efisiensi.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 reveal">
                    <div class="card-premium text-center">
                        <img src="https://i.pravatar.cc/160?img=52" class="rounded-circle mb-3"
                            style="width:96px;height:96px;object-fit:cover;" alt="Marcus Lee, Head of Engineering">
                        <h3 class="card-title">Deswita Anggraini</h3>
                        <p class="text-primary-custom fw-semibold mb-2">Research & Professional</p>
                        <p class="small">Mendukung kebutuhan riset, analisis, dokumentasi, dan berbagai kebutuhan
                            profesional.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 reveal">
                    <div class="card-premium text-center">
                        <img src="https://i.pravatar.cc/160?img=25" class="rounded-circle mb-3"
                            style="width:96px;height:96px;object-fit:cover;" alt="Anna Kowalski, Client Success Lead">
                        <h3 class="card-title">Anna Kowalski</h3>
                        <p class="text-primary-custom fw-semibold mb-2">Design & Creatived</p>
                        <p class="small">Berfokus pada desain visual, UI/UX, dan kebutuhan kreatif digital.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section pt-0">
        <div class="container">
            <div class="cta-section reveal">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="mb-2">Punya Project? Kami Siap Membantu.</h2>
                        <p class="mb-0 fs-5">Ceritakan kebutuhan Anda dan mari bersama-sama menemukan solusi yang tepat.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-lg-custom">Hubungi Kami <i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
