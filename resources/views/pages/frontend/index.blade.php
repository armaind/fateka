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
                Fatkest hadir untuk menjembatani civitas akademika dengan seluruh alumni Teknik Komputer Universitas Telkom
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
            <div class="hero-img d-none d-lg-block wow fadeInUp" data-wow-delay="0.2s">
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
    <section class="sof-design-layout p-t-80 p-b-80">
        <div class="container">
            <div class="row align-items-center justify-content-center no-gutters">
                <div class="col-lg-7">
                    <div class="software-preview m-t-50 animate-float-bob-y">
                        <img src="{{url('landio/assets/img/preview-gallery/design-layout.png')}}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="software-text-block p-l-lg-30 p-l-md-0">
                        <div class="common-heading m-t-40">
                            <span class="tagline color-primary-5">Apa kata alumni Teknik Komputer</span>
                            <h3 class="title">Faisal Candrasyah Hasibuan S.T M.T</h3>
                        </div>
                        <p>
                        "Jangan pernah lupakan alumni kita, itu semua adalah keluarga kita dan yakinlah silaturahmi di dalam alumni itu bermanfaat, tidak hanya untuk kita, untuk keluarga kita tapi untuk perusahaan dimana kita bekerja".
                        </p>
                    </div>
                    <div class="software-text-block p-t-10 p-l-lg-30 p-l-md-0">
                        <div class="common-heading m-t-40">
                            <h3 class="title">Shinta Raudlatul Hanafia S.T</h3>
                        </div>
                        <p>
                        "Teruslah Berkibar Menjadi Alumni Yang Terbaik, Memberikan Kontribusi Untuk Bangsa dan Negara".
                        </p>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    <!--====== End Design & Layout Section ======-->
    
    <!--====== Section alumni Start ======-->
    <section class="service-section p-t-130 p-b-130 bg-secondary-color-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="common-heading text-center heading-white m-b-30">
                        <h2 class="title">Menyimak kesuksesan dari para alumni yang telah berkiprah di berbagai bidang.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center m-t-100">
            <div class="row">
              <div class="col order-first">
                <h1> 3460</h1>
                <p>Alumni</p>
              </div>
              <div class="col">
                <h1 class="title"> 87</h1>
                <p>Perusahaan & Bisnis</p>
              </div>
              <div class="col order-last">
                <h1 class="title">34</h1>
                <p> Kota</p>
              </div>
            </div>
        </div>
    </section>
    <!--====== Section alumni End ======-->

    <!--====== Service Details Start ======-->
    <section class="service-details-area p-t-130">
        <div class="service-tab">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="common-heading text-center m-b-65">
                            <span class="tagline color-primary-5">Ada apa aja sih di Fatkest?</span>
                            <h2 class="title">Berikut fitur yang dapat anda manfaatkan</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="service-tab-nav">
                    <ul class="nav nav-tabs service-tab-nav" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-toggle="tab" href="#tabItem1" role="tab">
                                <i class="fa fa-folder"></i> Data Alumni
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#tabItem2" role="tab">
                                <i class="	fa fa-briefcase"></i> Lowongan Karir
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#tabItem3" role="tab">
                                <i class="far fa-chalkboard-teacher"></i> Event & News
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-toggle="tab" href="#tabItem3" role="tab">
                                <i class="far fa-video"></i> Virtual Room
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="service-tab-content container-fluid">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tabItem1" role="tabpanel">
                        <div class="service-tab-ime text-center">
                            <img src="{{url('landio/assets/img/dashboard.png')}}" style="-webkit-filter: drop-shadow(0px 3px 10px rgba(0,0,0,.8));
                            filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.219));" alt="Image">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabItem2" role="tabpanel">
                        <div class="service-tab-ime text-center">
                            <img src="{{url('landio/assets/img/jadwal.png')}}" style="-webkit-filter: drop-shadow(0px 3px 10px rgba(0,0,0,.8));
                        filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.219));" alt="Image">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabItem3" role="tabpanel">
                        <div class="service-tab-ime text-center">
                            <img src="{{url('landio/assets/img/catatan.png')}}" style="-webkit-filter: drop-shadow(0px 3px 10px rgba(0,0,0,.8));
                        filter: drop-shadow(0px 0px 12px rgba(0, 0, 0, 0.219));" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Service Details End ======-->

    <br>
    <br>

    <!--====== Start News Update ======-->
    <section class="team-member-area section-half-dots-pattern-fixed p-t-130 p-b-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="common-heading tagline-boxed text-center m-b-60">
                        <span class="tagline">Informasi Terkini</span>
                        <h2 class="title">Ikuti berita seputar Teknik Komputer hanya di Fatkest</h2>
                    </div>
                </div>
            </div>

            <div class="row team-members">
                <div class="col-xl-4 col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="member-box m-b-30">
                        <div class="member-photo">
                            <img src="{{url('landio/assets/img/team/syai.jpg')}}" alt="Member Photo">
                        </div>
                        <div class="member-info">
                            <h5 class="name"><a href="#">Syauqizaidan Khairan Khalaf</a></h5>
                            <p class="title">Developer, Founder & Ketua</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="member-box m-b-30">
                        <div class="member-photo">
                            <img src="{{url('landio/assets/img/team/dodi.jpeg')}}" alt="Member Photo">
                        </div>
                        <div class="member-info">
                            <h5 class="name"><a href="#">Dodi Wahyono</a></h5>
                            <p class="title">Hustler & Anggota</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="member-box m-b-30">
                        <div class="member-photo">
                            <img src="{{url('landio/assets/img/team/naufal.jpeg')}}" alt="Member Photo">
                        </div>
                        <div class="member-info">
                            <h5 class="name"><a href="#">Naufal Fawwaz</a></h5>
                            <p class="title">Hipster & Anggota</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End News Update ======-->
</div>
@endsection