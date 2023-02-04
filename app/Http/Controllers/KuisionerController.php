<?php

namespace App\Http\Controllers;

use App\Models\Kuisioner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class KuisionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Auth::user()->id;
        
        return view('pages.backend.kuisioner.index', [
            'items' => $items
        ]);
    }
}