@extends('layouts.backend.master')

<<<<<<< HEAD
=======
    
>>>>>>> a2587a2852818bb2d27c08993ef35c862877bf57
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
<<<<<<< HEAD
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
=======

    <!-- main news start-->
    <div class="container-fluid my-3 p-t-50 p-r-50 p-b-30 p-l-50">
        <div class="row p-b-50">
            <div class="col-sm-12">
                <div class="blog-single">
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
                    <div class="blog-box blog-details">
                        <div style="box-shadow:rgba(0, 0, 0, 0.05) 0px 0px 4px 0px, rgba(0, 0, 0, 0.1) 0px 4px 24px 0px;">
                            <div style="background-image: url('{{ asset('images/' . $item->thumbnail) }}'); background-size:cover; height:450px; border-radius:15px"></div>
                        </div>
                        <div class="blog-details p-0 mt-3">
                            <div class="row col-md-12 p-0">
                                <div class="col-md-9">
                                    <span class="badge badge-warning">{{$item->kategori}}</span>
                                    <h1 class="mt-3">
                                        {{ $item->judul }}
                                    </h1> 
                                    <p class="text-muted mt-0">Diselenggarakan oleh: {{ $item->penyelenggara }}</p>
                                </div>
                                <div class="col-md-3">
                                    <p class="mt-2 mb-2">Batas daftar: </p>
                                    <h6 class="m-0">{{ $item->batas }}</h6>
                                    <p class="text-muted mt-2">Kuota:</p>
                                    <h6 class="m-0">{{ $item->kuota }}</h6>
                                </div>
                            </div>
                            <div class="row col-md-12 p-0 mt-5">
                                <div class="col-md-9">
                                    <div class="mt-4 mb-4">{!!htmlspecialchars_decode($item->content)!!}</div>
                                    <div class="mt-2">
                                        <p><strong>Tags:</strong></p>
                                        <span class="badge badge-light-primary">#{{ $item->kategori }}</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <h4>Jadwal Pelaksanaan</h4>
                                    <p class="mt-2 mb-2">Tanggal: {{ $item->tanggal }}</p>
                                    <h4>Lokasi</h4>
                                    <p class="mt-2 mb-2">{{ $item->lokasi }}</p>
                                    <a href="#"><div style="border-radius: 20px" class="btn btn-primary mt-3">Daftar Sekarang</div></a>
                                </div>
                            </div>
                            <div class="blog-footer mt-5">
                                <a class="btn btn-outline-primary" href="{{route('kegiatan.index')}}" style="border-radius: 20px">Kembali</a>
                                <a class="btn btn-outline-warning" href="{{route('kegiatan.edit', $item->id)}}" style="border-radius: 20px">Edit kegiatan</a>
                                <form class="pull-right" action="{{route('kegiatan.destroy', $item->id)}}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger" type="submit" style="border-radius: 20px">Hapus</button>
                                </form>
>>>>>>> a2587a2852818bb2d27c08993ef35c862877bf57
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
    <div class="comment my-3 p-t-50 p-r-50 p-b-30 p-l-50 bg-dark">
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
<<<<<<< HEAD
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

=======
    <!-- main content end-->

<!-- file wrapper for better tabs start-->

>>>>>>> a2587a2852818bb2d27c08993ef35c862877bf57
@endsection