@extends('layouts.backend.master')

@section('title', 'Berita — Fateka')
@section('content')

<div class="container-fluid product-wrapper">
    <div class="page-title">
        <div class="card card-absolute mt-5 mt-md-4">
            <div class="card-header bg-primary">
                <h5 class="text-white">Berita</h5>
            </div>
            <div class="card-body">
                <p>
                    Di bawah ini merupakan berita terbaru seputar Teknik Komputer Universitas Telkom
                </p>
            </div>
        </div>
        <div class="card card-absolute mt-5 mt-md-4">
            <div>
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1" ></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2" ></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="3" ></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{url('https://images.unsplash.com/photo-1661956602868-6ae368943878?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60')}}" class="d-block w-100" alt="..." style="border-radius:15px;" height="420px">
                                {{-- <div class="carousel-caption d-none d-md-block">
                                    <a href=""><h1>Judul Berita</h1></a>
                                    <h3>Kategori</h3>
                                </div> --}}
                            </div>
                        </div>
                </div> 
            </div>
        </div>
    </div>
    <div class="product-grid">
        <div class="feature-products">
            <div class="row mb-4">
                <div class="col-md-6 products-total">
                    <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view" href="#"
                            data-original-title="" title=""><i data-feather="grid"></i></a></div>
                    <div class="square-product-setting d-inline-block"><a class="icon-grid m-0 list-layout-view"
                            href="#" data-original-title="" title=""><i data-feather="list"></i></a></div><span
                        class="d-none-productlist filter-toggle">
                        Filters<span class="ml-2"><i class="toggle-data" data-feather="chevron-down"></i></span></span>
                    <div class="grid-options d-inline-block">
                        <ul>
                            <li><a class="product-2-layout-view" href="#" data-original-title="" title=""><span
                                        class="line-grid line-grid-1 bg-primary"></span><span
                                        class="line-grid line-grid-2 bg-primary"></span></a></li>
                            <li><a class="product-3-layout-view" href="#" data-original-title="" title=""><span
                                        class="line-grid line-grid-3 bg-primary"></span><span
                                        class="line-grid line-grid-4 bg-primary"></span><span
                                        class="line-grid line-grid-5 bg-primary"></span></a></li>
                            <li><a class="product-4-layout-view" href="#" data-original-title="" title=""><span
                                        class="line-grid line-grid-6 bg-primary"></span><span
                                        class="line-grid line-grid-7 bg-primary"></span><span
                                        class="line-grid line-grid-8 bg-primary"></span><span
                                        class="line-grid line-grid-9 bg-primary"></span></a></li>
                            <li><a class="product-6-layout-view" href="#" data-original-title="" title=""><span
                                        class="line-grid line-grid-10 bg-primary"></span><span
                                        class="line-grid line-grid-11 bg-primary"></span><span
                                        class="line-grid line-grid-12 bg-primary"></span><span
                                        class="line-grid line-grid-13 bg-primary"></span><span
                                        class="line-grid line-grid-14 bg-primary"></span><span
                                        class="line-grid line-grid-15 bg-primary"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-wrapper-grid">
            <div class="row">
                @forelse ($items as $item)    
                <div class="col-xl-3 col-sm-6 xl-4">
                    <div class="card">
                        <img src="{{'https://images.unsplash.com/photo-1661956602868-6ae368943878?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60'. $item->thumbnail }}" class="card-img-top" alt="..." style="border-top-left-radius: 10px; border-top-right-radius:10px; box-shadow:rgba(0, 0, 0, 0.05) 0px 0px 4px 0px, rgba(0, 0, 0, 0.1) 0px 4px 24px 0px;">
                        <div class="card-body">
                            <a class="" href="{{route('berita.show', $item->id)}}" target="">
                                <h4>{{ $item->judul }}</h4>
                            </a>
                            <p>{{ $item->kategori }}</p>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse   
            </div>
        </div>
    </div>
</div>

@push('journal-scripts')
<script src="{{url('cuba/assets/js/range-slider/ion.rangeSlider.min.js')}}"></script>
<script src="{{url('cuba/assets/js/range-slider/rangeslider-script.js')}}"></script>
<script src="{{url('cuba/assets/js/touchspin/vendors.min.js')}}"></script>
<script src="{{url('cuba/assets/js/touchspin/touchspin.js')}}"></script>
<script src="{{url('cuba/assets/js/touchspin/input-groups.min.js')}}"></script>
<script src="{{url('cuba/assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{url('cuba/assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{url('cuba/assets/js/select2/select2-custom.js')}}"></script>
<script src="{{url('cuba/assets/js/product-tab.js')}}"></script>
@endpush

@endsection