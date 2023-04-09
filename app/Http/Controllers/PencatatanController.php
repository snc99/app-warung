<?php

namespace App\Http\Controllers;

use App\Models\pencatatan;
use App\Models\totalTagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;


class PencatatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pencatatan::orderBy('nama', 'asc')->paginate(8);
        return view('dashboard')->with('data', $data);
        // return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahData');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Session::flash('nama', $request->nama);
        // Session::flash('tanggal', $request->tanggal);
        // Session::flash('total_transaksi', $request->total_transaksi);
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'total_transaksi' => 'required'
        ], [
            'nama.required' => 'Nama Wajib di isi',
            'tanggal.required' => 'Tanggal Wajib di isi',
            'total_transaksi.required' => 'Total Transaksi Wajib di isi',
        ]);

        $data = [
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'total_transaksi' => $request->total_transaksi,
        ];

        pencatatan::create($data);
        toast('Data berhasil di tambahkan', 'success');
        return redirect()->to('dashboard');
        // return json_encode($data);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
