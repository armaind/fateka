<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Schedules;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Schedules::where('user_id', Auth::user()->email)->get();

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
        $validated = $request->validate([
            'nama_alumni' => 'required|max:42',
            'angkatan' => 'required|max:14',
            'no_telp' => 'required|max:24',
            'user_id'=>'required|max:42',
            'alamat' => 'required',
            'status_pekerjaan'=>'required',
            'perusahaan'=>'nullable'

        ]);

        $input = $request->all();

        $schedules = Schedules::create($input);

        return redirect('/dashboard/data-alumni');
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
        $item = Schedules::findOrFail($id);

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

        $validated = $request->validate([
            'nama_alumni' => 'required|max:42',
            'angkatan' => 'required|max:14',
            'no_telp' => 'required|max:24',
            'alamat' => 'required',
            'status_pekerjaan'=>'required',
            'perusahaan'=>'nullable'
        ]);

        $schedules = Schedules::find($id)->update($request->all());

        return redirect('/dashboard/data-alumni');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Schedules::findOrFail($id);
        $item->delete();

        return redirect('/dashboard/data-alumni');
    }
}
