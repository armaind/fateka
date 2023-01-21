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
<div>
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('berita.index')}}">Berita</a>
                        </li>
                        <li class="breadcrumb-item active">{{$item->kategori}}</li>
                        <li class="breadcrumb-item active">{{$item->judul}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- main news start-->
    <div class="container-fluid my-3 p-t-30 p-r-50 p-b-30 p-l-50">
        <div class="row p-b-50">
            <div class="col-sm-12">
                <div class="blog-single">
                    <div class="blog-box blog-details">
                        <div style="box-shadow:rgba(0, 0, 0, 0.05) 0px 0px 4px 0px, rgba(0, 0, 0, 0.1) 0px 4px 24px 0px;">
                            <div style="background-image: url('{{ asset('images/' . $item->thumbnail) }}'); background-size:cover; height:450px"></div>
                        </div>
                        <div class="blog-details p-0">
                            <ul class="blog-social">
                                <li>{{$item->tanggal}}</li>
                                <li>{{$item->kategori}}</li>
                                <li><i class="icofont icofont-user"></i>{{$item->author}}</li>
                                <li ><a href="{{route('berita.edit', $item->id)}}">Edit Berita</a></li>
                            </ul>
                            <h1 class="mt-3">
                                {{$item->judul}}
                            </h1>
                            <div class="single-blog-content-top">
                                <div class="mt-3">{!!htmlspecialchars_decode($item->isi_berita)!!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment">
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
    <!-- main content end-->
</div>
<!-- file wrapper for better tabs start-->

@endsection