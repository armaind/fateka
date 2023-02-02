@extends('layouts.backend.master')

@section('title', 'Tambah Kegiatan — Fateka')
@section('content')

@push('create-article-styles')
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/dropzone.css')}}">
@endpush

<!-- file wrapper for better tabs start-->
<div>   
    <!-- pages title header start-->
    <div class="container-fluid">
        <div class="page-title">
            <div class="card card-absolute mt-5 mt-md-4">
                <div class="card-header bg-primary">
                    <h5 class="text-white">Tambah Kegiatan</h5>
                </div>
                <div class="card-body">
                    <p>
                        Isilah dengan lengkap dan pastikan data yang anda masukkan adalah valid
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- pages title header end-->
    <!-- main content start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Tulis Kegiatan</h5>
                    </div>
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
                        <form class="row needs-validation" method="POST" action="{{route('kegiatan.store')}}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="judul">Judul Kegiatan <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="judul" name="judul" value="{{old('judul')}}"
                                                type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <label for="kategori">Kategori <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="kategori" name="kategori"
                                                value="{{old('kategori')}}" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <label for="penyelenggara">Penyelenggara <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="penyelenggara" name="penyelenggara"
                                                value="{{old('penyelenggara')}}" type="text" required>
                                        </div>
                                    </div>
                                    <div class="email-wrapper">
                                        <div class="theme-form">
                                            <div class="form-group">
                                                <label>Deskripsi <span class="text-danger">*</span></label>
                                                <textarea id="text-box" name="content" cols="10" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label for="kuota">Kuota <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="kuota" name="kuota"
                                                value="{{old('kuota')}}" type="number" required>
                                        </div>
                                    </div> 
                                    <div class="form-group col-md-4 ">
                                        <label for="lokasi">Lokasi <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="lokasi" name="lokasi"
                                                value="{{old('lokasi')}}" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label for="tanggal">Tanggal <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="tanggal" name="tanggal"
                                                value="{{old('tanggal')}}" type="datetime-local" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label for="batas">Batas Daftar <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input class="form-control" id="batas" name="batas"
                                                value="{{old('batas')}}" type="datetime-local" required>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="user_id" value={{Auth::user()->email}}>

                                <div class="form-group col-md-6">
                                    <label for="customFile">Thumbnail (Optional) <span class="text-danger">*Max Height</span></label>
                                    <div class="custom-file">
                                        <input type="file" class="form-input" name="thumbnail">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="btn-showcase">
                                    <button class="btn btn-primary" type="submit">Tambah</button>
                                    <input class="btn btn-light" type="reset" value="Reset">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main content end-->
</div>
<!-- file wrapper for better tabs start-->

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
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    config = {
        enableTime: true,
        dateFormat: 'Y-m-d H:i',
    }
    flatpickr("input[type=datetime-local]", config);
</script>
@endpush
@endsection