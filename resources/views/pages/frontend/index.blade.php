@extends('layouts.frontend.master')

@section('title', 'Fateka — Forum Alumni Teknik Komputer, Universitas Telkom!')
@section('content')

<div class="page-wrapper">
    <!--====== End Hero Area ======-->
    <section class="service-section p-t-200 p-b-100">
        <div class="container">
            <div class="row no-gutters justify-content-lg-between justify-content-md-start justify-content-center icon-boxes-v3">
                <div class="col-lg-3 col-md-6 col-sm-10 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                    <h1 class="hero-title wow fadeInLeft mb-5" data-wow-delay="0.2s">
                        Forum Alumni Teknik Komputer, Universitas Telkom 
                    </h1>
                    <p class="wow fadeInUp mb-5" data-wow-delay="0.3s">
                        Fateka hadir untuk menjembatani civitas akademika dengan seluruh alumni Teknik Komputer Universitas Telkom
                    </p>
                    @auth
                    @else
                    <a href="{{url('/login')}}" class="template-btn primary-bg-5 wow fadeInUp mb-5" data-wow-delay="0.4s">
                        Masuk Sekarang <i class="fas fa-arrow-right"></i>
                    </a>
                    @endauth
                    <span class="notice wow fadeInUp" data-wow-delay="0.5s">
                        <img class="mr-3" src="{{url('landio/assets/img/hero/notice-icon.png')}}" alt="Image">Stay connected, discover a wider network
                    </span>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-10 col-xl-5 wow fadeInUp align-self-center" data-wow-delay="0.3s">
                    <div class="hero-img d-none d-lg-block wow fadeInUp animate-float-bob-y" data-wow-delay="0.2s">
                        <img src="{{url('landio/assets/img/hero/home-software-4.png')}}" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
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
            <div class="row icon-boxes-v3">
                <div class="col-md-4 col-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="iconic-box box-version-white color-v4 m-t-50 p-l-50">
                        <div class="icon">
                            <i class="far fa-thumbs-up"></i>
                        </div>
                        <div class="p-t-20">
                            <h4 class="title"><a href="#">Simple</a></h4>
                            <p>
                                Mudah digunakan cukup login menggunakan google, anda akan menikmati semua fiturnya
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="iconic-box box-version-white color-v2 m-t-50 p-l-50">
                        <div class="icon">
                            <i class="far fa-users"></i>
                        </div>
                        <div class="p-t-20">
                            <h4 class="title"><a href="#">Connectivity</a></h4>
                            <p>
                                Menjaga tali konektivitas antar alumni dan pihak civitas akademika
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="iconic-box box-version-white color-v1 m-t-50 p-l-50">
                        <div class="icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <div class="p-t-20">
                            <h4 class="title"><a href="{{url('/fitur')}}">Informative</a></h4>
                            <p>
                                Disini juga kami menyediakan banyak informasi meliputi event, sharing alumni dan lain sebagainya
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Section Service End ======-->

    <!--====== Start Design & Layout Section ======-->
    <section class="service-section p-t-100 p-b-100">
        <div class="container">
            <div class="row no-gutters justify-content-lg-between justify-content-md-start justify-content-center icon-boxes-v3">
                <div class="col-md-6 col-sm-10  wow fadeInUp mt-5" data-wow-delay="0.3s">
                    <div class="common-heading tagline-boxed text-right col-xl col-md-6 col-sm-10">
                        <span class="tagline m-b-60">Alumni Story</span>
                        <h2 class="title m-b-30">Apa kata alumni Teknik Komputer</h2>
                    </div>
                    <div class="iconic-boxes-v1">
                        <div class="col-xl col-md-6 col-sm-10 ">
                            <div class="iconic-box m-t-30 text-right" style="border-radius: 25px">
                                <p>
                                    "Jangan pernah lupakan alumni kita, itu semua adalah keluarga kita dan yakinlah silaturahmi di dalam alumni itu bermanfaat, tidak hanya untuk kita, untuk keluarga kita tapi untuk perusahaan dimana kita bekerja"
                                </p>
                                <h5 class="p-t-25">Faisal Candrasyah Hasibuan S.T M.T</h5>
                            </div>
                        </div>
                        <div class="col-xl col-md-6 col-sm-10">
                            <div class="iconic-box m-t-30 text-right" style="border-radius: 25px">
                                <p>
                                    Manfaatkan format Universitas ini yang bisa membawa kita berpikir lebih universal artinya kita bisa mengembangkan keilmuan kita untuk saling terbuka sinergi, dengan saling keterbukaan akan membawa kita ke esensi keilmuannya
                                </p>
                                <h5 class="p-t-25">Agus Setiawan Popalia S.T</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-10 col-xl-4  wow fadeInUp align-self-center" data-wow-delay="0.2s">
                    <div class="software-preview m-t-50 animate-float-bob-x">
                        <img src="{{url('landio/assets/img/preview-gallery/design-layout.png')}}" alt="Image">
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
                <div class="col-xl-3 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="iconic-box m-t-30" style="border-radius: 25px">
                        <div class="icon icon-gradient-5">
                            <i class="far fas fa-users"></i>
                        </div>
                        <ul>
                            <li><h3 class="mb-3" style="color:white">5000+</h3></li>
                            <li><p style="color: white">Alumni</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="iconic-box m-t-30" style="border-radius: 25px">
                        <div class="icon icon-gradient-4">
                            <i class="far fas fa-building"></i>
                        </div>
                        <ul>
                            <li><h3 class="mb-3" style="color:white">100+</h3></li>
                            <li><p style="color: white">Perusahaan & Bisnis</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="iconic-box m-t-30" style="border-radius: 25px">
                        <div class="icon icon-gradient-5">
                            <i class="far fas fa-map-marker-alt"></i>
                        </div>
                        <ul>
                            <li><h3 class="mb-3" style="color:white">100+</h3></li>
                            <li><p style="color: white">Kota</p></li>
                        </ul>
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
                    <div class="row row-cols-1 row-cols-md-4 g-3">
                        <div class="col">
                          <div class="card h-100 mb-5 wow fadeInUp" data-wow-delay="0.2s" style="-webkit-filter: drop-shadow(0px 3px 10px rgba(0,0,0,.8));
                          filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.219)); border-radius: 25px">
                            <img src="https://images.unsplash.com/photo-1661956602868-6ae368943878?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="..." style="border-top-left-radius: 25px; border-top-right-radius: 25px">
                            <div class="card-body">
                              <h5 class="card-title">Headline Berita</h5>
                              <small class="text-muted">Last updated 3 mins ago</small>
                              <div class="mt-3">
                                <a href="/login">Selengkapnya</a>
                            </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100 mb-5 wow fadeInUp" data-wow-delay="0.2s" style="-webkit-filter: drop-shadow(0px 3px 10px rgba(0,0,0,.8));
                          filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.219)); border-radius: 25px">
                            <img src="https://images.unsplash.com/photo-1661956602868-6ae368943878?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="..." style="border-top-left-radius: 25px; border-top-right-radius: 25px">
                            <div class="card-body">
                              <h5 class="card-title">Headline Berita</h5>
                              
                              <small class="text-muted">Last updated 3 mins ago</small>
                              <div class="mt-3">
                                <a href="/login">Selengkapnya</a>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100 mb-5 wow fadeInUp" data-wow-delay="0.2s" style="-webkit-filter: drop-shadow(0px 3px 10px rgba(0,0,0,.8));
                          filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.219)); border-radius: 25px">
                            <img src="https://images.unsplash.com/photo-1661956602868-6ae368943878?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="..." style="border-top-left-radius: 25px; border-top-right-radius: 25px">
                            <div class="card-body">
                              <h5 class="card-title ">Headline Berita</h5>
                              
                              <small class="text-muted">Last updated 3 mins ago</small>
                              <div class="mt-3">
                                  <a href="/login">Selengkapnya</a>
                              </div>
                          </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100 mb-5 wow fadeInUp" data-wow-delay="0.2s" style="-webkit-filter: drop-shadow(0px 3px 10px rgba(0,0,0,.8));
                          filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.219)); border-radius: 25px">
                            <img src="https://images.unsplash.com/photo-1661956602868-6ae368943878?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="..." style="border-top-left-radius: 25px; border-top-right-radius: 25px">
                            <div class="card-body">
                              <h5 class="card-title ">Headline Berita</h5>
                              <small class="text-muted">Last updated 3 mins ago</small>
                              <div class="mt-3">
                                  <a href="/login">Selengkapnya</a>
                              </div>
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