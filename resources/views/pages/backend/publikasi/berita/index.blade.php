@extends('layouts.backend.master')

@section('title', 'Berita — Fateka')
@section('content')

<div class="container-fluid product-wrapper">
    <div class="page-title">
        <div class="card card-absolute mt-5 mt-md-4">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1" ></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2" ></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3" ></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-block w-100" style="background-image: url('https://images.unsplash.com/photo-1661956602868-6ae368943878?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60'); border-radius:15px; height:350px; background-size:cover">
                        </div>
                        {{-- <div class="carousel-caption d-none d-md-block">
                            <a href=""><h1 style="text-emphasis-color: white">Judul Berita</h1></a>
                            <h3>Kategori</h3>
                        </div> --}}
                    </div>
                </div>
            </div> 
            <div class="card-header bg-primary">
                <h5 class="text-white">Berita</h5>
            </div>
        </div>
    </div>
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
    <div class="card card-absolute mt-5 mt-md-4">
        <div class="card-body">
            <div class="product-grid">
                <div class="product-wrapper-grid">
                    <h5 class="mb-2">Berita Terbaru</h5>
                    <div class="mb-4" style="background-color:#07BD02; height:0.1em">.</div>
                    <div class="row">
                        @forelse ($items as $item) 
                        <div class="col-xl-3 col-sm-6 xl-4">
                            <a class="" href="{{route('berita.show', $item->judul)}}" target="">
                                <div class="card">
                                    <div class="card-img-top" style="background-image: url('{{ asset('images/' . $item->thumbnail) }}'); background-size:cover; height:150px; border-top-left-radius:10px; border-top-right-radius:10px"></div>
                            </a>
                            <div class="p-20" style="height: 150px; border-radius:10px;" >
                                <h5>{{ $item->headline }}</h5>
                                <h7>{{ $item->kategori }} | <i style="font-size: 12px" class="icofont icofont-user"></i> {{ $item->author }}</h7>
                                <p class="comment" style="font-size: 10px;">{{ $item->tanggal }}</p>
                            </div>
                        </div>
                        </div>
                        @empty
                        @endforelse  
                    </div>
                </div>
                <div class="product-wrapper-grid">
                    <h5 class="mb-2">Berita Terpopuler</h5>
                    <div class="mb-4" style="background-color:#07BD02; height:0.1em">.</div>
                    <div class="row">
                        @forelse ($items as $item) 
                        <div class="col-xl-3 col-sm-6 xl-4">
                            <a class="" href="{{route('berita.show', $item->judul)}}" target="">
                                <div class="card">
                                    <div class="card-img-top" style="background-image: url('{{ asset('images/' . $item->thumbnail) }}'); background-size:cover; height:150px; border-top-left-radius:10px; border-top-right-radius:10px"></div>
                            </a>
                            <div class="p-20" style="height: 150px; border-radius:10px" >
                                <h5>{{ $item->headline }}</h5>
                                <h7>{{ $item->kategori }} | <i style="font-size: 12px" class="icofont icofont-user"></i> {{ $item->author }}</h7>
                                <p class="comment" style="font-size: 10px">{{ $item->tanggal }}</p>
                            </div>
                        </div>
                        </div>
                        @empty
                        @endforelse  
                    </div>
                </div>
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
