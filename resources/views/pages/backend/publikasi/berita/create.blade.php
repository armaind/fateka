@extends('layouts.backend.master')

@section('title', 'Tambah Berita — Fateka')
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
                    <h5 class="text-white">Tambah Berita</h5>
                </div>
                <div class="card-body">
                    <p>
                        Di bawah ini adalah halaman untuk tambah berita
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
                    <div class="card-body add-post">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                <li>
                                    <h4>Ada error nih 😓</h4>
                                </li>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="row needs-validation" method="POST" action="{{route('berita.store')}}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="judul">Judul Berita <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="judul" name="judul" value="{{old('judul')}}"
                                                type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <label for="kategori">Kategori <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="kategori" name="kategori"
                                                value="{{old('kategori')}}" type="text" required="">
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="user_id" value={{Auth::user()->email}}>

                                <div class="form-group">
                                    <label for="customFile">Thumbnail (Optional)</label>
                                    <div class="custom-file">
                                        <input type="file" class="form-input" name="thumbnail">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="hidden" name="author"
                                        value="{{Auth::user()->name}}">
                                    <input class="form-control" type="hidden" name="tanggal"
                                        value="{{{now()->toDateString()}}}">
                                </div>
                                <div class="email-wrapper">
                                    <div class="theme-form">
                                        <div class="form-group">
                                            <label>Isi Berita <span class="text-danger">*</span></label>
                                            <textarea id="text-box" name="isi_berita" cols="10" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-sm-12">
                                <div class="btn-showcase">
                                    <button class="btn btn-primary" type="submit">Tambah</button>
                                    <input class="btn btn-danger" type="reset" value="Reset">
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
@endpush

@endsection