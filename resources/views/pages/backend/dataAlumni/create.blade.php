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
        <div class="card card-absolute mt-5 mt-md-4">
            <div class="card-header bg-primary">
                <h5 class="text-white">
                    Tambah Data Alumni
                </h5>
            </div>
            <div class="card-body">
                <p>
                    Isilah dengan lengkap dan pastikan data yang anda masukkan adalah valid
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <form method="POST" action="{{route('dataAlumni.store')}}" enctype="multipart/form-data"
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
                                <h6 style="color: #07BD02">Data Diri</h6>
                            </div>
                            <div class="form-group col-md-12 mb-2">
                                <label for="nama_alumni">Nama Alumni<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input id="nama_alumni" type="text" class="form-control" placeholder="Nama Lengkap"
                                        value="{{old('nama_alumni')}}" name="nama_alumni" required>
                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-2">
                                <label for="email">Email<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input id="email" type="email" class="form-control" placeholder="contoh@gmail.com"
                                        value="{{old('email')}}" name="email" required>
                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-2">
                                <label for="no_telp">No Telepon<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input id="no_telp" type="text" class="form-control"
                                        value="{{old('no_telp')}}" name="no_telp" required>
                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-2">
                                <label for="customFile">Foto (Optional) <span class="text-danger">*Max Height</span></label>
                                <div class="custom-file">
                                    <input type="file" class="form-input" name="foto">
                                </div>
                            </div>
                            <div class="col-md-12 mb-2 mt-4">
                                <h6 style="color: #07BD02">Alamat Lengkap</h6>
                            </div>
                            <div class="form-group col-md-6 mb-2">
                                <label for="provinsi">Provinsi<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input id="provinsi" type="text" class="form-control"
                                    value="{{old('provinsi')}}" name="provinsi" required>
                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-2">
                                <label for="kota">Kabupaten / Kota<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input id="kota" type="text" class="form-control"
                                    value="{{old('kota')}}" name="kota" required>   
                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-2">
                                <label for="kecamatan">Kecamatan<span class="text-danger">*</span></label>
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
                                <label for="domisili">Domisili<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input id="domisili" type="text" class="form-control" placeholder="Kota"
                                    value="{{old('domisili')}}" name="domisili" required>  
                                </div>
                            </div>

                            <div class="col-md-12 mb-2 mt-4">
                                <h6 style="color: #07BD02">Data Akademik</h6>
                            </div>
                            <div class="form-group col-md-6 mb-2">
                                <label for="angkatan">Angkatan<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <select class="form-control" id="angkatan" name="angkatan">
                                        <option value="" disabled selected>Pilih Tahun</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2022</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        

                        <div class="form-row">
                            <div class="col-md-12 mb-2 mt-4">
                                <h6 style="color: #07BD02">Data Karir</h6>
                            </div>
                            <div class="form-group col-md-6 mb-2">
                                <label for="status_pekerjaan">Status Pekerjaan<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <select class="form-control" id="status_pekerjaan" name="status_pekerjaan">
                                        <option value="" disabled selected>Pilih</option>
                                        <option value="Bekerja">Bekerja</option>
                                        <option value="Belum Bekerja">Belum Bekerja</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-2">
                                <label for="posisi">Posisi Pekerjaan</label>
                                <div class="input-group mb-3">
                                    <input id="posisi" type="text" value="{{old('posisi')}}" placeholder="Ex: Software Engineer"
                                    class="form-control" name="posisi">
                                </div>
                                <label for="posisi"><span class="text-danger">*Jika belum bekerja isi dengan (-)</span></label>
                            </div>
                            <div class="form-group col-md-6 mb-2">
                                <label for="perusahaan">Perusahaan/Instansi</label>
                                <div class="input-group mb-3">
                                    <input id="perusahaan" type="text" value="{{old('perusahaan')}}" placeholder="Ex: Google"
                                    class="form-control" name="perusahaan">
                                </div>
                                <label for="perusahaan"> <span class="text-danger">*Jika belum bekerja isi dengan (-)</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary m-r-15" type="submit">Tambah</button>
                        <button class="btn btn-danger" type="reset">Reset</button>
                    </div>
                </form>
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