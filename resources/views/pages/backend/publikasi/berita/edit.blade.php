@extends('layouts.backend.master')

@section('title', 'Edit Berita — Fateks')
@section('content')

@push('create-article-styles')
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/select2.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('cuba/assets/css/vendors/dropzone.css')}}">
@endpush

<div class="container-fluid">
    <div class="page-title">
        <div class="card card-absolute mt-5 mt-md-4">
            <div class="card-header bg-primary">
                <h5 class="text-white">Edit Berita</h5>
            </div>
            <div class="card-body">
                <p>
                    Dibawah ini adalah form untuk edit berita berjudul "{{$item->judul}}"
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                    <div class="card-body add-post">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                <li>
                                    <h4>Error</h4>
                                </li>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="needs-validation" method="POST" action="{{route('berita.update', $item->id)}}"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="judul">Judul Berita <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input class="form-control" id="judul" name="judul" value="{{$item->judul}}"
                                            type="text" required="">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="headline">Headline <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input class="form-control" id="headline" name="headline" value="{{$item->headline}}"
                                            type="text" required="">
                                    </div>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="kategori">Kategori <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input class="form-control" id="kategori" name="kategori" value="{{$item->kategori}}"
                                            type="text" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="hidden" name="author" value="{{Auth::user()->name}}">
                                <input class="form-control" type="hidden" name="tanggal"
                                    value="{{{now()->toDateString()}}}">
                            </div>
                            <div class="email-wrapper">
                                <div class="theme-form">
                                    <div class="form-group">
                                        <label>Isi Berita <span class="text-danger">*</span></label>
                                        <textarea id="text-box" name="isi_berita" cols="10" rows="2">
                                                {!!htmlspecialchars_decode($item->isi_berita)!!}
                                            </textarea>
                                    </div>
                                </div>
                            </div>

                        <input type="hidden" name="user_id" value={{Auth::user()->email}}>

                        <div class="col-sm-12">
                            <div class="btn-showcase">
                                <button type="submit" class="btn btn-light" type="submit">Update</button>
                                <a class="btn btn-primary" href="{{route('berita.index')}}">Kembali</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('ckeditor-scripts')
<script src="{{url('cuba/assets/js/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{url('cuba/assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{url('cuba/assets/js/dropzone/dropzone.js')}}"></script>
<script src="{{url('cuba/assets/js/dropzone/dropzone-script.js')}}"></script>
<script src="{{url('cuba/assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{url('cuba/assets/js/select2/select2-custom.js')}}"></script>
<script src="{{url('cuba/assets/js/email-app.js')}}"></script>
<script src="{{url('cuba/assets/js/form-validation-custom.js')}}"></script>
<script src="{{url('cuba/assets/js/tooltip-init.js')}}"></script>
@endpush

@endsection
