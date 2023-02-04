@extends('layouts.backend.master')

@section('title', 'Kegiatan — Fateka')
@section('content')

@push('datatable-styles')
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/scrollbar.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/datatable-extension.css')}}">
@endpush

<div class="container-fluid">
    <div class="page-title">
        <div class="card card-absolute mt-5 mt-md-4">
            <div class="d-block w-100" style="background-image: url('../images/splide/kegiatan.png'); border-radius:15px; height:150px; background-size:cover">
                <div class="card-header bg-primary" style="border-radius: 16px">
                    <h5 class="text-white">Kegiatan</h5>
                </div>
                <div class="card-body">
                    <h4 class="text-center text-white">
                        {{-- <strong>Turn On</strong> The Future --}}
                    </h4>
                </div>
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
            <div class="card mb-4 bg-dark">
                <div class="row g-0 m-0">
                    <div class="col-md-5 m-auto p-20">
                        <img src="{{asset('images/' . $item->thumbnail)}}" class="img-fluid mx-auto d-block" alt="..." style="border-radius: 20px">
                    </div>
                    <div class="col-md-7"  style="border-radius:15px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            <h6 class="card-text"><small class="text-muted">Penyelenggara: {{ $item->penyelenggara }}</small></h6>
                            <div class="d-flex flex-row mb-2">
                                <i data-feather="map-pin" class="pr-2"></i>
                                <p class="card-text">{{ $item->lokasi }}</p>
                            </div>
                            <a href="{{route('kegiatan.show', $item->judul) }}"><div style="border-radius: 20px" class="btn btn-primary mt-3">Lihat Detail</div></a>
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
