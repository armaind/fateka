@extends('layouts.frontend.minor')

@section('title', 'Kontak — Fateka')
@section('content')

<header class="template-header navbar-left absolute-header nav-primary-5 submenu-primary-5 sticky-header">
    <div class="container-fluid fluid-gap-70">
        <div class="header-inner">
            <div class="header-left">
                <nav class="navbar">
                    <div class="container">
                      <a class="navbar-brand" href="/">
                        <img src="\landio\assets\img\logotk.png" alt="logo" width="60">
                      </a>
                    </div>
                </nav>
                <nav class="nav-menu d-none d-xl-block">
                    <ul>
                        <li>
                            <a href="#">|</a>
                        </li>
                        <li>
                            <a href="{{url('/')}}">Beranda</a>
                        </li>
                        <li>
                            <a href="{{url('tentang')}}">Tentang</a>
                        </li>
                        <li class="active">
                            <a href="{{url('kontak')}}">Kontak</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                <ul class="header-extra">
                    <li class="d-none d-sm-block">
                        @auth
                        <div class="dropdown">
                            <a href="{{ route('dashboard') }}" class="template-btn primary-bg-5 p-r-20 m-r-20" href="#" id="userName" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               @php
                                   auth()->user()->name
                               @endphp 
                                Dashboard<i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        @else
                        <a href="{{url('/login')}}" class="user-login">
                            <i class="far fa-user-circle"></i>Masuk Aplikasi
                        </a>
                        <li class="d-none d-md-block">
                            <a href="{{url('/register')}}" class="template-btn primary-bg-5">
                                Daftar Sekarang <i class="fas fa-arrow-right"></i>
                            </a>
                        </li>
                    </li>
                    @endauth
                    <li class="d-none d-xl-block">
                        <a href="#" class="off-canvas-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </li>
                    <div class="d-xl-none">
                        <a href="#" class="navbar-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </ul>
            </div>
        </div>
    </div>

    <!-- Start Mobile Slide Menu -->
    <div class="mobile-slide-panel">
        <div class="panel-overlay"></div>
        <div class="panel-inner">
            <nav class="mobile-menu">
                <ul>
                    <li>
                        <a href="{{('/')}}">Beranda</a>
                    </li>
                    <li>
                        <a href="{{('/tentang')}}">Tentang</a>
                    </li>
                    <li>
                        <a href="{{('/kontak')}}">Kontak</a>
                    </li>
                    @auth
                        <a class="btn" href="{{ '/dashboard' }}" role="button">{{ auth()->user()->name }}</a>
                    @else
                    <li>
                        <a href="{{('/login')}}">Masuk Aplikasi</a>
                    </li>
                    <li>
                        <a href="{{('/register')}}">Daftar Akun</a>
                    </li>
                    @endauth
                </ul>
            </nav>
            <a href="#" class="panel-close">
                <i class="fal fa-times"></i>
            </a>
        </div>
    </div>
    <!-- End Mobile Slide Menu -->

    <!-- Off Canvas -->
    <div class="off-canvas-wrapper">
        <div class="canvas-overlay"></div>
        <div class="canvas-inner">
            <div class="canvas-logo">
                <img src="\landio\assets\img\logotk.png" alt="logo" width="110">
            </div>
            <div class="about-us">
                <h5 class="canvas-widget-title">Tentang Kami</h5>
                <p>
                    Fateka adalah platform yang berfungsi untuk menyediakan informasi dan media interaksi untuk menjembatani civitas akademika dengan seluruh alumni Teknik Komputer, Universitas Telkom.
                </p>
            </div>
            <div class="contact-us">
                <h5 class="canvas-widget-title">Kontak Kami</h5>
                <ul>
                    <li>
                        <i class="far fa-map-marker-alt"></i>
                        Teknik Komputer, Universitas Telkom
                    </li>
                    <li>
                        <i class="far fa-envelope-open"></i>
                        <a href="mailto:Fateka@gmail.com">fateka@gmail.com</a>
                        <a href="#" target="_blank">fateka.herokuapp.com</a>
                    </li>
                    <li>
                        <i class="far fa-phone"></i>
                        <span><a href="tel:+6288888888888">+62 888-8888-8888</a></span>
                        <span><a href="tel:+6282127350768">+62 888-8888-8888</a></span>
                    </li>
                </ul>
            </div>
            <a href="#" class="canvas-close">
                <i class="fal fa-times"></i>
            </a>
        </div>
    </div>
</header>
<!--====== End Header ======-->

<!--====== Page title area Start ======-->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content text-center mt-5">
            <h1 class="page-title">Kontak</h1>
            <ul class="breadcrumb-nav">
                <li><a href="{{url('/')}}">Beranda</a></li>
                <li class="active">Kontak</li>
            </ul>
        </div>
    </div>
    <div class="page-title-effect d-none d-md-block">
        <img class="particle-1 animate-zoom-fade" src="{{url('landio/assets/img/particle/particle-1.png')}}"
            alt="particle One">
        <img class="particle-2 animate-rotate-me" src="{{url('landio/assets/img/particle/particle-2.png')}}"
            alt="particle Two">
        <img class="particle-3 animate-float-bob-x" src="{{url('landio/assets/img/particle/particle-3.png')}}"
            alt="particle Three">
        <img class="particle-4 animate-float-bob-y" src="{{url('landio/assets/img/particle/particle-4.png')}}"
            alt="particle Four">
        <img class="particle-5 animate-float-bob-y" src="{{url('landio/assets/img/particle/particle-5.png')}}"
            alt="particle Five">
    </div>
</section>
<!--====== Page title area End ======-->

<!--====== Start Contact Area ======-->
<section class="blog-area p-t-130 p-b-130">
    <div class="container">
        <div class="row justify-content-lg-start justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-7 col-sm-10">
                <div class="contact-info-boxes-v2">
                    <div class="contact-info-box m-b-30 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="icon icon-gradient-1">
                            <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="info-body">
                            <h5 class="title">Lokasi Kami</h5>
                            <p>Gedung TULT Jl. Telekomunikasi No.1, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40267 Indonesia
                            </p>
                        </div>
                    </div>
                    <div class="contact-info-box m-b-30 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon icon-gradient-2">
                            <i class="fal fa-envelope-open-text"></i>
                        </div>
                        <div class="info-body">
                            <h5 class="title">Alamat Email</h5>
                            <p><a href="mailto:info@telkomuniversity.ac.id">info@telkomuniversity.ac.id</a></p>
                            <p><a href="gmail.com" target="_blank">gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-xl-1 col-md-10">
                <div class="contact-form-area m-t-md-100">
                    <div class="common-heading tagline-boxed m-b-40">
                        <span class="tagline">Layanan Pesan</span>
                        <h3 class="title">Ada pertanyaan atau pesan? <br> Kirim melalui form berikut
                        </h3>
                    </div>
                    <div class="contact-form-v2">
                        <form>
                            <div class="input-field m-b-30">
                                <input type="text" id="fullName" placeholder="Nama Lengkap" name="name" required="">
                                <label for="fullName">Nama</label>
                            </div>
                            <div class="input-field m-b-30">
                                <input type="text" id="phoneNumber" placeholder="Nomor Telepon" name="phone"
                                    required="">
                                <label for="phoneNumber">Telepon</label>
                            </div>
                            <div class="input-field m-b-30">
                                <input type="email" id="emailAddress" placeholder="Alamat Email" name="email"
                                    required="">
                                <label for="emailAddress">Email</label>
                            </div>
                            <div class="input-field m-b-30">
                                <input type="text" id="subject" placeholder="Saya ingin bertanya tentang .. "
                                    name="subject" required="">
                                <label for="subject">Subjek</label>
                            </div>
                            <div class="input-field textarea-field m-b-30">
                                <textarea id="message" placeholder="Pesan" name="message"></textarea>
                            </div>
                            <div class="input-field">
                                <button type="submit" class="template-btn">Kirim Pesan <i
                                        class="fas fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Contact Area ======-->

<!--====== Start Call To Action ======-->
<section class="cta-section bg-cover-center p-t-90 p-b-90 "
    style="background-image: url(./../landio/assets/img/cta/cta-bg-2.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10">
                <div class="cta-content text-center">
                    <div class="common-heading heading-white m-b-65">
                        <span class="tagline">Frequently Asked Questions</span>
                        <h2 class="title"> Daftar kumpulan pertanyaan dan jawaban seputar Aplikasi Fateka</h2>
                    </div>

                    <a href="{{url('/faq')}}" class="template-btn white-bg bordered-btn">FAQ<i
                            class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-xl-6 cta-absolute-image d-none d-lg-block wow fadeInUp" data-wow-delay="0.3s">
            <img src="{{url('landio/assets/img/cta/cta-absolute-img2.png')}}" alt=""  width="400px">
        </div>
    </div>
</section>

@endsection