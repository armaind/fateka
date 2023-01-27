@extends('layouts.backend.master')

    
@section('title', $item->nama_alumni . ' — Fateka')
@section('content')

<style>
    .blog-box .blog-details .blog-social li+li {
        padding-left: 12px;
    }

    .blog-box .blog-details .blog-social li:first-child {
        padding-right: 12px;
    }
</style>


<!-- file wrapper for better tabs start-->
<div class="container-fluid my-3 p-t-50 p-r-50 p-b-30 p-l-50">
    <div class="row p-b-50">
        <div class="col-sm-12">
            <div class="blog-single">
                <!-- main header start-->
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dataAlumni.index')}}">Data Alumni</a>
                            </li>
                            <li class="breadcrumb-item active">Detail Alumni</li>
                            <li class="breadcrumb-item active">{{$item->nama_alumni}}</li>
                        </ol>
                    </div>
                </div>
                <!-- main header end-->

                <!-- main content start-->
                <div class="blog-box blog-details">
                    <div class="card mb-5 mt-3">
                        <div class="row g-0 m-0">
                            <div class="col-md-4 m-auto">
                                <img src="{{asset('images/' . $item->foto)}}" class="img-fluid mx-auto d-block" alt="..." width="150px">
                            </div>
                            <div class="col-md-6 m-0 bg-dark"  style="border-radius:15px;">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">{{ $item->nama_alumni }}</h4>
                                    <h5 class="card-text">{{ $item->angkatan }}</h5>
                                    
                                    <p class="card-text"><strong>{{ $item->provinsi }}, {{ $item->kota }}</strong></p>
                                    <a href="#"><div class="btn btn-primary" style="border-radius: 20px">Hubungkan</div></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-box blog-details">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h5>Detail Profil</h5>
                        </div>
                        <div class="card-body">
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Nama Lengkap</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{{ $item->nama_alumni }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Email</label>
                                <div class="col-lg-8">
                                    <span class="badge badge-primary mb-2">{{ $item->email }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">No Telepon</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{{ $item->no_telp }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Provinsi</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{{ $item->provinsi }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Kota/Kabupaten</label>
                                <div class="col-lg-8">
                                    <span class="badge badge-warning">{{ $item->kota }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Kecamatan</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">Rp.{{ $item->kecamatan }},-</span>
                                </div>
                            </div>
                            <div class="row mb-10">
                                <label class="col-lg-4 fw-bold text-muted">Desa/jalan</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{{$item->desa_atau_jalan}}</span>
                                </div>
                            </div>
                            <div class="row mb-10">
                                <label class="col-lg-4 fw-bold text-muted">Domisili</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{{$item->domisili}}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Angkatan</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{{ $item->angkatan }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Status Pekerjaan</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{{ $item->status_pekerjaan }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Posisi Kerja</label>
                                <div class="col-lg-8">
                                    <span class="badge badge-warning">{{ $item->posisi }} orang</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Perusahaan</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{{ $item->perusahaan }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="card">
                    </div> 
                    <div class="row mt-5 justify-content-center">
                        <div class="col-sm-">
                            <a class="btn btn-outline-primary" href="{{route('dataAlumni.index')}}" style="border-radius: 20px">Kembali</a>
                        </div>
                        <div class="col-sm-8">
                            <a class="btn btn-outline-warning" href="{{route('dataAlumni.edit', $item->id)}}" style="border-radius: 20px">Edit Lowongan</a>
                        </div>
                        <div class="col-sm-2 flex-right">
                            <form action="{{route('dataAlumni.destroy', $item->id)}}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger" type="submit" style="border-radius: 20px">Hapus</button>
                            </form>
                        </div>
                    </div>     
                </div>  
                <!-- main content end-->
            </div>
        </div>
    </div>
</div>
<!-- file wrapper for better tabs start-->

@endsection