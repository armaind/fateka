@extends('layouts.frontend.master')

@section('title', 'Fateka — Forum Alumni Teknik Komputer, Universitas Telkom!')
@section('content')

<div class="page-wrapper">
    <!--====== Start Hero Area ======-->
    <section class="hero-area-v7">
        <div class="relative flex-none w-full grid">
            <div class="hero-content">
                <h3 class="hero-title wow fadeInLeft" data-wow-delay="0.2s">Forum Alumni Teknik<br>Komputer,<br> Universitas<br> Telkom 
                </h3>
                <p class="wow fadeInUp" data-wow-delay="0.3s">
                Fateka hadir untuk menjembatani civitas akademika <br>dengan seluruh alumni Teknik Komputer Universitas Telkom
                </p>
                @auth
                @else
                <a href="{{url('/login')}}" class="template-btn primary-bg-5 wow fadeInUp" data-wow-delay="0.4s">
                    Masuk Sekarang <i class="fas fa-arrow-right"></i>
                </a>
                @endauth
                <span class="notice wow fadeInUp" data-wow-delay="0.5s">
                    <img src="{{url('landio/assets/img/hero/notice-icon.png')}}" alt="Image">Stay connected, discover a wider network
                </span>
            </div>
            <div class="hero-img d-none d-lg-block wow fadeInUp animate-float-bob-y" data-wow-delay="0.2s">
                <img src="{{url('landio/assets/img/hero/home-software-4.png')}}" alt="Image">
            </div>
        </div>
    </section>
    <!--====== End Hero Area ======-->

    <!--====== Section Service Start ======-->
    <section class="service-section p-t-100 p-b-100 bg-secondary-color-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="common-heading text-center heading-white m-b-30">
                        <h2 class="title">Mengapa harus menggunakan Fateka?</h2>
                    </div>
                </div>
            </div>
            <div
                class="row no-gutters justify-content-lg-between justify-content-md-start justify-content-center icon-boxes-v3">
                <div class="col-lg-3 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="iconic-box box-version-white color-v1 m-t-50">
                        <div class="icon">
                            <i class="far fa-thumbs-up"></i>
                        </div>
                        <h4 class="title"><a href="#">Simple</a></h4>
                        <p>
                            Mudah digunakan cukup login menggunakan google, anda akan menikmati semua fiturnya
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="iconic-box box-version-white color-v2 m-t-50">
                        <div class="icon">
                            <i class="far fa-users"></i>
                        </div>
                        <h4 class="title"><a href="#">Connectivity</a></h4>
                        <p>
                            Menjaga tali konektivitas antar alumni dan pihak civitas akademika
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="iconic-box box-version-white color-v3 m-t-50">
                        <div class="icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <h4 class="title"><a href="{{url('/fitur')}}">Informative</a></h4>
                        <p>
                            Disini juga kami menyediakan banyak informasi meliputi event, sharing alumni dan lain sebagainya
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Section Service End ======-->

    <!--====== Start Design & Layout Section ======-->
    <section class="sof-design-layout p-t-100 p-b-100">
        <div class="container">
            <div class="row align-items-center justify-content-center no-gutters">
                <div class="col-lg-7">
                    <div class="software-preview m-t-50 animate-float-bob-x">
                        <img src="{{url('landio/assets/img/preview-gallery/design-layout.png')}}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="common-heading tagline-boxed">
                        <span class="tagline m-b-60">Alumni Story</span>
                        <h2 class="title m-b-30">Apa kata alumni Teknik Komputer</h2>
                    </div>
                    <div class="justify-content iconic-boxes-v1">
                        <div class="col-xl col-md-6 col-sm-10 ">
                            <div class="iconic-box m-t-30">
                                <h4 class="title">Faisal Candrasyah Hasibuan S.T M.T</h4>
                                <p>
                                "Jangan pernah lupakan alumni kita, itu semua adalah keluarga kita dan yakinlah silaturahmi di dalam alumni itu bermanfaat, tidak hanya untuk kita, untuk keluarga kita tapi untuk perusahaan dimana kita bekerja"
                                </p>
                            </div>
                        </div>
                        <div class="col-xl col-md-6 col-sm-10">
                            <div class="iconic-box m-t-30">
                                <h1 class="title">Agus Setiawan Popalia S.T</h1>
                                <p>
                                Manfaatkan format Universitas ini yang bisa membawa kita berpikir lebih universal artinya kita bisa mengembangkan keilmuan kita untuk saling terbuka sinergi, dengan saling keterbukaan akan membawa kita ke esensi keilmuannya terutama tentang kreatifitas sehingga kita bisa mengembangkan makna dan manfaat keilmuan kita untuk masyarakat</p>
                            </div>
                        </div>
                    </div>                
                </div>  
            </div>
        </div> 
    </section>
    <!--====== End Design & Layout Section ======-->
    
    <!--====== Section alumni Start ======-->
    <section class="service-area p-t-100 p-b-100 bg-secondary-color-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="common-heading heading-white text-center m-b-30">
                        <h2 class="title">Menyimak kesuksesan dari para alumni yang telah berkiprah di berbagai bidang</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center common-heading heading-white iconic-boxes-v1">
                <div class="col-xl-3 col-md-6 col-sm-10 ">
                    <div class="iconic-box m-t-30">
                        <div class="icon icon-gradient-5">
                            <i class="far fas fa-users"></i>
                        </div>
                        <h4 class="title">3980</h4>
                        <p>
                        Alumni
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-10">
                    <div class="iconic-box m-t-30">
                        <div class="icon icon-gradient-4">
                            <i class="far fas fa-building"></i>
                        </div>
                        <h4 class="title">200</h4>
                        <p>
                        Perusahaan & Bisnis
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-10">
                    <div class="iconic-box m-t-30">
                        <div class="icon icon-gradient-5">
                            <i class="far fas fa-map-marker-alt"></i>
                        </div>
                        <h4 class="title">50</h4>
                        <p>
                        Kota
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Section alumni End ======-->

    <!--====== Start News Update ======-->
    <section class="p-t-100 p-b-100" >
        <div class="blog" id="blog">
            <div class="container">
                <div class="row justify-content-center iconic-box">
                    <div class="col-xl-5 p-b-25">
                        <div class="common-heading tagline-boxed text-center m-b-50">
                            <span class="tagline">Informasi Terkini</span>
                            <h2 class="title">Ikuti berita seputar Teknik Komputer hanya di Fateka</h2>
                        </div>
                    </div> 
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                          <div class="card h-100">
                            <img src="https://images.unsplash.com/photo-1661956602868-6ae368943878?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-footer">
                                <a href="/login">Selengkapnya</a>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100">
                            <img src="https://images.unsplash.com/photo-1661956602868-6ae368943878?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                              <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-footer">
                                <a href="/login">Selengkapnya</a>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100">
                            <img src="https://images.unsplash.com/photo-1661956602868-6ae368943878?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                              <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                            <div class="card-footer">
                                <a href="/login">Selengkapnya</a>
                            </div>
                          </div>
                        </div>
                      </div>   
                </div>
            </div>
        </div>
    </section>
    <!--====== End News Update ======-->
</div>
@endsection