@extends('layouts.backend.master')

@section('title', $berita->judul . ' — Catatanmu di Collegetivity')
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
                <div class="col-6">
                    <h3>{{$berita->judul}}</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"> <i data-feather="home"></i></a>
                        </li>
                        <li class="breadcrumb-item">Catatan Pelajaran</li>
                        <li class="breadcrumb-item active">{{$berita->judul}}</li>
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
                        <img class="img-fluid" src="{{url('storage/images/' . $berita->thumbnail)}}">
                        <div class="blog-details">
                            <ul class="blog-social">
                                <li>{{$berita->tanggal}}</li>
                                <li><i class="icofont icofont-user"></i>{{$berita->author}}</li>
                                <li><i class="icofont icofont-list"></i>{{$berita->berita}}</li>
                            </ul>
                            <h1 class="mt-3">
                                {{$berita->judul}}
                            </h1>
                            <div class="single-blog-content-top">
                                <div class="mt-3">{!!htmlspecialchars_decode($berita->content)!!}</div>
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

@endsection