@extends('layouts.frontend.minor')

@section('title', 'FAQ — Fateka')
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
                        <li>
                            <a href="{{url('kontak')}}">Kontak Kami</a>
                        </li>
                    </ul>
                </nav>
            </div>
            @auth
            <div class="nav-menu d-none d-xl-block">
                <div class="media profile-media">
                    <div class="media-body">
                        <ul class="profile-dropdown onhover-show-div">
                            <a class="dropdown-toggle" href="#"  id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                            <div class="dropdown-menu" aria-labelledby="username">
                                <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            @else
            <div class="header-right">
                <ul class="header-extra">
                    <li class="d-none d-sm-block">
                        <a href="{{url('/login')}}" class="user-login">
                            <i class="far fa-user-circle"></i> Masuk Aplikasi
                        </a>
                    </li>
                    <li class="d-none d-md-block">
                        <a href="{{url('/register')}}" class="template-btn primary-bg-5">
                            Daftar Sekarang <i class="fas fa-arrow-right"></i>
                        </a>
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
                        <a href="{{('/kontak')}}">Kontak Kami</a>
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
                <h5 class="canvas-widget-title">Tentang</h5>
                <p>
                    Fateka adalah platform yang berfungsi untuk menyediakan informasi dan media interaksi untuk menjembatani civitas akademika dengan seluruh alumni Teknik Komputer, Universitas Telkom.
                </p>
            </div>
            <div class="contact-us">
                <h5 class="canvas-widget-title">Kontak Kami</h5>
                <ul>
                    <li>
                        <i class="far fa-map-marker-alt"></i>
                        Gedung Panambulai Lt. 2 Jl. Telekomunikasi Terusan Buah Batu Bandung 40257 Indonesia
                    </li>
                    <li>
                        <i class="far fa-envelope-open"></i>
                        <a href="mailto:info@telkomuniversity.ac.id">info@telkomuniversity.ac.id</a>
                    </li>
                    <li>
                        <i class="far fa-phone"></i>
                        <span><a href="tel:+62227566456">+62227566456</a></span>
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
            <h1 class="page-title">FAQ</h1>
            <ul class="breadcrumb-nav">
                <li><a href="{{url('/')}}">Beranda</a></li>
                <li>FAQ</li>
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

<!-- ===== FAQ Area Start ===== -->

<div class="container w-150 p-b-100 p-t-100 ">
    <div id="accordion">
        <div class="card border-0">
            <div class="card-header" id="q1"> 
                <h4 class="mb-2 mt-2">
                    <a data-toggle="collapse" data-target="#a1">
                        Apa itu Fateka?
                    </a>
                </h4>
            </div>
            <div id="a1" class="collapse show" aria-labelledby="q1" data-parent="#accordion">
                <div class="card-body">
                    Fateka adalah platform yang berfungsi untuk menyediakan informasi dan media interaksi untuk menjembatani civitas akademika dengan seluruh alumni Teknik Komputer, Univeritas Telkom.
                </div>
            </div>
        </div>
        <div class="card border-0">
            <div class="card-header" id="q2"> 
                <h4 class="mb-2 mt-2">
                    <a data-toggle="collapse" data-target="#a2">
                        Siapa pengguna Fateka?
                    </a>
                </h4>
            </div>
            <div id="a2" class="collapse show" aria-labelledby="q2" data-parent="#accordion">
                <div class="card-body">
                    Pengguna dari aplikasi ini adalah hanya civitas akademika dari Teknik Komputer Universitas Telkom. Mulai dari dosen, mahasiswa, dan alumni.
                </div>
            </div>
        </div>
        <div class="card border-0">
            <div class="card-header" id="q3"> 
                <h4 class="mb-2 mt-2">
                    <a data-toggle="collapse" data-target="#a3">
                        Dapatkah pengguna selain dari civitas akademika Teknik Komputer Universitas Telkom menggunakan Fateka?
                    </a>
                </h4>
            </div>
            <div id="a3" class="collapse show" aria-labelledby="q3" data-parent="#accordion">
                <div class="card-body">
                     Tidak diizinkan.
                </div>
            </div>
        </div>
        <div class="card border-0">
            <div class="card-header" id="q4"> 
                <h4 class="mb-2 mt-2">
                    <a data-toggle="collapse" data-target="#a4">
                        Apakah aplikasi ini berbayar?
                    </a>
                </h4>
            </div>
            <div id="a4" class="collapse show" aria-labelledby="q4" data-parent="#accordion">
                <div class="card-body">
                    Tidak, aplikasi ini gratis.
                </div>
            </div>
        </div>
        <div class="card border-0">
            <div class="card-header" id="q5"> 
                <h4 class="mb-2 mt-2">
                    <a data-toggle="collapse" data-target="#a5">
                        Apa saja fitur Fateka?
                    </a>
                </h4>
            </div>
            <div id="a5" class="collapse show" aria-labelledby="q5" data-parent="#accordion">
                <div class="card-body">
                    Tabel data alumni, Berita dan Artikel, Virtual Meet, Lowongan Kerja, Kuisioner, dan Event.
                </div>
            </div>
        </div>
        <div class="card border-0">
            <div class="card-header" id="q6"> 
                <h4 class="mb-2 mt-2">
                    <a data-toggle="collapse" data-target="#a6">
                        Bagaimana cara mengakses fitur Fateka?
                    </a>
                </h4>
            </div>
            <div id="a6" class="collapse show" aria-labelledby="q6" data-parent="#accordion">
                <div class="card-body">
                    Terlebih dahulu anda harus mendaftar melalui laman registrasi yang tersedia, selanjutnya masuk untuk mengakses fitur seluruh fitur melalui dashboard yang disediakan.
                </div>
            </div>
        </div>
        <div class="card border-0">
            <div class="card-header" id="q7"> 
                <h4 class="mb-2 mt-2">
                    <a data-toggle="collapse" data-target="#a7">
                        Dapatkah daftar dengan menggunakan akun Google?
                    </a>
                </h4>
            </div>
            <div id="a7" class="collapse show" aria-labelledby="q7" data-parent="#accordion">
                <div class="card-body">
                    Betul, anda dapat daftar menggunakan akun Google.
                </div>
            </div>
        </div>
        <div class="card border-0">
            <div class="card-header" id="q8"> 
                <h4 class="mb-2 mt-2">
                    <a data-toggle="collapse" data-target="#a8">
                        Bagaimana jika ada pertanyaan lain?
                    </a>
                </h4>
            </div>
            <div id="a8" class="collapse show" aria-labelledby="q8" data-parent="#accordion">
                <div class="card-body">
                    Anda dapat mengirimkan pertanyaannya melalui laman kontak yang tersedia.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===== FAQ Area End ===== -->

<!--====== Start Call To Action ======-->
<section class="cta-section bg-cover-center p-t-150 p-b-90" style="background-image: url(./../landio/assets/img/cta/cta-bg-2.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10">
                <div class="cta-content text-center">
                    <div class="common-heading heading-white m-b-65">
                        <span class="tagline">Punya pertanyaan lain?</span>
                        <h2 class="title">Ayo segera hubungi kami</h2>
                    </div>
                    <a href="{{url('/kontak')}}" class="template-btn white-bg bordered-btn">Hubungi Sekarang 
                    <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="cta-absolute-image d-none d-lg-block wow fadeInUp" data-wow-delay="0.3s">
        <img src="{{url('landio/assets/img/cta/cta-absolute-img3.png')}}" alt="">
    </div> 
</section>        

@endsection