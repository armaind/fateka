<?php

namespace App\Http\Controllers;

use App\Models\LowonganKerja;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LowonganKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Auth::user()->id;
        $items = LowonganKerja::paginate(10);
        $items = LowonganKerja::latest()->get();
        return view('pages.backend.lowonganKerja.index', [
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
        return view('pages.backend.lowonganKerja.create');
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
            'thumbnail' => 'file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validated = $request->validate([
            'nama' => 'required|max:100',
            'posisi' => 'required|max:100',
            'tipe_pekerjaan' => 'nullable',
            'tingkat_pekerjaan' => 'nullable',
            'gaji' => 'nullable',
            'berlaku' => 'nullable',
            'deskripsi' => 'required',
            'perusahaan' => 'required|max:100',
            'kota' => 'required|max:64',
            'negara' => 'required|max:64',
            'jumlah' => 'nullable',
            'no_telp' => 'nullable',
            'email' => 'required|max:64',

        ]);
        $data = LowonganKerja::create($request->all());
        if ($request->hasFile('thumbnail')) {
            $request->file('thumbnail')->move('images/', $request->file('thumbnail')->getClientOriginalName());
            $data->thumbnail = $request->file('thumbnail')->getClientOriginalName();
            $data->save();
            ([
                'nama' => $request->nama,
                'posisi' => $request->posisi,
                'tipe_pekerjaan' => $request->tipe_pekerjaan,
                'tingkat_pekerjaan' => $request->tingkat_pekerjaan,
                'gaji' => $request->gaji,
                'berlaku' => $request->berlaku,
                'thumbnail' => $request->thumbnail,
                'deskripsi' => $request->deskripsi,
                'perusahaan' =>  $request->perusahaan,
                'kota' => $request->kota,
                'negara' =>  $request->negara,
                'jumlah' =>  $request->jumlah,
                'no_telp' =>  $request->no_telp,
                'email' => $request->email,
                'tanggal' => $request->tanggal,
                'author' => $request->author,
                'user_id' => $request->user_id,

            ]);
        } else {
            ([
                'nama' => $request->nama,
                'posisi' => $request->posisi,
                'tipe_pekerjaan' => $request->tipe_pekerjaan,
                'tingkat_pekerjaan' => $request->tingkat_pekerjaan,
                'gaji' => $request->gaji,
                'berlaku' => $request->berlaku,
                'thumbnail'=>'thumbnail-default.jpg',
                'deskripsi' => $request->deskripsi,
                'perusahaan' =>  $request->perusahaan,
                'kota' => $request->kota,
                'negara' =>  $request->negara,
                'jumlah' =>  $request->jumlah,
                'no_telp' =>  $request->no_telp,
                'email' => $request->email,
                'tanggal' => $request->tanggal,
                'author' => $request->author,
                'user_id' => $request->user_id,
            ]);
        }

        return redirect('/dashboard/lowonganKerja');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = DB::table('lowongan_kerja')->where('nama', $id)->first();
        return view('pages.backend.lowonganKerja.detail',[
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
        $item = LowonganKerja::findOrFail($id);

        return view('pages.backend.lowonganKerja.edit', [
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
            'thumbnail' => 'file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validated = $request->validate([
            'nama' => 'required|max:100',
            'posisi' => 'required|max:100',
            'tipe_pekerjaan' => 'nullable',
            'tingkat_pekerjaan' => 'nullable',
            'gaji' => 'nullable',
            'berlaku' => 'nullable',
            'deskripsi' => 'required',
            'perusahaan' => 'required|max:100',
            'kota' => 'required|max:64',
            'negara' => 'required|max:64',
            'jumlah' => 'nullable',
            'no_telp' => 'nullable',
            'email' => 'required|max:64'
        ]);
        $lowonganKerja = LowonganKerja::find($id)->update($request->all());

        return redirect('/dashboard/lowonganKerja');

    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = LowonganKerja::findOrFail($id);
        $item->delete();

        return redirect('/dashboard/lowonganKerja');
    }
}
