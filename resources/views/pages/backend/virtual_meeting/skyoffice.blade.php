@extends('layouts.backend.master')

@section('title', 'Skyoffice — Fateka')
@section('content')


<div class="container-fluid">
    <div class="page-title">
        <div class="card card-absolute mt-5 mt-md-4">
            <div class="d-block w-100" style="background-image: url('/images/splide/virtual meet.png'); border-radius:15px; height:150px; background-size:cover">
                <div class="card-body">
                    <h4 class="text-center text-white">
                        {{-- <strong>Turn On</strong> The Future --}}
                    </h4>
                </div>
            </div>
            <div class="card-header bg-primary" style="border-radius: 16px">
                <h5 class="text-white">Virtual Meet</h5>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-5">
            <iframe class="rounded-lg" src="https://skyoffice.netlify.app/" style="width: 100%; height: 800px; overflow: hidden; 
                border: none; box-shadow:rgba(8, 21, 66, 0.05) 0px 0px 20px 0px;">
            </iframe>
        </div>
    </div>
</div>

@endsection