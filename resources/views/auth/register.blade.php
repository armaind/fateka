<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Fateka adalah platform yang berfungsi untuk menyediakan informasi dan media interaksi untuk menjembatani civitas akademika dengan seluruh alumni Teknik Komputer, Univeritas Telkom.">
    <meta name="keywords" content="Fateka, Teknik Komputer, Universitas Telkom">
    <meta name="author" content="Fateka TEAM">
    <link rel="icon" href="{{url('landio/assets/img/logo-title.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{url('landio/assets/img/logo-title.ico')}}" type="image/x-icon">
    <title>Daftar Akun Baru - Fateka</title>
    @include('includes.backend.style')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7">
                <img class="bg-img-cover bg-center" src="{{url('landio/assets/img/IMG_0716.PNG')}}"
                    alt="looginpage">
            </div>
            <div class="col-xl-5 p-0">
                <div class="login-card">
                    <div class="login-main col-10 col-md-10">
                        <form method="POST" action={{route('register')}} class="theme-form">
                            @csrf
                            <img src="\landio\assets\img\logo-title.png" alt="logo" width="100">
                            <p>
                            <h4>Daftarkan akun anda sekarang</h4>
                            <p class="mb-2">Masukan data yang diperlukan untuk membuat akun</p>

                            @if ($errors->any())
                            <div class="alert alert-danger py-1 mb-2">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <label class="col-form-label pt-0">Nama</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-user" width="16" height="16"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                        </svg>
                                    </span>
                                </div>
                                <input class="form-control" type="text" name="name" placeholder="Nama Lengkap"
                                    required autofocus>
                            </div>

                            <label class="col-form-label">Alamat email</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-at"
                                            width="16" height="16" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="4"></circle>
                                            <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path>
                                        </svg>
                                    </span>
                                </div>
                                <input class="form-control" type="email" name="email" placeholder="contoh@gmail.com"
                                    required>
                            </div>

                            <label class="col-form-label">Password</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-lock" width="16" height="16"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <rect x="5" y="11" width="14" height="10" rx="2"></rect>
                                            <circle cx="12" cy="16" r="1"></circle>
                                            <path d="M8 11v-4a4 4 0 0 1 8 0v4"></path>
                                        </svg>
                                    </span>
                                </div>
                                <input class="form-control" type="password" name="password" required
                                    placeholder="*********">
                            </div>

                            <label class="col-form-label">Konfirmasi Password</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-lock" width="16" height="16"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <rect x="5" y="11" width="14" height="10" rx="2"></rect>
                                            <circle cx="12" cy="16" r="1"></circle>
                                            <path d="M8 11v-4a4 4 0 0 1 8 0v4"></path>
                                        </svg>
                                    </span>
                                </div>
                                <input class="form-control" type="password" name="password_confirmation" required
                                    placeholder="*********">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-block mt-4" type="submit">Buat Akun</button>
                            </div>
                            <p class="mt-1 mb-1">atau</p>
                            <div class="form-group mb-0">
                                <div class="checkbox mt-2">
                                    <a href="{{ route('google.login') }}" class="btn btn-primary btn-block">Masuk dengan google</a>
                                </div>
                            </div>

                            <p class="mt-4 mb-0">Punya akun?<a class="ml-2" href="{{('/login')}}">Masuk
                                    sekarang </a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.backend.script')
    </div>
</body>

</html>