@extends('layouts.backend.master')

    
@section('title', $item->nama . ' — Fateka')
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
    <div class="row">
        <div class="col-sm-12">
            <div class="blog-single">
                <!-- main header start-->
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('lowonganKerja.index')}}">Lowongan Kerja</a>
                            </li>
                            <li class="breadcrumb-item active">{{$item->perusahaan}}</li>
                            <li class="breadcrumb-item active">{{$item->nama}}</li>
                        </ol>
                    </div>
                </div>
                <!-- main header end-->

                <!-- main content start-->
                <div class="blog-box blog-details">
                    <div class="card mb-5 mt-3">
                        <div class="row g-0 m-0">
                            <div class="col-md-4 m-auto">
                                <img src="{{asset('images/' . $item->thumbnail)}}" class="img-fluid mx-auto d-block" alt="..." width="150px">
                            </div>
                            <div class="col-md-6 m-0 bg-dark"  style="border-radius:15px;">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">{{ $item->nama }}</h4>
                                    <h5 class="card-text">{{ $item->perusahaan }} <span style="color: #07BD02"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                        <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                                    </svg></span></h5>
                                    <div class="d-flex flex-row mt-3">
                                        <i data-feather="map-pin" class="pr-2"></i>
                                        <p class="card-text"><strong>{{ $item->kota }}, {{ $item->negara }}</strong></p>
                                    </div>
                                    <a href="#"><div class="btn btn-primary mt-3" style="border-radius: 20px">Lamar</div></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-box blog-details">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h5>Detail Pekerjaan</h5>
                        </div>
                        <div class="card-body">
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Nama</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{{ $item->nama }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Posisi</label>
                                <div class="col-lg-8">
                                    <span class="badge badge-primary mb-2">{{ $item->posisi }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Tipe Pekerjaan</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{{ $item->tipe_pekerjaan }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Level</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{{ $item->tingkat_pekerjaan }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Berlaku Sampai</label>
                                <div class="col-lg-8">
                                    <span class="badge badge-warning">{{ $item->berlaku }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Gaji</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">Rp.{{ $item->gaji }},-</span>
                                </div>
                            </div>
                            <div class="row mb-10">
                                <label class="col-lg-4 fw-bold text-muted">Deskripsi Pekerjaan</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{!!htmlspecialchars_decode ($item->deskripsi)!!}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h5>Detail Perusahaan</h5>
                        </div>
                        <div class="card-body">
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Nama Perusahaan</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{{ $item->perusahaan }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Kota</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{{ $item->kota }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Negara</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{{ $item->negara }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Jumlah Kebutuhan</label>
                                <div class="col-lg-8">
                                    <span class="badge badge-warning">{{ $item->jumlah }} orang</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">No Telepon</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{{ $item->no_telp }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Email</label>
                                <div class="col-lg-8">
                                    <a class="badge badge-primary" href="https://mail.google.com/"><span class="fw-bolder fs-6 text-gray-800">{{ $item->email }}</span></a>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="row mt-5">
                        <div class="col-sm-2 mb-3">
                            <a class="btn btn-outline-primary" href="{{route('lowonganKerja.index')}}" style="border-radius: 20px">Kembali</a>
                        </div>
                        @can('update lowongan kerja')
                        <div class="col-sm-8  mb-3">
                            <a class="btn btn-outline-warning" href="{{route('lowonganKerja.edit', $item->id)}}" style="border-radius: 20px">Edit Lowongan</a>
                        </div>
                            
                        @endcan
                        @can('delete lowongan kerja')
                        <div class="col-sm-2 flex-right">
                            <form action="{{route('lowonganKerja.destroy', $item->id)}}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger" type="submit" style="border-radius: 20px">Hapus</button>
                            </form>
                        </div>
                            
                        @endcan
                    </div>     
                </div>  
                <!-- main content end-->
            </div>
        </div>
    </div>
</div>
<!-- file wrapper for better tabs start-->

<!-- main comment start-->
<div class="comment my-3 p-r-50 p-b-30 p-l-50">
    <div class="card-body">
        <div id="disqus_thread"></div>
        <script>
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://fateka.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" target="_blank">comments powered by Disqus.</a></noscript>
    </div>
</div>
<!-- main comment end-->

@endsection