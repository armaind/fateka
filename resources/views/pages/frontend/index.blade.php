@extends('layouts.frontend.master')

@section('title', 'Fatkest — Forum Alumni Teknik Komputer, Universitas Telkom!')
@section('content')

<div class="page-wrapper">
    <!--====== Start Hero Area ======-->
    <section class="hero-area-v7">
        <div class="relative flex-none w-full grid">
            <div class="hero-content">
                <h3 class="hero-title wow fadeInLeft" data-wow-delay="0.2s">Forum Alumni Teknik<br>Komputer,<br> Universitas<br> Telkom 
                </h3>
                <p class="wow fadeInUp" data-wow-delay="0.3s">
                Fatkest hadir untuk menjembatani civitas akademika <br>dengan seluruh alumni Teknik Komputer Universitas Telkom
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
                        <h2 class="title">Mengapa harus menggunakan Fatkest?</h2>
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
                            Mudah digunakan cukup login menggunakan SSO, dibantu dengan tampilan yang responsive
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="iconic-box box-version-white color-v2 m-t-50">
                        <div class="icon">
                            <i class="fas fa-door-open"></i>
                        </div>
                        <h4 class="title"><a href="#">All in-one</a></h4>
                        <p>
                            Satu web untuk mengakses berbagai fitur yang dapat anda manfaatkan
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

            <div class="row justify-content-center iconic-boxes-v1">
                <div class="col-xl-3 col-md-6 col-sm-10 ">
                    <div class="iconic-box m-t-30 box-version-white color-v1">
                        <div class="icon icon-gradient-3">
                            <i class="far fa-calendar-alt"></i>
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
                            <i class="far fa-database"></i>
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
                            <i class="far fa-file-word"></i>
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
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="common-heading tagline-boxed text-center m-b-50">
                            <span class="tagline">Informasi Terkini</span>
                            <h2 class="title">Ikuti berita seputar Teknik Komputer hanya di Fatkest</h2>
                        </div>
                    </div>

                </div>
                <div class="member-box">
                    <ul class="blog-list">

                        <li>
                        <div class="blog-card">
        
                            <figure class="blog-banner">
                            <img src="landio/assets/img/blog-banner-1.jpg" alt="Best Traveling Place">
                            </figure>
        
                            <div class="blog-meta">
        
                            <span>
                                <ion-icon name="calendar-outline"></ion-icon>
        
                                <time datetime="2021-04-10">april 10 2021</time>
                            </span>
        
                            <span>
                                <ion-icon name="person-outline"></ion-icon>
        
                                <p>admin</p>
                            </span>
        
                            </div>
        
                            <h3 class="blog-title">Best Traveling Place</h3>
        
                            <p class="blog-text">
                            Integer ante arcu accumsan a consectetuer eget posuere mauris praesent adipiscing phasellus
                            ullamcorper ipsum rutrum
                            punc.
                            </p>
        
                            <a href="#" class="blog-link-btn">
                            <span>Learn More</span>
        
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                            </a>
        
                        </div>
                        </li>
        
                        <li>
                        <div class="blog-card">
        
                            <figure class="blog-banner">
                            <img src="landio/assets/img/blog-banner-2.jpg" alt="Private Meeting Room">
                            </figure>
        
                            <div class="blog-meta">
        
                            <span>
                                <ion-icon name="calendar-outline"></ion-icon>
        
                                <time datetime="2021-04-10">april 10 2021</time>
                            </span>
        
                            <span>
                                <ion-icon name="person-outline"></ion-icon>
        
                                <p>admin</p>
                            </span>
        
                            </div>
        
                            <h3 class="blog-title">Private Meeting Room</h3>
        
                            <p class="blog-text">
                            Integer ante arcu accumsan a consectetuer eget posuere mauris praesent adipiscing phasellus
                            ullamcorper ipsum rutrum
                            punc.
                            </p>
        
                            <a href="#" class="blog-link-btn">
                            <span>Learn More</span>
        
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                            </a>
        
                        </div>
                        </li>
        
                        <li>
                        <div class="blog-card">
        
                            <figure class="blog-banner">
                            <img src="landio/assets/img/blog-banner-3.jpg" alt="The Best Business Ideas">
                            </figure>
        
                            <div class="blog-meta">
        
                            <span>
                                <ion-icon name="calendar-outline"></ion-icon>
        
                                <time datetime="2021-04-10">april 10 2021</time>
                            </span>
        
                            <span>
                                <ion-icon name="person-outline"></ion-icon>
        
                                <p>admin</p>
                            </span>
        
                            </div>
        
                            <h3 class="blog-title">The Best Business Ideas</h3>
        
                            <p class="blog-text">
                            Integer ante arcu accumsan a consectetuer eget posuere mauris praesent adipiscing phasellus
                            ullamcorper ipsum rutrum
                            punc.
                            </p>
        
                            <a href="#" class="blog-link-btn">
                            <span>Learn More</span>
        
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                            </a>
        
                        </div>
                        </li>
        
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--====== End News Update ======-->
</div>
@endsection