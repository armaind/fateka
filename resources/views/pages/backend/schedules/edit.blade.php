@extends('layouts.backend.master')

@section('title', 'Edit Jadwal Pelajaran — Collegetivity')
@section('content')

@push('timepicker-styles')
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/timepicker.css')}}">
@endpush

<div class="container-fluid">
    <div class="page-title">
        <div class="card card-absolute mt-5 mt-md-4">
            <div class="card-header bg-primary">
                <h5 class="text-white">
                    📅📚 • Edit Jadwal Pelajaran <span class="d-none d-md-inline"> — {{$item->nama_alumni}}</span>
                </h5>
            </div>
            <div class="card-body">
                <p>
                    Dibawah ini adalah form untuk edit jadwal pelajaran mata kuliah {{$item->nama_alumni}}. <span
                        class="d-none d-md-inline">
                        Data dibawah pastikan kamu isi dengan benar dan lengkap ya, nanti datanya akan kami update
                        dan kami simpan
                        dan dapat kamu akses dimana saja dan kapan saja.
                    </span>
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Jadwal Pelajaran</h5>
                </div>
                <form method="POST" action="{{route('schedules.update', $item->id)}}" enctype="multipart/form-data"
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
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-book" width="20" height="20"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                                <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                                <line x1="3" y1="6" x2="3" y2="19"></line>
                                                <line x1="12" y1="6" x2="12" y2="19"></line>
                                                <line x1="21" y1="6" x2="21" y2="19"></line>
                                            </svg>
                                        </span>
                                    </div>
                                    <input id="nama_alumni" type="text" class="form-control"
                                        value="{{$item->nama_alumni}}" name="nama_alumni" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4 mb-2">
                                <label for="angkatan">Angkatan <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" for="angkatan">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-calendar" width="20" height="20"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                                <line x1="16" y1="3" x2="16" y2="7"></line>
                                                <line x1="8" y1="3" x2="8" y2="7"></line>
                                                <line x1="4" y1="11" x2="20" y2="11"></line>
                                                <line x1="11" y1="15" x2="12" y2="15"></line>
                                                <line x1="12" y1="15" x2="12" y2="18"></line>
                                            </svg>
                                        </span>
                                    </div>
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

                            <div class="form-group col-md-4 mb-2">
                                <label for="no_telp">No Telepon <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-building-community" width="20"
                                                height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8">
                                                </path>
                                                <line x1="13" y1="7" x2="13" y2="7.01"></line>
                                                <line x1="17" y1="7" x2="17" y2="7.01"></line>
                                                <line x1="17" y1="11" x2="17" y2="11.01"></line>
                                                <line x1="17" y1="15" x2="17" y2="15.01"></line>
                                            </svg>
                                        </span>
                                    </div>
                                    <input required id="no_telp" type="number" value="{{$item->no_telp}}" class="form-control"
                                        name="no_telp">
                                </div>
                            </div>

                            <div class="form-group col-md-4 mb-2">
                                <label for="alamat">Alamat <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-list-numbers" width="20" height="20"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M11 6h9"></path>
                                                <path d="M11 12h9"></path>
                                                <path d="M12 18h8"></path>
                                                <path d="M4 16a2 2 0 1 1 4 0c0 .591 -.5 1 -1 1.5l-3 2.5h4"></path>
                                                <path d="M6 10v-6l-2 2"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <input required id="alamat" type="text" value="{{$item->alamat}}" class="form-control"
                                        name="alamat">
                                </div>
                            </div>
                            <div class="form-group col-md-4 mb-2">
                                <label for="status_pekerjaan">Status Pekerjaan<span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" for="status_pekerjaan">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-calendar" width="20" height="20"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                                <line x1="16" y1="3" x2="16" y2="7"></line>
                                                <line x1="8" y1="3" x2="8" y2="7"></line>
                                                <line x1="4" y1="11" x2="20" y2="11"></line>
                                                <line x1="11" y1="15" x2="12" y2="15"></line>
                                                <line x1="12" y1="15" x2="12" y2="18"></line>
                                            </svg>
                                        </span>
                                    </div>
                                    <select class="custom-select" id="status_pekerjaan" name="status_pekerjaan">
                                        <option value="" disabled selected>Pilih ...</option>
                                        <option value="Bekerja">Bekerja</option>
                                        <option value="Belum Bekerja">Belum Bekerja</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-4 mb-2">
                                <label for="perusahaan">Perusahaan <span class="text-danger">*</span></label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-list-numbers" width="20" height="20"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M11 6h9"></path>
                                                <path d="M11 12h9"></path>
                                                <path d="M12 18h8"></path>
                                                <path d="M4 16a2 2 0 1 1 4 0c0 .591 -.5 1 -1 1.5l-3 2.5h4"></path>
                                                <path d="M6 10v-6l-2 2"></path>
                                            </svg>
                                        </span>
                                    </div>
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