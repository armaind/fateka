<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Berita::where('user_id', Auth::user()->email)->get();

        return view('pages.backend.berita.index', [
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
        return view('pages.backend.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_alumni' => 'required|max:42',
            'angkatan' => 'required|max:14',
            'no_telp' => 'required|max:24',
            'user_id' => 'required',
            'email'=>'required|max:42',
            'alamat' => 'required',
            'status_pekerjaan'=>'required',
            'perusahaan'=>'nullable'
            
        ]);
        
        $input = $request->all();
        
        $berita = Berita::create($input);
        
        return redirect('/dashboard/berita');
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
        $item = Berita::findOrFail($id);
        
        return view('pages.backend.berita.edit', [
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
        
        $validated = $request->validate([
            'nama_alumni' => 'required|max:42',
            'angkatan' => 'required|max:14',
            'no_telp' => 'required|max:24',
            'user_id' => 'required',
            'email'=>'required|max:42',
            'alamat' => 'required',
            'status_pekerjaan'=>'required',
            'perusahaan'=>'nullable'
        ]);

        $berita = Berita::find($id)->update($request->all());

        return redirect('/dashboard/berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Berita::findOrFail($id);
        $item->delete();

        return redirect('/dashboard/berita');
    }
}
