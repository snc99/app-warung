<?php

namespace App\Http\Controllers;

use App\Models\totalTagihan;
use App\Models\pencatatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class TotalTagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = totalTagihan::orderBy('id', 'asc')->paginate(8);
        return view('dashboard')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pencatatan = pencatatan::all();
        return view('pembayar-tagihan', compact('pencatatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Session::flash('pencatatan_id', $request->pencatatan_id);
        // Session::flash('total_transaksi', $request->total_transaksi);
        // Session::flash('bayar', $request->bayar);
        $request->validate([
            'pencatatan_id' => 'required',
            'total_tagihan' => 'required',
            'bayar' => 'required',
            'sisa_tagihan' => 'required'
        ], [
            'pencatatan_id.required' => 'Nama Wajib di isi',
            'total_tagihan.required' => 'Total Wajib di isi',
            'bayar.required' => 'Jumlah Bayar Wajib di isi',
            'sisa_tagihan.required' => 'Sisa Tagihan Wajib di isi',
        ]);

        $data = [
            'pencatatan_id' => $request->pencatatan_id,
            'total_tagihan' => $request->total_tagihan,
            'bayar' => $request->bayar,
            'sisa_tagihan' => $request->sisa_tagihan,
        ];

        totalTagihan::create($data);
        toast('Data berhasil di tambahkan', 'success');
        return redirect()->to('dashboard');
        // return dd($data);
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
