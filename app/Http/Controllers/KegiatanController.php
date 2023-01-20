<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Kegiatan::paginate(10);
        return view('pages.backend.kegiatan.index', [
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
        return view('pages.backend.kegiatan.create');
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
            'penyelenggara' => 'max:64',
            'content' => 'required'
        ]);

        if ($request->hasFile('thumbnail')) {
            $resource = $request->file('thumbnail');
            $name = $resource->getClientOriginalName();
            $finalName = date('His')  . $name;
            $request->file('thumbnail')->storeAs('images/', $finalName, 'public');
            Kegiatan::create([
                'judul' => $request->judul,
                'thumbnail' => $finalName,
                'tanggal' => $request->tanggal,
                'penyelenggara' => $request->penyelenggara,
                'user_id' => $request->user_id,
                'content' => $request->content,

            ]);
        } else {
            Kegiatan::create([
                'judul' => $request->judul,
                'thumbnail' => 'thumbnail-default.jpg',
                'tanggal' => $request->tanggal,
                'penyelenggara' => $request->penyelenggara,
                'user_id' => $request->user_id,
                'content' => $request->content,
            ]);
        }

        return redirect('/dashboard/kegiatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = Kegiatan::where('user_id', Auth::user()->email)->get();

        return view('pages.backend.kegiatan.detail', [
            'items' => $items
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
        $item = Kegiatan::findOrFail($id);

        return view('pages.backend.kegiatan.edit', [
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
            'penyelenggara' => 'required|max:64',
            'content' => 'required'
        ]);

        if ($request->hasFile('thumbnail')) {
            $resource = $request->file('thumbnail');
            $name = $resource->getClientOriginalName();
            $finalName = date('His')  . $name;
            $request->file('thumbnail')->storeAs('images/', $finalName, 'public');
            Kegiatan::create([
                'judul' => $request->judul,
                'thumbnail' => $finalName,
                'tanggal' => $request->tanggal,
                'penyelenggara' => $request->penyelenggara,
                'user_id' => $request->user_id,
                'content' => $request->content,

            ]);
        } else {
            Kegiatan::create([
                'judul' => $request->judul,
                'thumbnail' => 'thumbnail-default.jpg',
                'tanggal' => $request->tanggal,
                'penyelenggara' => $request->penyelenggara,
                'user_id' => $request->user_id,
                'content' => $request->content,
            ]);
        }

        return redirect('/dashboard/kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Kegiatan::findOrFail($id);
        $item->delete();

        return redirect('/dashboard/kegiatan');
    }
}
