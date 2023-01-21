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
        
        $items = Auth::user()->id;
        $items = Berita::paginate(10);
        return view('pages.backend.publikasi.berita.index', [
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
        return view('pages.backend.publikasi.berita.create');
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
            'judul' => 'required|max:64',
            'kategori' => 'required|max:64',
            'isi_berita' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $resource = $request->file('thumbnail');
            $name = $resource->getClientOriginalName();
            $finalName = date('His')  . $name;
            $request->file('thumbnail')->storeAs('images/', $finalName, 'public');
            Berita::create([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'thumbnail' => $finalName,
                'tanggal' => $request->tanggal,
                'author' => $request->author,
                'user_id' => $request->user_id,
                'isi_berita' => $request->isi_berita
            ]);
        } else {
            Berita::create([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'thumbnail' => 'thumbnail-default.jpg',
                'tanggal' => $request->tanggal,
                'author' => $request->author,
                'user_id' => $request->user_id,
                'isi_berita' => $request->isi_berita
            ]);
        }
        
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
        $item = Berita::findOrFail($id);
        return view('pages.backend.publikasi.berita.detail',[
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
        $item = Berita::findOrFail($id);
        
        return view('pages.backend.publikasi.berita.edit', [
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
            'judul' => 'required|max:64',
            'kategori' => 'required|max:64',
            'isi_berita' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $resource = $request->file('thumbnail');
            $name = $resource->getClientOriginalName();
            $finalName = date('His')  . $name;
            $request->file('thumbnail')->storeAs('images/', $finalName, 'public');
            $item = Berita::findOrfail($id);
            $item->update([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'thumbnail' => $finalName,
                'tanggal' => $request->tanggal,
                'author' => $request->author,
                'user_id' => $request->user_id,
                'isi_berita' => $request->isi_berita
            ]);
        } else {
            $item = Berita::findOrfail($id);
            $item->update([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'thumbnail' => 'thumbnail-default.jpg',
                'tanggal' => $request->tanggal,
                'author' => $request->author,
                'user_id' => $request->user_id,
                'isi_berita' => $request->isi_berita
            ]);
        }
        
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
