<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Auth::user()->id;
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
            'judul' => 'required|max:225',
            'kategori' => 'required|max:64',
            'penyelenggara' => 'required|max:64',
            'content' => 'required',
            'kuota' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required',
            'batas' => 'required'
        ]);

        $data = Kegiatan::create($request->all());
        if ($request->hasFile('thumbnail')) {
            $request->file('thumbnail')->move('images/', $request-> file('thumbnail')->getClientOriginalName());
            $data->thumbnail = $request->file('thumbnail')->getClientOriginalName();
            $data->save();
            ([
                'judul' => $request->judul,
                'thumbnail' => $request->thumbnail,
                'kategori' => $request->kategori,
                'tanggal' => $request->tanggal,
                'penyelenggara' => $request->penyelenggara,
                'kuota' => $request->kuota,
                'lokasi'=> $request->lokasi,
                'batas' => $request->batas,
                'user_id' => $request->user_id,
                'content' => $request->content

            ]);
        } else {
            ([
                'judul' => $request->judul,
                'thumbnail' => 'thumbnail.jpg',
                'kategori' => $request->kategori,
                'tanggal' => $request->tanggal,
                'penyelenggara' => $request->penyelenggara,
                'kuota' => $request->kuota,
                'lokasi'=> $request->lokasi,
                'batas' => $request->batas,
                'user_id' => $request->user_id,
                'content' => $request->content
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
    public function show($judul)
    {
<<<<<<< HEAD
        $item = DB::table('kegiatan')->where('judul', $id)->first();
=======
        $item = DB::table('kegiatan')->where('judul', $judul)->first();
>>>>>>> a2587a2852818bb2d27c08993ef35c862877bf57
        return view('pages.backend.kegiatan.detail', [
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
        $item = Kegiatan::where('id', $id)->first();

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
            'judul' => 'required|max:225',
            'kategori' => 'required|max:64',
            'penyelenggara' => 'required|max:64',
            'content' => 'required',
            'kuota' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required',
            'batas' => 'required'
        ]);

        $kegiatan = Kegiatan::find($id)->update($request->all());
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
