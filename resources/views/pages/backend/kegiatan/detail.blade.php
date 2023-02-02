@extends('layouts.backend.master')

@section('title', $item->judul . ' — Fateka')
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
<div class="container-fluid my-3 p-t-50 p-r-50 p-b-10 p-l-50">
    <div class="row">
        <div class="col-sm-12">
            <div class="blog-single">
                <!-- main header start-->
                <div class="row">
                    <div class="col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('kegiatan.index')}}">Kegiatan</a>
                            </li>
                            <li class="breadcrumb-item active">{{$item->judul}}</li>
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
                                    <h4 class="card-title mb-4">{{ $item->judul }}</h4>
                                    <h5 class="card-text">{{ $item->penyelenggara }} </h5>
                                    <p class="card-text"><strong>Lokasi: {{ $item->lokasi }}</strong></p>
                                    <p class="card-text"><small class="text-muted">Berlaku sampai: <span class="badge badge-warning mb-2">{{ $item->batas }}</span></small></p>
                                    <a href="#"><div class="btn btn-primary" style="border-radius: 20px">Daftar Kegiatan</div></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-box blog-details">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h5>Detail Kegiatan</h5>
                        </div>
                        <div class="card-body">
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Nama Kegiatan</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">: {{ $item->judul }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Penyelenggara</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">: {{ $item->penyelenggara }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Lokasi Kegiatan</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">: {{ $item->lokasi }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Tanggal Kegiatan</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">: {{ $item->tanggal }}</span>
                                </div>
                            </div>
                            <div class="row m-b-10">
                                <label class="col-lg-4 fw-bold text-muted">Peserta Kegiatan</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">: {{ $item->kuota }}</span>
                                </div>
                            </div>
                            
                            <div class="row mb-10">
                                <label class="col-lg-4 fw-bold text-muted">Deskripsi Kegiatan</label>
                                <div class="col-lg-8">
                                    <span class="fw-bolder fs-6 text-gray-800">{!!htmlspecialchars_decode ($item->content)!!}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-5 ml-1 content-center">
                        <div class="col-sm-2 mb-3">
                            <a class="btn btn-outline-primary" href="{{route('kegiatan.index')}}" style="border-radius: 20px">Kembali</a>
                        </div>
                        @can('update kegiatan')
                        <div class="col-sm-8  mb-3">
                            <a class="btn btn-outline-warning" href="{{route('kegiatan.edit', $item->id)}}" style="border-radius: 20px">Edit Kegiatan</a>
                        </div>
                            
                        @endcan
                        @can('delete kegiatan')
                        <div class="col-sm-2 flex-right">
                            <form action="{{route('kegiatan.destroy', $item->id)}}" method="POST"
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
<div class="comment my-3 p-t-50 p-r-50 p-b-10 p-l-50">
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