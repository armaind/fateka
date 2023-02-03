@extends('layouts.backend.master')

@section('title', 'Profil — Fateka')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card mt-4" style="background-image: url('../images/splide/profil.png'); border-radius:15px; height:280px; background-size:cover">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="user-profile col-lg-3 col-md-4 col-sm-4 text-lg-center">
                            <div class="user-profile-picture position-relative">
                                <div class="user-profile-picture-inner rounded-circle">
                                    <img class="rounded-circle img-fluid" src="https://source.boringavatars.com/beam/120/{{Auth::user()->name}}?square&colors=FAD089,FF9C5B,F5634A,ED303C,3B8183" alt="" style="height: 150px; width:150px">
                                </div>
                            </div>
                        </div>
                        <div class="profile-headline col-md-8 col-sm-8 col-lg-9 mt-4 mt-md-0">
                            <h2 class="text-white mb-2">Andi Mohamad Ilyas</h2>
                            <div class="profile-headline-info d-flex mt-2 text-white flex-wrap">
                                <div class="d-flex flex-row">
                                    <i data-feather="users" class="pr-1"></i> 
                                    <div class="pr-2">Angkatan</div>
                                    <i data-feather="map-pin" class="pr-1"></i> 
                                    <div class="pr-2"><span></span> Alamat</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                    <li class="nav-item d-flex flex-row">
                        <button class="nav-link active d-flex" id="nav-profil-tab" data-toggle="tab" data-target="#nav-profil" type="button" role="tab" aria-controls="nav-profil" aria-selected="true"><span class="pr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                          </svg></span>Profil</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link d-flex" id="nav-akun-tab" data-toggle="tab" data-target="#nav-akun" type="button" role="tab" aria-controls="nav-akun" aria-selected="true"><span class="pr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
                          </svg></span> Akun</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link d-flex" id="nav-data-tab" data-toggle="tab" data-target="#nav-data" type="button" role="tab" aria-controls="nav-data" aria-selected="true"><span class="pr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                          </svg></span>Data Pribadi</button>
                    </li>
                </ul>
                <div class="card-body">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-profil" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="user-settings__wrapper">
                                <div class="col-md-12 mb-3 mt-4 p-0">
                                    <h5 style="color: #07BD02">Profil</h5>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-8 mb-2">
                                        <label class="font-weight-bold" for="nama_alumni">Nama Lengkap<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input id="nama_alumni" type="text" class="form-control" placeholder="Nama Lengkap"
                                                value="{{old('nama_alumni')}}" name="nama_alumni" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8 mb-2">
                                        <label for="email" class="font-weight-bold">Email</label>
                                        <div class="input-group mb-3">
                                            <input id="email" type="email" class="form-control" readonly
                                                value="" name="email" required>
                                        </div>
                                        <div class="small form-text text-muted">Anda dapat mengubah alamat email melalui menu Akun.</div>
                                    </div>
                                    <div class="form-group col-md-8 mb-2">
                                        <label for="customFile" class="font-weight-bold">Foto Profil<span class="text-danger">*</span></label>
                                        <div class="custom-file">
                                            <input type="file" class="form-input" name="foto">
                                        </div>
                                        <div class="small form-text text-muted">
                                            Gambar Profile Anda sebaiknya memiliki rasio 1:1
                                            dan berukuran tidak lebih dari 2MB.
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-5">
                                    <button type="submit" class="btn btn-primary" style="border-radius:25px" type="submit">Simpan perubahan</button>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-akun" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="user-settings__wrapper">
                                <div class="col-md-12 mb-3 mt-4 p-0">
                                    <h5 style="color: #07BD02">Ubah Email</h5>
                                </div>
                                <form method="POST" action="" accept-charset="UTF-8" role="form" autocomplete="off" id="settings-email-form"><input name="_token" type="hidden" value="">
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="form-group col-md-8 mb-2">
                                                <label for="" class="font-weight-bold">Email Baru<span class="text-danger">*</span></label>
                                                <div class="input-group mb-3">
                                                    <input id="" type="text" class="form-control" placeholder="contoh@gmail.com"
                                                        value="" name="" required>
                                                </div>
                                                <div class="form-text small text-muted font-weight-medium">Email akan berubah ketika Anda sudah menekan
                                                    link verifikasi yang dikirimkan ke email baru Anda.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <button type="submit" class="btn btn-primary" style="border-radius:25px" type="submit">Ubah Email</button>
                                    </div>
                                </form>
                            </div>

                            <div class="user-settings__wrapper">
                                <div class="col-md-12 mb-3 mt-5 p-0">
                                    <h5 style="color: #07BD02">Ubah Password</h5>
                                </div>
                                <div class="alert alert-warning font-weight-medium small">
                                    Isi jika Anda ingin mengubah password.
                                </div>
                                <form method="POST" action="" accept-charset="UTF-8" role="form" autocomplete="off" id=""><input name="_token" type="hidden" value="">
                                    <input name="_method" type="hidden" value="PUT">
                                    <input name="_token" type="hidden" value="">
                                    <div class="form-group">
                                        <div class="form-row">
                                            <div class="form-group col-md-8 mb-2">
                                                <label for="" class="font-weight-bold">Password Baru<span class="text-danger">*</span></label>
                                                <div class="input-group mb-3">
                                                    <input id="" type="password" class="form-control" placeholder="Masukkan password baru" autocomplete="off" value="" name="" required minlength="8">
                                                </div>
                                                <div class="form-text small text-muted font-weight-medium">
                                                    Gunakan minimal 8 karakter dengan kombinasi huruf danangka.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-8 mb-2">
                                                <label for="" class="font-weight-bold">Konfirmasi Password Baru<span class="text-danger">*</span></label>
                                                <div class="input-group mb-3">
                                                    <input id="" type="password" class="form-control" placeholder="Konfirmasi password" autocomplete="off" value="" name="" required minlength="8">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <button type="submit" class="btn btn-primary" style="border-radius:25px" type="submit">Simpan Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="nav-data" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="user-settings__wrapper">
                                <div class="col-md-12 mb-3 mt-4 p-0">
                                    <h5 style="color: #07BD02">Data Pribadi</h5>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-8 mb-2">
                                        <label class="font-weight-bold" for="nama_alumni">Nama Lengkap<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input id="nama_alumni" type="text" class="form-control" placeholder="Nama Lengkap"
                                                value="{{old('nama_alumni')}}" name="nama_alumni" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8 mb-2">
                                        <label class="font-weight-bold" for="no_telp">No Telepon<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input id="no_telp" type="number" class="form-control"
                                                value="{{old('no_telp')}}" name="no_telp" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8 mb-2">
                                        <label class="font-weight-bold" for="tempat">Tempat Lahir<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input id="tempat" type="text" class="form-control"
                                            value="{{old('tempat')}}" name="tempat" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label class="control-label font-weight-bold" for="">Tanggal Lahir</label>
                                            <div role="wrapper" class="gj-datepicker gj-datepicker-bootstrap gj-unselectable input-group"><input name="" type="text" class="js-date-widget form-control" id="" value="" data-date-format="dd-mm-yyyy" autocomplete="off" data-type="datepicker" data-guid="" data-datepicker="true" role="input" day="">
                                            </div>
                                        </div>
                            
                                        <div class="form-group col-md-8">
                                            <label class="control-label font-weight-bold">Jenis Kelamin</label>
                                            <div class="mb-2">
                                                <input type="radio" class="dcd-custom-radio" id="gender-male" name="gender" value="1" checked="">
                                                <label for="gender-male">Laki-laki</label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="dcd-custom-radio" id="gender-female" name="gender" value="2">
                                                <label for="gender-female">Perempuan</label>
                                            </div>
                                            <div class="mb-2">
                                                <input type="radio" class="dcd-custom-radio" id="gender-nomention" name="gender" value="0">
                                                <label for="gender-nomention">Memilih untuk tidak menyebutkan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8 mb-2">
                                        <label class="font-weight-bold" for="provinsi">Provinsi<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input id="provinsi" type="text" class="form-control"
                                            value="{{old('provinsi')}}" name="provinsi" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8 mb-2">
                                        <label class="font-weight-bold" for="kota">Kabupaten / Kota<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input id="kota" type="text" class="form-control"
                                            value="{{old('kota')}}" name="kota" required>   
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8 mb-2">
                                        <label class="font-weight-bold" for="kecamatan">Kecamatan<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input id="kecamatan" type="text" class="form-control"
                                            value="{{old('kecamatan')}}" name="kecamatan" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8 mb-2">
                                        <label class="font-weight-bold" for="desa_atau_jalan">Desa / Jalan <span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input id="desa_atau_jalan" type="text" class="form-control"
                                                value="{{old('desa_atau_jalan')}}" name="desa_atau_jalan" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8 mb-2">
                                        <label class="font-weight-bold" for="domisili">Kota Domisili<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input id="domisili" type="text" class="form-control" placeholder="Kota"
                                            value="{{old('domisili')}}" name="domisili" required>  
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8 mb-2">
                                        <label class="font-weight-bold" for="angkatan">Angkatan<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <input id="angkatan" type="number" class="form-control" placeholder="2018"
                                                value="{{old('angkatan')}}" name="angkatan" required>
                                        </div>
                                    </div>
                                    <div class="col-md-8 mb-2 alert alert-warning font-weight-medium small">
                                        Khusus Alumni
                                    </div>
                                    <div class="form-group col-md-8 mb-2">
                                        <label class="font-weight-bold" for="status_pekerjaan">Status Pekerjaan<span class="text-danger">*</span></label>
                                        <div class="input-group mb-3">
                                            <select class="form-control" id="status_pekerjaan" name="status_pekerjaan">
                                                <option value="" disabled selected>Pilih</option>
                                                <option value="Bekerja">Bekerja</option>
                                                <option value="Belum Bekerja">Belum Bekerja</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8 mb-2">
                                        <label class="font-weight-bold" for="posisi">Posisi Pekerjaan</label>
                                        <div class="input-group mb-3">
                                            <input id="posisi" type="text" value="{{old('posisi')}}" placeholder="Software Engineer"
                                            class="form-control" name="posisi">
                                        </div>
                                        <div class="form-text small text-muted font-weight-medium">
                                            Jika belum bekerja isi dengan (-).
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8 mb-2">
                                        <label class="font-weight-bold" for="perusahaan">Perusahaan/Instansi</label>
                                        <div class="input-group mb-3">
                                            <input id="perusahaan" type="text" value="{{old('perusahaan')}}" placeholder="Telkom Indonesia"
                                            class="form-control" name="perusahaan">
                                        </div>
                                        <div class="form-text small text-muted font-weight-medium">
                                            Jika belum bekerja isi dengan (-).
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-5">
                                    <button type="submit" class="btn btn-primary" style="border-radius:25px" type="submit">Simpan perubahan</button>
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