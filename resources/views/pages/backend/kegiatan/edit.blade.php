@extends('layouts.backend.master')

@section('title', 'Edit Kegiatan — Fateks')
@section('content')

@push('create-article-styles')
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/dropzone.css')}}">
@endpush

<div class="container-fluid">
    <div class="page-title">
        <div class="card card-absolute mt-5 mt-md-4">
            <div class="card-header bg-primary">
                <h5 class="text-white">Edit Kegiatan <span class="d-none d-md-inline"> —
                        {{$item->judul}}</span></h5>
            </div>
            <div class="card-body">
                <p>Dibawah ini adalah form untuk edit Kegiatan</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body add-post">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <li>
                                <h4>Error</h4>
                            </li>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form class="row needs-validation" method="POST" action="{{route('kegiatan.update', $item->id)}}"
                        enctype="multipart/form-data" novalidate="">
                        @method('PUT')
                        @csrf
                        <div class="col-sm-12">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="judul">Judul Kegiatan <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input class="form-control" id="judul" name="judul" value="{{$item->judul}}"
                                            type="text" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="kategori">Kategori <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input class="form-control" id="kategori" name="kategori"
                                            value="{{$item->kategori}}" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="penyelenggara">Penyelenggara <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input class="form-control" id="penyelenggara" name="penyelenggara"
                                            value="{{$item->penyelenggara}}" type="text" required>
                                    </div>
                                </div>
                                <div class="email-wrapper">
                                    <div class="theme-form">
                                        <div class="form-group">
                                            <label>Deskripsi <span class="text-danger">*</span></label>
                                            <textarea id="text-box" name="content" cols="10" rows="2">
                                            {!!htmlspecialchars_decode($item->content)!!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 ">
                                    <label for="kuota">Kuota <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input class="form-control" id="kuota" name="kuota"
                                            value="{{$item->kuota}}" type="number" required>
                                    </div>
                                </div> 
                                <div class="form-group col-md-4 ">
                                    <label for="lokasi">Lokasi <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input class="form-control" id="lokasi" name="lokasi"
                                            value="{{$item->lokasi}}" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 ">
                                    <label for="tanggal">Tanggal <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input class="form-control" id="tanggal" name="tanggal"
                                            value="{{$item->tanggal}}" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 ">
                                    <label for="batas">Batas Daftar <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input class="form-control" id="batas" name="batas"
                                            value="{{$item->batas}}" type="text" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="user_id" value="{{Auth::user()->email}}">
                            <input class="form-control" type="hidden" name="tanggal"
                                value="{{{now()->toDateString()}}}">
                        </div>
                        
                        <input type="hidden" name="user_id" value={{Auth::user()->email}}>

                        <div class="col-sm-12">
                            <div class="btn-showcase">
                                <button type="submit" class="btn btn-primary" type="submit">Update</button>
                                <a class="btn btn-primary" href="{{route('kegiatan.index')}}">Kembali</a>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

@push('ckeditor-scripts')
<script src="{{url('cuba/assets/js/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{url('cuba/assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{url('cuba/assets/js/dropzone/dropzone.js')}}"></script>
<script src="{{url('cuba/assets/js/dropzone/dropzone-script.js')}}"></script>
<script src="{{url('cuba/assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{url('cuba/assets/js/select2/select2-custom.js')}}"></script>
<script src="{{url('cuba/assets/js/email-app.js')}}"></script>
<script src="{{url('cuba/assets/js/form-validation-custom.js')}}"></script>
<script src="{{url('cuba/assets/js/tooltip-init.js')}}"></script>
@endpush

@endsection