@extends('layouts.backend.master')

@section('title', 'Edit Data Alumni — Fateka')
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
                    Edit Data Alumni <span class="d-none d-md-inline"> — {{$item->nama_alumni}}</span>
                </h5>
            </div>
            <div class="card-body">
                <p>
                    Dibawah ini adalah form untuk edit Data Alumni {{$item->nama_alumni}}. <span
                        class="d-none d-md-inline">
                        Pastikan data di bawah anda isi dengan benar dan lengkap ya, nanti datanya akan kami update
                    </span>
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Data Alumni</h5>
                </div>
                <form method="POST" action="{{route('dataAlumni.update', $item->id)}}" enctype="multipart/form-data"
                    class="needs-validation">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
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
                        <div class="form-row">
                            <div class="form-group col-md-6 mb-2">
                                <label for="nama_alumni">Nama Alumni <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input id="nama_alumni" type="text" class="form-control"
                                        value="{{$item->nama_alumni}}" name="nama_alumni" required>
                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-2">
                                <label for="email">Email<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input id="email" type="email" class="form-control"
                                        value="{{$item->email}}" name="email" required>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="user_id" value={{Auth::user()->email}}>


                        <div class="form-row">
                            <div class="form-group col-md-6 mb-2">
                                <label for="angkatan">Angkatan <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" id="angkatan" name="angkatan">
                                        <option value="{{$item->angkatan}}" selected>{{$item->angkatan}}</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2008</option>
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
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-6 mb-2">
                                <label for="no_telp">No Telepon <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input required id="no_telp" type="number" value="{{$item->no_telp}}" class="form-control"
                                        name="no_telp">
                                </div>
                            </div>

                            <div class="form-group col-md-6 mb-2">
                                <label for="alamat">Alamat <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input required id="alamat" type="text" value="{{$item->alamat}}" class="form-control"
                                        name="alamat">
                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-2">
                                <label for="status_pekerjaan">Status Pekerjaan<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" id="status_pekerjaan" name="status_pekerjaan">
                                        <option value="" disabled selected>Pilih</option>
                                        <option value="Bekerja">Bekerja</option>
                                        <option value="Belum Bekerja">Belum Bekerja</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-2">
                                <label for="perusahaan">Perusahaan/Instansi <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <input nullable id="perusahaan" type="text" value="{{old('perusahaan')}}" class="form-control"
                                        name="perusahaan">
                                </div>
                            </div>
                        </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary m-r-15" type="submit">Update</button>
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