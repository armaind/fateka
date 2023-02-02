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
    <div class="container-fluid my-3 p-t-50 p-r-50 p-b-30 p-l-50">
        <div class="row">
            <div class="col-sm-12">
                <div class="blog-single">
                    <div class="row">
                        <div class="col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{route('berita.index')}}">Berita</a>
                                </li>
                                <li class="breadcrumb-item active">{{$item->kategori}}</li>
                                <li class="breadcrumb-item active">{{$item->headline}}</li>
                            </ol>
                        </div>
                    </div>
                    <div class="blog-box blog-details">
                        <div style="box-shadow:rgba(0, 0, 0, 0.05) 0px 0px 4px 0px, rgba(0, 0, 0, 0.1) 0px 4px 24px 0px;">
                            <div style="background-image: url('{{ asset('images/' . $item->thumbnail) }}'); background-size:cover; height:450px; border-radius:15px"></div>
                        </div>
                        <p class="comment pull-right p-2">{{$item->headline}}</p>
                        <div class="blog-details p-0">
                            <ul class="blog-social">
                                <li>{{$item->tanggal}}</li>
                                <li>{{$item->kategori}}</li>
                                <li><i class="icofont icofont-user"></i>{{$item->author}}</li>
                            </ul>
                            <h1 class="mt-3 mb-3">
                                {{$item->headline}}: {{ $item->judul }}
                            </h1>
                            <div style="background-color:#07BD02; height:0.1em">.</div>
                            <div class="single-blog-content-top">
                                <div class="mt-4 mb-4">{!!htmlspecialchars_decode($item->isi_berita)!!}</div>
                                <p>Pewarta: {{ $item->author }}</p>
                                <div class="mt-2"><strong>Tags:</strong>
                                    <p>#{{ $item->headline }}</p>
                                </div>
                            </div>
                            <div class="mt-5">
                                <a class="btn btn-outline-primary" href="{{route('berita.index')}}" style="border-radius: 20px">Kembali</a>
                                @can('update berita')
                                <a class="btn btn-outline-warning" href="{{route('berita.edit', $item->id)}}" style="border-radius: 20px">Edit Berita</a>
                                
                                @endcan
                                @can('delete berita')
                                <form class="pull-right" action="{{route('berita.destroy', $item->id)}}" method="POST"
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
            </div>
        </div> 
    </div>
    <div class="comment my-3 p-t-50 p-r-50 p-b-30 p-l-50">
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