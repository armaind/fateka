@extends('layouts.backend.master')

@section('title', 'Lowongan Kerja — Fateka')
@section('content')

@push('datatable-styles')
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/scrollbar.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/datatable-extension.css')}}">
@endpush

<div class="container-fluid">
    <div class="page-title">
        <div class="card card-absolute mt-5 mt-md-4">
            <div class="d-block w-100" style="background-image: url('../images/splide/kerja.png'); border-radius:15px; height:150px; background-size:cover">
                <div class="card-body">
                    <h4 class="text-center text-white">
                        {{-- <strong>Turn On</strong> The Future --}}
                    </h4>
                </div>
            </div>
            <div class="card-header bg-primary" style="border-radius: 16px">
                <h5 class="text-white">Lowongan Kerja</h5>
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
            @forelse ($items as $item) 
            <div class="card mb-4">
                <div class="row g-0 m-0" style="background-image: url('')">
                    <div class="col-md-4 m-auto p-20">
                        <img src="{{asset('images/' . $item->thumbnail)}}" class="img-fluid mx-auto d-block" alt="..." width="150px">
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="d-flex flex-row mb-3">
                                <i data-feather="briefcase" class="pr-2"></i>
                                <p class="card-text"><strong>Tipe Pekerjaan</strong><br>{{ $item->tipe_pekerjaan }}</p>
                            </div>
                            <div class="d-flex flex-row mb-3">
                                <i data-feather="user-plus" class="pr-2"></i>
                                <p class="card-text"><strong>Jumlah Kebutuhan</strong><br>{{ $item->jumlah }}</p>
                            </div>
                            <div class="d-flex flex-row">
                                <i data-feather="clock" class="pr-2"></i>
                                <p class="card-text"><strong>Berlaku sampai</strong><small><span class="badge badge-warning mb-2">{{ $item->berlaku }}</span></small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 m-0 bg-dark"  style="border-radius:15px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->nama }}</h5>
                            <h7 class="card-text">{{ $item->perusahaan }} <span style="color: #07BD02"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                            </svg></span></h7>
                            <div class="d-flex flex-row mt-3">
                                <i data-feather="map-pin" class="pr-2"></i>
                                <p class="card-text"><strong>{{ $item->kota }}, {{ $item->negara }}</strong></p>
                            </div>
                            <a href="{{route('lowonganKerja.show', $item->nama) }}"><div style="border-radius: 20px" class="btn btn-primary mt-3">Lihat Detail</div></a>
                        </div>
                    </div>
                </div>
            </div> 
            @empty
            @endforelse  
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
    @endpush

    @endsection