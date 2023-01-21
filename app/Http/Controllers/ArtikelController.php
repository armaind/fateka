<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Auth::user()->id;
        $items = Artikel::paginate(10);
        return view('pages.backend.publikasi.artikel.index', [
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
        return view('pages.backend.publikasi.artikel.create');
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
            'kategori' => 'max:64',
            'isi_artikel' => 'required'
        ]);

        if ($request->hasFile('thumbnail')) {
            $resource = $request->file('thumbnail');
            $name = $resource->getClientOriginalName();
            $finalName = date('His')  . $name;
            $request->file('thumbnail')->storeAs('images/', $finalName, 'public');
            Artikel::create([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'thumbnail' => $finalName,
                'tanggal' => $request->tanggal,
                'author' => $request->author,
                'user_id' => $request->user_id,
                'isi_artikel' => $request->isi_artikel,
                
            ]);
        } else {
            Artikel::create([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'thumbnail' => 'thumbnail-default.jpg',
                'tanggal' => $request->tanggal,
                'author' => $request->author,
                'user_id' => $request->user_id,
                'isi_artikel' => $request->isi_artikel,
            ]);
        }
        
        return redirect('/dashboard/artikel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Artikel::findOrFail($id);
        return view('pages.backend.publikasi.artikel.detail',[
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
        $item = Artikel::findOrFail($id);
        
        return view('pages.backend.publikasi.artikel.edit', [
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
            'artikel' => 'max:64',
            'isi_artikel' => 'required'
        ]);

        if ($request->hasFile('thumbnail')) {
            $resource = $request->file('thumbnail');
            $name = $resource->getClientOriginalName();
            $finalName = date('His')  . $name;
            $request->file('thumbnail')->storeAs('images/', $finalName, 'public');
            $item = Artikel::findOrFail($id);
            $item->update([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'thumbnail' => $finalName,
                'tanggal' => $request->tanggal,
                'author' => $request->author,
                'user_id' => $request->user_id,
                'isi_artikel' => $request->isi_artikel,
            ]);
        } else {
            $item = Artikel::findOrFail($id);
            $item->update([
                'judul' => $request->judul,
                'kategori' => $request->kategori,
                'thumbnail' => 'thumbnail-default.jpg',
                'tanggal' => $request->tanggal,
                'author' => $request->author,
                'user_id' => $request->user_id,
                'isi_artikel' => $request->isi_artikel,
            ]);
        }

        return redirect('/dashboard/artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Artikel::findOrFail($id);
        $item->delete();

        return redirect('/dashboard/artikel');
    }
}