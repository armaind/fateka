@extends('layouts.backend.master')

@section('title', 'Kegiatan — Fateka')
@section('content')

<div class="container-fluid">
    <div class="page-title p-2">
        <div class="card card-absolute mt-md-4">
            <div class="d-block w-100" style="background-image: url('../images/splide/profil.png'); border-radius:15px; height:250px; background-size:cover">
                <div class="card-body" style="height: 100%">
                    <div class="row">
                        <div class="col-md-3">
                            <img class="rounded-circle img-fluid" src="https://source.boringavatars.com/beam/120/{{Auth::user()->name}}?square&colors=FAD089,FF9C5B,F5634A,ED303C,3B8183" alt="" style="height: 150px; width:150px">
                        </div>
                        <div class="col-md-9">
                            <h1 class="text-white">Andi Mohamad Ilyas</h1>
                            <div class="profile-headline-info d-flex mt-2 text-white flex-wrap">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="pr-2">Angkatan</div>
                                    <div class="pr-2">Alamat</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection