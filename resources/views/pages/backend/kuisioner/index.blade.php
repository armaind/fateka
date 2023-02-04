@extends('layouts.backend.master')

@section('title', 'Kuisioner — Fateka')
@section('content')

<div class="container-fluid">
    <div class="page-title">
        <div class="card card-absolute mt-5 mt-md-4">
            <div class="d-block w-100" style="background-image: url('../images/splide/kerja.png'); border-radius:15px; height:150px; background-size:cover">
                <div class="card-body">
                    <h4 class="text-center text-white">
                        {{-- <strong>Turn On</strong> The Future --}}
                    </h4>
                </div>
            </div>
            <div class="card-header bg-primary" style="border-radius: 16px">
                <h5 class="text-white">Kuisioner</h5>
            </div>
        </div>
    </div>
    <div class="card card-body">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScgpNCGu-U1G-V3ZwhIGIaWOCO3rNZFdQZeCkkgAkCSThhOEw/viewform?embedded=true" width="100%" height="753" frameborder="0" marginheight="0" marginwidth="0"></iframe>
    </div>
</div>

@endsection