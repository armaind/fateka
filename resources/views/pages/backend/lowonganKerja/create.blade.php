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
                        <form class="row needs-validation" method="POST" action="{{route('lowonganKerja.store')}}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-sm-12">
                                <div class="form-row">
                                    <div class="col-md-12 mb-2 mt-2">
                                        <h6 style="color: #07BD02">Data Pekerjaan</h6>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="nama">Nama Pekerjaan<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="nama" name="nama" value="{{old('nama')}}" placeholder="Ex: Systems Engineer | AI-HPC " 
                                                type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="posisi">Posisi Kerja<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="posisi" name="posisi" value="{{old('posisi')}}" placeholder="Ex: Staff" 
                                                type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tipe_pekerjaan">Tipe Pekerjaan</label>
                                        <div class="input-group mb-3">
                                            <select class="form-control" id="tipe_pekerjaan" name="tipe_pekerjaan">
                                                <option value="" disabled selected>Pilih</option>
                                                <option value="Full Time">Full Time</option>
                                                <option value="Part Time">Part Time</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tingkat_pekerjaan">Tingkat Pekerjaan</label>
                                        <div class="input-group mb-3">
                                            <select class="form-control" id="tingkat_pekerjaan" name="tingkat_pekerjaan">
                                                <option value="" disabled selected>Pilih</option>
                                                <option value="Pemula">Pemula</option>
                                                <option value="Menengah">Menengah</option>
                                                <option value="Profesional">Profesional</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="gaji">Gaji</label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="gaji" name="gaji" value="{{old('gaji')}}" placeholder="Ex: Rp.12.000.000,-" 
                                                type="number">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="berlaku">Berlaku Sampai</label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="berlaku" name="berlaku" value="{{old('berlaku')}}"
                                                type="datetime-local">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="customFile">Thumbnail (Optional) <span class="text-danger">*Max Height</span></label>
                                        <div class="custom-file">
                                            <input type="file" class="form-input" name="thumbnail">
                                        </div>
                                    </div>
                                </div>
                                <div class="email-wrapper">
                                    <div class="theme-form">
                                        <div class="form-group">
                                            <label>Deskripsi Kerja<span class="text-danger">*</span></label>
                                            <textarea id="text-box" name="deskripsi" cols="10" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" name="user_id" value={{Auth::user()->email}}>

                                <div class="form-group">
                                    <input class="form-control" type="hidden" name="author"
                                        value="{{Auth::user()->name}}">
                                    <input class="form-control" type="hidden" name="tanggal"
                                        value="{{{now()->toDateString()}}}">
                                </div>

                                <div class="form-row">
                                    <div class="col-md-12 mb-2 mt-2">
                                        <h6 style="color: #07BD02">Data Perusahaan</h6>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="perusahaan">Nama Perusahaan<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="perusahaan" name="perusahaan" value="{{old('perusahaan')}}" placeholder="Ex: PT Presentelogics" 
                                                type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="kota">Kota<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="kota" name="kota" value="{{old('kota')}}" placeholder="Ex: Jakarta" 
                                                type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="negara">Negara<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="negara" name="negara" value="{{old('negara')}}" placeholder="Ex: Indonesia" 
                                                type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="jumlah">Jumlah Kebutuhan</label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="jumlah" name="jumlah" value="{{old('jumlah')}}" placeholder="Ex: 20" 
                                                type="number">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="no_telp">No Telepon</label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="no_telp" name="no_telp" value="{{old('no_telp')}}" 
                                                type="number">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email Perusahaan<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="example@gmail.com" 
                                                type="email" required>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                            <div class="col-sm-12">
                                <div class="btn-showcase">
                                    <button class="btn btn-primary" type="submit">Tambah</button>
                                    <a class="btn btn-light" href="{{route('lowonganKerja.index')}}">Kembali</a>
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