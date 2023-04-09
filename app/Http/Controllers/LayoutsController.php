<?php

namespace App\Http\Controllers;

use App\Models\pencatatan;
use App\Models\totalTagihan;
use Illuminate\Http\Request;

class LayoutsController extends Controller
{
    public function index()
    {
        $data = pencatatan::orderBy('nama', 'asc')->paginate(8);
        return view('dashboard')->with('data', $data);

        $data = totalTagihan::orderBy('nama', 'asc')->paginate(8);
        return view('TotalTagihan')->with('data', $data);
    }

    public function home()
    {
        $data = pencatatan::orderBy('nama', 'asc')->paginate(8);
        return view('dashboard')->with('data', $data);

        $data = totalTagihan::orderBy('nama', 'asc')->paginate(8);
        return view('TotalTagihan')->with('data', $data);
    }
}
