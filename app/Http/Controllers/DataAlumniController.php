<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\DataAlumni;
use Illuminate\Support\Facades\DB;

class DataAlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DataAlumni::paginate(50);
        return view('pages.backend.dataAlumni.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.backend.dataAlumni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto' => 'file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validated = $request->validate([
            'nama_alumni' => 'required|max:42',
            'email'=>'required|max:42',
            'no_telp' => 'required|max:24',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'desa_atau_jalan' => 'required',
            'domisili' => 'required',
            'angkatan' => 'required|max:14',
            'status_pekerjaan'=>'required',
            'posisi'=>'required',
            'perusahaan'=>'nullable'
            
        ]);
       
        $dataalumni = DataAlumni::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $dataalumni->foto=$request->file('foto')->getClientOriginalName();
            $dataalumni->save();
            ([
                'nama_alumni' => $request->nama_alumni,
                'email'=>$request->email,
                'no_telp' => $request->no_telp,
                'foto'=>$request->foto,
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
        }else{
            ([
                'nama_alumni' => $request->nama_alumni,
                'email'=>$request->email,
                'no_telp' => $request->no_telp,
                'foto'=>'foto.jpg',
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
        }
        
        return redirect('/dashboard/dataalumni');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = DB::table('data_alumni')->where('nama_alumni', $id)->first();
        return view('pages.backend.dataAlumni.detail',[
            'item' => $item
        ]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = DataAlumni::findOrFail($id);
        
        return view('pages.backend.dataAlumni.edit', [
            'item' => $item
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'foto' => 'file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        $validated = $request->validate([
            'nama_alumni' => $request->nama_alumni,
            'email'=>$request->email,
            'no_telp' => $request->no_telp,
            'foto'=>$request->foto,
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

        return redirect('/dashboard/dataalumni');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = DataAlumni::findOrFail($id);
        $item->delete();

        return redirect('/dashboard/dataalumni');
    }
}
