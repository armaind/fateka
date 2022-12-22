@extends('layouts.backend.master')

@section('title', 'Selamat datang di Fateka ' . Auth::user()->name . '')
@section('content')

@push('datatable-styles')
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/scrollable.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/datatable-extension.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.3.1/dist/css/splide.min.css">
@endpush

<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-xl-12 col-12 mt-4">
            <div class="splide"
                style="box-shadow:rgba(0, 0, 0, 0.05) 0px 0px 4px 0px, rgba(0, 0, 0, 0.1) 0px 4px 24px 0px; border-radius:8px;">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="{{url('images/splide/announcement-dashboard-images-1.png')}}"
                                class="d-block w-100" style="border-radius:8px;">
                        </li>
                        <li class="splide__slide">
                            <img src="{{url('images/splide/announcement-dashboard-images-2.png')}}"
                                class="d-block w-100" style="border-radius:8px;">
                        </li>
                        <li class="splide__slide">
                            <img src="{{url('images/splide/announcement-dashboard-images-3.png')}}"
                                class="d-block w-100" style="border-radius:8px;">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row second-chart-list third-news-update">
        <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
            <div class="card o-hidden profile-greeting">
                <div class="card-body">
                    <div class="media">
                        <div class="badge-groups w-100">
                            <div class="badge f-12">
                                <i class="mr-1" data-feather="clock"></i>
                                <span id="txt"></span>
                            </div>
                        </div>
                    </div>
                    <div class="greeting-user text-center">
                        <div class="profile-vector">
                            <img class="img-fluid" src="{{url("/")}}" alt="">
                        </div>
                        <h4 class="f-w-600">
                            <span id="greeting">Halo!</span>
                        </h4>
                        <p>
                            <span>
                                Disini kamu dapat mencari data alumni, mengakses berita seputar jurusan maupun kampus, mengikuti kegiatan, memposting dan mencari lowongan kerja, dan juga kamu dapat melakukan pertemuan secara daring, dan ada fitur survei yang dibuat untuk melakukan kuisioner terhadap para alumni.
                            </span>
                        </p>
                        <div class="whatsnew-btn">
                            <a href="{{url('dashboard/data-alumni')}}" class="btn btn-primary px-4 py-2">Cari Data Alumni
                                Sekarang ⇾
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-12 xl-50 calendar-sec box-col-6">
            <div class="card gradient-primary o-hidden py-2">
                <div class="card-body">
                    <div class="default-datepicker">
                        <div class="datepicker-here" data-language="en"></div>
                    </div>
                    <span class="default-dots-stay overview-dots full-width-dots">
                        <span class="dots-group">
                            <span class="dots dots1">
                            </span>
                            <span class="dots dots2 dot-small">
                            </span>
                            <span class="dots dots3 dot-small">
                            </span>
                            <span class="dots dots4 dot-medium">
                            </span>
                            <span class="dots dots5 dot-small">
                            </span>
                            <span class="dots dots6 dot-small">
                            </span>
                            <span class="dots dots7 dot-small-semi">
                            </span>
                            <span class="dots dots8 dot-small-semi">
                            </span>
                            <span class="dots dots9 dot-small">
                            </span>
                        </span>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-xl-4 xl-50 appointment-sec box-col-6">
            <div class="row">

                <div class="col-xl-12 alert-sec">
                    <div class="card bg-img">
                        <div class="card-header">
                            <div class="header-top">
                                <h5 class="m-0">Bagikan Aplikasi Ini</h5>
                                <div class="dot-right-icon">
                                    <i class="fa fa-share"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="body-bottom">
                                <h6>Jangan lupa untuk share dan ajak temanmu!</h6>
                                <span class="font-roboto">
                                    Ajak teman menggunakan Fateka dan share ke sosial mediamu biar 
                                    koneksi tetap terjaga
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('datatable-scripts')
<script src="{{url('cuba/assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.buttons.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/jszip.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/buttons.colVis.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/pdfmake.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/vfs_fonts.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.select.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/buttons.html5.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/buttons.print.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.responsive.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/dataTables.scroller.min.js')}}"></script>
<script src="{{url('cuba/assets/js/datatable/datatable-extension/custom.js')}}"></script>
<script src="{{url('cuba/assets/js/tooltip-init.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.3.1/dist/js/splide.min.js"></script>
<script>
    new Splide( '.splide',{
        autoplay : 'playing',
        rewind: true,
        arrows: false,
        interval:1600,
    } ).mount();
</script>
@endpush

@endsection