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
                            <h4 class="user-settings__title">Profil</h4>
                            <div class="form-row">
                                <div class="form-group col-md-8 mb-2">
                                    <label for="nama_alumni">Nama Lengkap<span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input id="nama_alumni" type="text" class="form-control" placeholder="Nama Lengkap"
                                            value="{{old('nama_alumni')}}" name="nama_alumni" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-8 mb-2">
                                    <label for="email">Email</label>
                                    <div class="input-group mb-3">
                                        <input id="email" type="email" class="form-control" readonly
                                            value="" name="email" required>
                                    </div>
                                    <div class="small form-text text-muted">Anda dapat mengubah alamat email melalui menu Akun.</div>
                                </div>
                                <div class="form-group col-md-8 mb-2">
                                    <label for="customFile">Foto (Optional) <span class="text-danger">*Max Height</span></label>
                                    <div class="custom-file">
                                        <input type="file" class="form-input" name="foto">
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

                            <h4 class="user-settings__title">Ubah Email</h4>
                                        <form method="POST" action="https://www.dicoding.com/settings/email/644710" accept-charset="UTF-8" role="form" autocomplete="off" id="settings-email-form"><input name="_token" type="hidden" value="tZuKbw0pDYtMvG150m1DIHwt9GiXMpI0VmV7YTRm">
                                <div class="form-group">
                                    <label class="control-label" for="new-email">Email Baru</label>
                                    <input id="new-email" class="col-md-6 form-control font-weight-medium" placeholder="email@domain.com" autocomplete="off" required="" name="new_email" type="email" value="">
                    
                                    <div class="form-text small text-muted font-weight-medium">Email akan berubah ketika Anda sudah menekan
                                        link verifikasi yang dikirimkan ke email baru Anda.
                                    </div>
                                </div>
                    
                                <div class="form-group">
                                    <button type="submit" class="dcd-btn dcd-btn-primary px-3 font-weight-bold">
                                        Ubah Email
                                    </button>
                                </div>
                    
                                </form>
                                </div>
                                <div class="card user-settings__wrapper mt-5">

                                    <form method="POST" action="https://www.dicoding.com/settings/password/644710" accept-charset="UTF-8" role="form" autocomplete="off" id="settings-password-form" data-controller="passwordUpdate" data-enable-button-after-submit="" novalidate=""><input name="_method" type="hidden" value="PUT"><input name="_token" type="hidden" value="tZuKbw0pDYtMvG150m1DIHwt9GiXMpI0VmV7YTRm">
                            
                                    <h4 class="user-settings__title">Ubah Password</h4>
                            
                                    <div class="alert alert-warning font-weight-medium small">
                                        Isi jika Anda ingin mengubah password.
                                    </div>
                            
                                    <div class="form-group">
                                        <label class="control-label font-weight-bold" for="new-password">Password Baru <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input id="new-password" class="col-md-6 form-control font-weight-medium" placeholder="Masukkan password baru" autocomplete="off" required="" minlength="8" data-parsley-required-message="Password tidak boleh kosong" data-parsley-minlength-message="Password minimal terdiri dari 8 karakter" data-target="passwordUpdate.newPassword" name="new_password" type="password" value="">
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary js-password-visibility-toggle" type="button">
                                                    <i class="far fa-eye js-btn-password-toggle__icon"></i>
                                                </button>
                                            </div>
                                        </div>
                            
                                        <small class="form-text text-muted font-weight-medium">Gunakan minimal 8 karakter dengan kombinasi huruf dan
                                            angka.</small>
                                    <div class="pass-wrapper" style="display: none;"><div class="pass-graybar"><div class="pass-colorbar"></div></div><span class="pass-text">Masukkan password</span></div></div>
                            
                                    <div class="form-group">
                                        <label class="control-label" for="new-password-confirmation">Konfirmasi Password Baru <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input id="new-password-confirmation" class="col-md-6 form-control font-weight-medium" placeholder="Konfirmasi password" autocomplete="off" required="" data-parsley-required-message="Konfirmasi password tidak boleh kosong" data-parsley-equalto="#new-password" data-parsley-equalto-message="Password harus sama dengan yang di atas" name="new_password_confirmation" type="password" value="">
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary js-password-visibility-toggle" type="button">
                                                    <i class="far fa-eye js-btn-password-toggle__icon"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="mt-5">
                                        <button type="submit" class="dcd-btn dcd-btn-primary px-3 font-weight-bold">
                                            Simpan Password
                                        </button>
                                    </div>
                            
                                    </form>
                                </div>
                      </div>
                      <div class="tab-pane fade" id="nav-data" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class="user-settings__wrapper">

                            <form method="POST" action="https://www.dicoding.com/settings/personal/644710" accept-charset="UTF-8" role="form" id="settings-personal-data-form" data-controller="userPersonalData"><input name="_method" type="hidden" value="PUT"><input name="_token" type="hidden" value="tZuKbw0pDYtMvG150m1DIHwt9GiXMpI0VmV7YTRm">
                    
                            <h4 class="user-settings__title">Data Pribadi</h4>
                    
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <label class="control-label" for="phone">No. Telepon</label>
                    
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">🇮🇩 +62</span>
                                        </div>
                                        <input name="phone" type="tel" class="form-control" id="phone" value="85352575367">
                                    </div>
                    
                                    <div>
                                        <input type="checkbox" class="dcd-custom-checkbox" id="optin-phone" name="optin_phone" value="1" checked="">
                                        <label for="optin-phone">Saya tertarik untuk mendapatkan informasi
                                            melalui no. telepon ini.</label>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <label class="control-label" for="city-selectized">Kota Domisili <span class="text-danger">*</span></label>
                                    <div class="custom-control custom-switch mb-2">
                                        <input type="checkbox" class="custom-control-input" id="custom-city-switch" data-target="userPersonalData.customCitySwitch" data-action="userPersonalData#switchCityField">
                                        <label class="custom-control-label" for="custom-city-switch">Saya tinggal di luar negeri</label>
                                    </div>
                                    <div class="p-0">
                                        <div data-target="userPersonalData.citySelect" class="">
                                            <select name="city_id" class="js-cities selectized" id="city" tabindex="-1" style="display: none;"><option value="580" selected="selected">Kabupaten Tasikmalaya</option></select><div class="selectize-control js-cities single"><div class="selectize-input items full has-options has-items"><div data-value="580">
                                            <strong>Kabupaten Tasikmalaya</strong> 
                                        </div><input type="text" autocomplete="off" tabindex="" id="city-selectized" style="width: 4px;"></div><div class="selectize-dropdown single js-cities" style="display: none; width: 573px; top: 36px; left: 0px;"><div class="selectize-dropdown-content"></div></div></div>
                                        </div>
                                        <input name="custom_city" type="text" class="form-control d-none" id="custom-city" value="" data-target="userPersonalData.customCityInput">
                                    </div>
                    
                                    <div class="mt-2 text-muted small font-weight-medium">Isi dengan kota/kabupaten tempat Anda tinggal saat
                                        ini.
                                    </div>
                                </div>
                            </div>
                    
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <label class="control-label" for="birthplace-selectized">Tempat Lahir</label>
                                    <div class="custom-control custom-switch mb-2">
                                        <input type="checkbox" class="custom-control-input" id="custom-birthplace-switch" data-target="userPersonalData.customBirthplaceSwitch" data-action="userPersonalData#switchBirthplaceField">
                                        <label class="custom-control-label" for="custom-birthplace-switch">Saya lahir di luar negeri</label>
                                    </div>
                                    <div class="p-0">
                                        <div data-target="userPersonalData.birthplaceSelect" class="">
                                            <select name="birthplace_id" class="js-cities selectized" id="birthplace" tabindex="-1" style="display: none;"><option value="580" selected="selected">Kabupaten Tasikmalaya</option></select><div class="selectize-control js-cities single"><div class="selectize-input items full has-options has-items"><div data-value="580">
                                            <strong>Kabupaten Tasikmalaya</strong> 
                                        </div><input type="text" autocomplete="off" tabindex="" id="birthplace-selectized" style="width: 4px;"></div><div class="selectize-dropdown single js-cities" style="display: none; width: 573px; top: 36px; left: 0px;"><div class="selectize-dropdown-content"></div></div></div>
                                        </div>
                                        <input name="custom_birthplace" type="text" class="form-control d-none" id="custom-birthplace" value="" data-target="userPersonalData.customBirthplaceInput">
                                    </div>
                    
                                    <div class="mt-2 text-muted small font-weight-medium">Isi dengan kota/kabupaten tempat Anda lahir.</div>
                                </div>
                            </div>
                    
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label class="control-label" for="birthday">Tanggal Lahir</label>
                                    <div role="wrapper" class="gj-datepicker gj-datepicker-bootstrap gj-unselectable input-group"><input name="birthday" type="text" class="js-date-widget form-control" id="birthday" value="28-09-2000" data-date-format="dd-mm-yyyy" autocomplete="off" data-type="datepicker" data-guid="276a0df3-c447-6f6b-2c9f-270a8c49b37d" data-datepicker="true" role="input" day="2000-8-28"><span class="input-group-append" role="right-icon"><button class="btn btn-outline-secondary border-left-0" type="button"><i class="gj-icon">event</i></button></span></div>
                                </div>
                    
                                <div class="form-group col-md-5">
                                    <label class="control-label">Jenis Kelamin</label>
                    
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
                    
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <label for="latest-education-selectized" class="control-label">Pendidikan Terakhir</label>
                                    <select name="latest_education" id="latest-education" class="js-select selectized" tabindex="-1" style="display: none;"><option value="5" selected="selected">SMA</option></select><div class="selectize-control js-select single"><div class="selectize-input items full has-options has-items"><div class="item" data-value="5">SMA</div><input type="text" autocomplete="off" tabindex="" id="latest-education-selectized" style="width: 4px;"></div><div class="selectize-dropdown single js-select" style="display: none;"><div class="selectize-dropdown-content"></div></div></div>
                                </div>
                            </div>
                    
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <label for="occupation-selectized" class="control-label">Pekerjaan/profesi Saat Ini</label>
                                    <div class="p-0">
                                        <select name="occupation_id" id="occupation" class="js-occupations selectized" tabindex="-1" style="display: none;"><option value="3" selected="selected">Pelajar/Mahasiswa</option></select><div class="selectize-control js-occupations single"><div class="selectize-input items full has-options has-items"><div class="item" data-value="3">Pelajar/Mahasiswa</div><input type="text" autocomplete="off" tabindex="" id="occupation-selectized" style="width: 4px;"></div><div class="selectize-dropdown single js-occupations" style="display: none; width: 573px; top: 36px; left: 0px;"><div class="selectize-dropdown-content"></div></div></div>
                                    </div>
                    
                                    <div class="mt-2 text-muted small font-weight-medium">Pilih mahasiswa atau pelajar jika Anda masih
                                        menempuh pendidikan.
                                    </div>
                                </div>
                            </div>
                    
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <label class="control-label" for="company">Perusahaan/institusi Saat Ini</label>
                                    <input name="company" type="text" class="form-control" id="company" value="Universitas Telkom">
                    
                                    <div class="mt-2 text-muted small font-weight-medium">Anda bisa menuliskan nama perusahaan atau
                                        kampus.
                                    </div>
                                </div>
                            </div>
                    
                            <div class="mt-5">
                                <button type="submit" class="dcd-btn dcd-btn-primary px-3">
                                    Simpan Perubahan
                                </button>
                            </div>
                    
                            </form>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection