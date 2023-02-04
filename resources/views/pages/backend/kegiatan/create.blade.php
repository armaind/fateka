@extends('layouts.backend.master')

@section('title', 'Tambah Kegiatan — Fateka')
@section('content')

@push('create-article-styles')
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/dropzone.css')}}">
@endpush

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-absolute">
                    <div class="card-header bg-primary" style="border-radius: 16px">
                        <h5 class="text-white">
                            Tambah Kegiatan
                        </h5>
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
                                        <label class="font-weight-bold" for="judul">Judul Kegiatan<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="judul" name="judul" value="{{old('judul')}}"
                                                type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <label class="font-weight-bold" for="kategori">Kategori<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="kategori" name="kategori"
                                                value="{{old('kategori')}}" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <label class="font-weight-bold" for="penyelenggara">Penyelenggara<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="penyelenggara" name="penyelenggara"
                                                value="{{old('penyelenggara')}}" type="text" required>
                                        </div>
                                    </div>
                                    <div class="email-wrapper">
                                        <div class="theme-form">
                                            <div class="form-group">
                                                <label class="font-weight-bold">Deskripsi<span class="text-danger">*</span></label>
                                                <textarea id="text-box" name="content" cols="10" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label class="font-weight-bold" for="kuota">Kuota<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="kuota" name="kuota"
                                                value="{{old('kuota')}}" type="number" required>
                                        </div>
                                    </div> 
                                    <div class="form-group col-md-4 ">
                                        <label class="font-weight-bold" for="lokasi">Lokasi<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="lokasi" name="lokasi"
                                                value="{{old('lokasi')}}" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label class="font-weight-bold" for="tanggal">Tanggal<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="tanggal" name="tanggal"
                                                value="{{old('tanggal')}}" type="datetime-local" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 ">
                                        <label class="font-weight-bold" for="batas">Batas Daftar<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input class="form-control" id="batas" name="batas"
                                                value="{{old('batas')}}" type="datetime-local" required>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="user_id" value={{Auth::user()->email}}>

                                <div class="form-group col-md-6">
                                    <label class="font-weight-bold" for="customFile">Thumbnail (Optional)</label>
                                    <div class="custom-file">
                                        <input type="file" class="form-input" name="thumbnail">
                                    </div>
                                    <div class="form-text small text-muted font-weight-medium">
                                        Max Height 450px.
                                    </div>
                                </div>
                            </div>

                            <div class="pt-5">
                                <button type="submit" class="btn btn-primary" style="border-radius:20px" type="submit">Tambah</button>
                            </div>
                        </form>
                    </div>
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