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
                                <input class="form-control" type="text" name="name" placeholder="Nama Lengkap"
                                    required autofocus>
                            </div>

                            <label class="col-form-label">Alamat email</label>
                            <div class="input-group mb-3">
                                <input class="form-control" type="email" name="email" placeholder="contoh@gmail.com"
                                    required>
                            </div>

                            <label class="col-form-label">Password</label>
                            <div class="input-group mb-3">
                                <input class="form-control" type="password" name="password" required
                                    placeholder="*********">
                            </div>

                            <label class="col-form-label">Konfirmasi Password</label>
                            <div class="input-group mb-3">
                                <input class="form-control" type="password" name="password_confirmation" required
                                    placeholder="*********">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-block mt-4" type="submit">Buat Akun</button>
                            </div>
                            <div class="form-group mb-0">
                                <div>
                                    <p class="mt-2 mb-0 text-center">atau</p>
                                </div>
                            </div>
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