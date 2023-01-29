@extends('layouts.backend.master')


@section('title', $item->judul . ' | Kegiatan - Fateka')
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
                <div class="col-6"></div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"></li>
                        <li class="breadcrumb-item"><a href="{{route('kegiatan.index')}}">Kegiatan</a></li>
                        <li class="breadcrumb-item active">{{$item->judul}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- main content start-->
    <div class="container-fluid my-3">
        <div class="row">
            <div class="col-sm-12">
                <div class="blog-single">
                    <div class="blog-box blog-details">
                        <img class="img-fluid" src="{{url('https://images.unsplash.com/photo-1661956602868-6ae368943878?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60' . $item->thumbnail)}}">
                        <div class="blog-details">
                            <ul class="blog-social">
                                <li>{{$item->tanggal}}</li>
                                <li><i class="icofont icofont-user"></i>{{$item->penyelenggara}}</li>
                                <li><i class=""></i><a href="{{route('berita.edit', $item->id)}}"> Edit Kegiatan</a></li>
                            </ul>
                            <h1 class="mt-3">
                                {{$item->judul}}
                            </h1>
                            <div class="single-blog-content-top">
                                <div class="mt-3">{!!htmlspecialchars_decode($item->content)!!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main content end-->
</div>
<!-- file wrapper for better tabs start-->

<div id="disqus_thread"></div>
<script>
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://fateka.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>