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

    <!-- main news start-->
    <div class="container-fluid my-3 p-t-50 p-r-50 p-l-50">
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
                            </div>
                            <div class="row col-md-12 p-0 mt-5">
                                <div class="card col-md-9">
                                    <div class="card-body">
                                        <div class="mt-4 mb-4">
                                            <p>{!!htmlspecialchars_decode($item->content)!!}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pl-3">
                                    <h4 class="font-weight-bold card-header mt-0 text-center" style="border-radius: 20px">Detail Kegiatan</h4>
                                    <div class="card-body">
                                        <div class="d-flex flex-row mb-3">
                                            <i data-feather="clock" class="pr-2 text-secondary"></i>
                                            <p class="card-text text-muted m-0"><strong>Batas daftar</strong><br>{{ $item->batas }}</p>
                                        </div>
                                        <div class="d-flex flex-row mb-3">
                                            <i data-feather="user-check" class="pr-2 text-secondary"></i>
                                            <p class="card-text text-muted m-0"><strong>Kuota</strong><br>{{ $item->kuota }}</p>
                                        </div>
                                        <div class="d-flex flex-row mb-3">
                                            <i data-feather="calendar" class="pr-2 text-secondary"></i>
                                            <p class="card-text text-muted m-0"><strong>Jadwal Pelaksanaan</strong><br>{{ $item->tanggal }}</p>
                                        </div>
                                        <div class="d-flex flex-row mb-3">
                                            <i data-feather="map-pin" class="pr-2 text-secondary"></i>
                                            <p class="card-text text-muted m-0"><strong>Lokasi</strong><br>{{ $item->lokasi }}</p>
                                        </div>
                                        <div class="text-center">
                                            <a href="#"><div style="border-radius: 20px" class="btn btn-primary mt-3 font-weight-bold pl-5 pr-5">Daftar</div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-5">
                                <div class="d-flex flex-grow-1 align-items-center">
                                    <a href="{{route('kegiatan.index')}}" style="border-radius: 20px" class="btn btn-primary mr-2" aria-haspopup="true" aria-expanded="false">Kembali</a>
                                    @can('update kegiatan')
                                    <a href="{{route('kegiatan.edit', $item->id)}}" style="border-radius: 20px" class="btn btn-warning" aria-haspopup="true" aria-expanded="false">Edit</a>
                                    @endcan
                                </div> 
                                @can('delete kegiatan')
                                <div class="p-2">
                                    <form class="pull-right" action="{{route('kegiatan.destroy', $item->id)}}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger" type="submit" style="border-radius: 20px">Hapus</button>
                                    </form>
                                </div>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
                 
                <!-- main content end-->
            </div>
        </div> 
    </div>
    <div class="comment my-3 p-r-50 p-b-30 p-l-50">
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
    <!-- main content end-->

<!-- file wrapper for better tabs start-->

@endsection