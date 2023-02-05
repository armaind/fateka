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
    <title>Masuk Aplikasi - Fateka</title>
    @include('includes.backend.style')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7">
                <img class="bg-img-cover bg-center" src="{{url('landio/assets/img/IMG_0661.PNG')}}"
                    alt="looginpage">
            </div>
            <div class="col-xl-5 p-0" style="background-image: url();">
                <div class="login-card">
                    <div class="login-main col-10 col-md-10">
                        <form class="theme-form" method="POST" action="{{route('login')}}">
                            @csrf
                            <img src="\landio\assets\img\logo-title.png" alt="logo" width="100">
                            <p>
                            <h4>Masuk menggunakan akun anda</h4>
                            <p class="mb-2">Masukkan email & password anda untuk login</p>

                            @if ($errors->any())
                            <div class="alert alert-danger py-1 mb-1">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <label class="col-form-label">Alamat Email</label>
                            <div class="input-group mb-3">
                                <input class="form-control" type="email" name="email" placeholder="contoh@gmail.com"
                                    autofocus required>
                            </div>

                            <label class="col-form-label">Password</label>
                            <div class="input-group mb-3">
                                <input class="form-control" type="password" name="password" required
                                    placeholder="*********">
                            </div>

                            <div class="form-group mb-0">
                                <div class="input mb-2">
                                    <a href="{{ url('/forgot-password') }}">Lupa Password</a>
                                </div>
                                <button class="btn btn-primary btn-block" type="submit">Masuk sekarang</button>
                            </div>
                            <div class="form-group mb-0">
                                <div>
                                    <p class="mt-2 mb-0 text-center">atau</p>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="checkbox mt-2">
                                    <a href="{{ route('google.login') }}" class="btn btn-primary btn-block">Masuk dengan Google</a>
                                </div>
                            </div>
                            <p class="mt-4 mb-0">Belum punya akun?<a class="ml-2" href="{{url('/register')}}">Regsitrasi Sekarang!</a></p>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        @include('includes.backend.script')
    </div>
</body>

</html>