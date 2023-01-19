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
            <div class="card-header bg-primary">
                <h5 class="text-white">Lowongan Kerja</h5>
            </div>
            <div class="card-body">
                <p>
                    Dibawah ini adalah beberapa Lowongan Kerja yang dapat anda lamar
                </p>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://images.unsplash.com/photo-1661956602868-6ae368943878?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <a href=""><h5 class="card-title">Card title</h5></a>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div> 
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://images.unsplash.com/photo-1661956602868-6ae368943878?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <a href=""><h5 class="card-title">Card title</h5></a>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div> 
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://images.unsplash.com/photo-1661956602868-6ae368943878?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                <a href=""><h5 class="card-title">Card title</h5></a>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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
    @endpush

    @endsection