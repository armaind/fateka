@extends('layouts.backend.master')

@section('title', 'Tambah Lowongan Kerja — Fateka')
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
                    <h5 class="text-white">Tambah Lowongan Kerja</h5>
                </div>
                <div class="card-body">
                    <p>
                        Di bawah ini adalah halaman untuk tambah lowongan kerja
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
                        <h5>Tulis Catatan</h5>
                    </div>
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
                        <form class="row needs-validation" method="POST" action="{{route('lowonganKerja.store')}}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="posisi">Posisi Pekerjaan <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="posisi" name="posisi" value="{{old('posisi')}}"
                                                type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 ">
                                        <label for="perusahaan">Perusahaan/Instansi <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="perusahaan" name="perusahaan"
                                                value="{{old('perusahaan')}}" type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 ">
                                        <label for="alamat">Alamat <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="alamat" name="alamat"
                                                value="{{old('alamat')}}" type="text" required>
                                        </div>
                                    </div>
                                </div>
                                    
                                </div>

                                <input type="hidden" name="user_id" value={{Auth::user()->email}}>

                                <div class="form-group">
                                    <label for="customFile">Thumbnail: (Optional)</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="thumbnail" id="customFile">
                                        <label class="custom-file-label" for="customFile">Pilih file thumbnail</label>
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
                                            <label>Deskripsi Kerja <span class="text-danger">*</span></label>
                                            <textarea id="text-box" name="content" cols="10" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-sm-12 m-b-15">
                                <div class="btn-showcase float-right">
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
@endpush

@endsection