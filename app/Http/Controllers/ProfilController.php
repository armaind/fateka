<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profil;
use App\Models\DataAlumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('pages.backend.profil.index', ['request' => $request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
        // $this->validate($request, [
        //     'foto' => 'file|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        // $validated = $request->validate([
        //     'nama_alumni' => 'required|max:42',
        //     'email'=>'required|max:42',
        //     'no_telp' => 'required|max:24',
        //     'tempat_lahir' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'provinsi' => 'required',
        //     'kota' => 'required',
        //     'kecamatan' => 'required',
        //     'desa_atau_jalan' => 'required',
        //     'domisili' => 'required',
        //     'angkatan' => 'required|max:14',
        //     'status_pekerjaan'=>'required',
        //     'posisi'=>'required',
        //     'perusahaan'=>'nullable'
            
        // ]);

        // $dataalumni = DataAlumni::create($request->all());
        // if($request->hasFile('foto')){
        //     $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
        //     $profil->foto=$request->file('foto')->getClientOriginalName();
        //     $profil->save();
        //     ([
        //         'foto'=>$request->foto,
        //         'nama_alumni' => $request->nama_alumni,
        //         'no_telp' => $request->no_telp,
        //         'tempat_lahir' => $request->tempat_lahir,
        //         'tanggal_lahir' => $request->tanggal_lahir,
        //         'jenis_kelamin' => $request->jenis_kelamin,
        //         'provinsi' => $request->provinsi,
        //         'kota' => $request->kota,
        //         'kecamatan' => $request->kecamatan,
        //         'desa_atau_jalan' => $request->desa_atau_jalan,
        //         'domisili' => $request->domisili,
        //         'angkatan' => $request->angkatan,
        //         'status_pekerjaan'=>$request->status_pekerjaan,
        //         'posisi'=>$request->posisi,
        //         'perusahaan'=>$request->perusahaan
        //     ]);
        // }else{
        //     ([
        //         'foto'=> 'foto.jpg',
        //         'nama_alumni' => $request->nama_alumni,
        //         'no_telp' => $request->no_telp,
        //         'tempat_lahir' => $request->tempat_lahir,
        //         'tanggal_lahir' => $request->tanggal_lahir,
        //         'jenis_kelamin' => $request->jenis_kelamin,
        //         'provinsi' => $request->provinsi,
        //         'kota' => $request->kota,
        //         'kecamatan' => $request->kecamatan,
        //         'desa_atau_jalan' => $request->desa_atau_jalan,
        //         'domisili' => $request->domisili,
        //         'angkatan' => $request->angkatan,
        //         'status_pekerjaan'=>$request->status_pekerjaan,
        //         'posisi'=>$request->posisi,
        //         'perusahaan'=>$request->perusahaan
        //     ]);
        // }
        // return redirect('/dashboard/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'foto' => 'file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validated = $request->validate([
            'nama_alumni' => $request->nama_alumni,
            'no_telp' => $request->no_telp,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'desa_atau_jalan' => $request->desa_atau_jalan,
            'domisili' => $request->domisili,
            'angkatan' => $request->angkatan,
            'status_pekerjaan'=>$request->status_pekerjaan,
            'posisi'=>$request->posisi,
            'perusahaan'=>$request->perusahaan
        ]);

        $dataalumni = DataAlumni::find($id)->update($request->all());

        return redirect('/dashboard/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
