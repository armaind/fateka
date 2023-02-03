@extends('layouts.backend.master')

@section('title', 'Data Alumni — Fateka')
@section('content')

@push('timepicker-styles')
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/timepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/scrollable.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/datatable-extension.css')}}">
@endpush

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-absolute">
                    <div class="card-header bg-primary" style="border-radius: 16px">
                        <h5 class="text-white">
                            Tambah Data Alumni
                        </h5>
                    </div>
                    <form method="POST" action="{{route('dataalumni.store')}}" enctype="multipart/form-data"
                        class="needs-validation">
                        @csrf
                        <div class="card-body">
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
                            <div class="form-row">
                                <div class="col-md-12 mb-2 mt-2">
                                    <h5 style="color: #07BD02">Data Diri</h5>
                                </div>
                                <div class="form-group col-md-12 mb-2">
                                    <label class="font-weight-bold" for="nama_alumni">Nama Alumni<span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input id="nama_alumni" type="text" class="form-control" placeholder="Nama Lengkap"
                                            value="{{old('nama_alumni')}}" name="nama_alumni" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label class="font-weight-bold" for="email">Email<span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input id="email" type="email" class="form-control" placeholder="contoh@gmail.com"
                                            value="{{old('email')}}" name="email" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label class="font-weight-bold" for="no_telp">No Telepon<span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input id="no_telp" type="number" class="form-control"
                                            value="{{old('no_telp')}}" name="no_telp" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label class="font-weight-bold" for="customFile">Foto</label>
                                    <div class="custom-file">
                                        <input type="file" class="form-input" name="foto">
                                    </div>
                                    <div class="small form-text text-muted">
                                        Gambar Profile Anda sebaiknya memiliki rasio 1:1, berukuran tidak lebih dari 2MB dan berlatar putih.
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2 mt-4">
                                    <h5 style="color: #07BD02">Alamat Lengkap</h5>
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label class="font-weight-bold" for="provinsi">Provinsi<span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input id="provinsi" type="text" class="form-control"
                                        value="{{old('provinsi')}}" name="provinsi" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label class="font-weight-bold" for="kota">Kabupaten / Kota<span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input id="kota" type="text" class="form-control"
                                        value="{{old('kota')}}" name="kota" required>   
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label class="font-weight-bold" for="kecamatan">Kecamatan<span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input id="kecamatan" type="text" class="form-control"
                                        value="{{old('kecamatan')}}" name="kecamatan" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label for="desa_atau_jalan">Desa / Jalan <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input id="desa_atau_jalan" type="text" class="form-control"
                                            value="{{old('desa_atau_jalan')}}" name="desa_atau_jalan" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label class="font-weight-bold" for="domisili">Kota Domisili<span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input id="domisili" type="text" class="form-control" placeholder="Kota"
                                        value="{{old('domisili')}}" name="domisili" required>  
                                    </div>
                                </div>
    
                                <div class="col-md-12 mb-2 mt-4">
                                    <h5 style="color: #07BD02">Data Akademik</h5>
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label class="font-weight-bold" for="angkatan">Angkatan<span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input id="angkatan" type="number" class="form-control" placeholder="2018"
                                            value="{{old('angkatan')}}" name="angkatan" required>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-row">
                                <div class="col-md-12 mb-2 mt-4">
                                    <h5 style="color: #07BD02">Data Karir</h5>
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label class="font-weight-bold" for="status_pekerjaan">Status Pekerjaan<span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <select class="form-control" id="status_pekerjaan" name="status_pekerjaan">
                                            <option value="" disabled selected>Pilih</option>
                                            <option value="Bekerja">Bekerja</option>
                                            <option value="Belum Bekerja">Belum Bekerja</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label class="font-weight-bold" for="posisi">Posisi Pekerjaan</label>
                                    <div class="input-group mb-3">
                                        <input id="posisi" type="text" value="{{old('posisi')}}" placeholder="Software Engineer"
                                        class="form-control" name="posisi">
                                    </div>
                                    <div class="form-text small text-muted font-weight-medium">
                                        Jika belum bekerja isi dengan (-).
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-2">
                                    <label class="font-weight-bold" for="perusahaan">Perusahaan/Instansi</label>
                                    <div class="input-group mb-3">
                                        <input id="perusahaan" type="text" value="{{old('perusahaan')}}" placeholder="Telkom Indonesia"
                                        class="form-control" name="perusahaan">
                                    </div>
                                    <div class="form-text small text-muted font-weight-medium">
                                        Jika belum bekerja isi dengan (-).
                                    </div>
                                </div>
                            </div>
                            <div class="pt-5">
                                <button type="submit" class="btn btn-primary" style="border-radius:25px" type="submit">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>     
    </div>
</div>


@push('timepicker-scripts')
<script src="{{url('cuba/assets/js/time-picker/jquery-clockpicker.min.js')}}"></script>
<script src="{{url('cuba/assets/js/time-picker/highlight.min.js')}}"></script>
<script src="{{url('cuba/assets/js/time-picker/clockpicker.js')}}"></script>
@endpush

@endsection