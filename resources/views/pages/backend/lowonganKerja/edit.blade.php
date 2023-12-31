@extends('layouts.backend.master')

@section('title', 'Edit Lowongan Kerja — Fateka')
@section('content')

@push('create-article-styles')
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/dropzone.css')}}">
@endpush

<div class="container-fluid">
    <div class="page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-absolute">
                        <div class="card-header bg-primary" style="border-radius: 16px">
                            <h5 class="text-white">
                                Edit Lowongan Kerja
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
                            <form class="row needs-validation" method="POST" action="{{route('lowonganKerja.update', $item->id)}}"
                                enctype="multipart/form-data" novalidate="">
                                @method('PUT')
                                @csrf
                                <div class="col-sm-12">
                                    <div class="form-row">
                                        <div class="col-md-12 mb-2 mt-2">
                                            <h6 style="color: #07BD02">Data Pekerjaan</h6>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="font-weight-bold" for="nama">Nama Pekerjaan<span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <input class="form-control" id="nama" name="nama" value="{{$item->nama}}"
                                                    type="text" required="">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label class="font-weight-bold" for="posisi">Posisi Kerja<span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <input class="form-control" id="posisi" name="posisi" value="{{$item->posisi}}"
                                                    type="text" required="">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="font-weight-bold" for="tipe_pekerjaan">Tipe Pekerjaan</label>
                                            <div class="input-group mb-3">
                                                <select class="form-control" name="tipe_pekerjaan" id="tipe_pekerjaan">
                                                    <option value="{{ $item->tipe_pekerjaan }}" selected>{{ $item->tipe_pekerjaan }}</option>
                                                    <option value="Full Time">Full Time</option>
                                                    <option value="Part Time">Part Time</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="font-weight-bold" for="tingkat_pekerjaan">Tingkat Pekerjaan</label>
                                            <div class="input-group mb-3">
                                                <select class="form-control" name="tingkat_pekerjaan" id="tingkat_pekerjaan">
                                                    <option value="{{ $item->tingkat_pekerjaan }}" selected>{{ $item->tingkat_pekerjaan }}</option>
                                                    <option value="Pemula">Pemula</option>
                                                    <option value="Menengah">Menengah</option>
                                                    <option value="Profesional">Profesional</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label class="font-weight-bold" for="gaji">Gaji</label>
                                            <div class="input-group mb-3">
                                                <input class="form-control" id="gaji" name="gaji" value="{{$item->gaji}}"
                                                    type="text">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label class="font-weight-bold" for="berlaku">Berlaku Sampai</label>
                                            <div class="input-group mb-3">
                                                <input class="form-control" id="berlaku" name="berlaku" value="{{$item->berlaku}}" 
                                                    type="text">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="font-weight-bold" for="customFile">Thumbnail (Optional)</label>
                                            <div class="custom-file">
                                                <input class="form-input" type= "file" id="thumbnail" name="thumbnail" value="{{$item->thumbnail}}">
                                            </div>
                                            <div class="form-text small text-muted font-weight-medium">
                                                Max Height 450px.
                                            </div>
                                        </div>
                                        <div class="email-wrapper">
                                            <div class="theme-form">
                                                <div class="form-group">
                                                    <label class="font-weight-bold">Deskripsi Kerja<span class="text-danger">*</span></label>
                                                    <textarea id="text-box" name="deskripsi" cols="10" rows="2">
                                                        {!!htmlspecialchars_decode($item->deskripsi)!!}
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <input type="hidden" name="user_id" value="{{Auth::user()->name}}">
                                        
                                        <div class="form-group">
                                            <input class="form-control" type="hidden" name="user_id" value={{Auth::user()->email}}>
                                            <input class="form-control" type="hidden" name="author"
                                            value="{{{now()->toDateString()}}}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-2 mt-2">
                                            <h6 style="color: #07BD02">Data Perusahaan</h6>
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label class="font-weight-bold" for="perusahaan">Nama Perusahaan</label><span class="text-danger">*</span>
                                            <div class="input-group mb-3">
                                                <input class="form-control" id="perusahaan" name="perusahaan" value="{{$item->berlaku}}" 
                                                    type="text" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label class="font-weight-bold" for="kota">Kota</label><span class="text-danger">*</span>
                                            <div class="input-group mb-3">
                                                <input class="form-control" id="kota" name="kota" value="{{$item->berlaku}}" 
                                                    type="text" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label class="font-weight-bold" for="negara">Negara</label><span class="text-danger">*</span>
                                            <div class="input-group mb-3">
                                                <input class="form-control" id="negara" name="negara" value="{{$item->berlaku}}"
                                                    type="text" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label class="font-weight-bold" for="jumlah">Jumlah Kebutuhan</label>
                                            <div class="input-group mb-3">
                                                <input class="form-control" id="jumlah" name="jumlah" value="{{$item->berlaku}}" 
                                                    type="number">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label class="font-weight-bold" for="no_telp">No Telepon</label>
                                            <div class="input-group mb-3">
                                                <input class="form-control" id="no_telp" name="no_telp" value="{{$item->berlaku}}" 
                                                    type="number">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label class="font-weight-bold" for="email">Email Perusahaan</label>
                                            <div class="input-group mb-3">
                                                <input class="form-control" id="email" name="email" value="{{$item->berlaku}}" 
                                                    type="email" required>
                                            </div>
                                        </div>
                                    </div>                           
                                    <div class="pt-5">
                                        <button type="submit" class="btn btn-primary" style="border-radius:20px" type="submit">Simpan Perubahan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
@endpush

@endsection