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
                                @can('update kegiatan')
                                <a class="btn btn-outline-warning" href="{{route('kegiatan.edit', $item->id)}}" style="border-radius: 20px">Edit kegiatan</a>
                                    
                                @endcan
                                @can('delete kegiatan')
                                <form class="pull-right" action="{{route('kegiatan.destroy', $item->id)}}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger" type="submit" style="border-radius: 20px">Hapus</button>
                                </form>
                                    
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