<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPegawai = Pegawai::paginate(5);
        return view('Pegawai.Data-pegawai', compact('dtPegawai'));
    }

    public function first3()
    {
        $dtPegawai = Pegawai::select("*")->orderBy("tgl_bergabung", "asc")->limit(3)->get();
        return view("Pegawai.First3-pegawai", compact('dtPegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pegawai.Create-pegawai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Pegawai::create([
            'no_induk' => $request->no_induk,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tgl_lahir' => $request->tgl_lahir,
            'tgl_bergabung' => $request->tgl_bergabung,
        ]);

        return redirect('data-pegawai')->with('toast_success', 'Data Berhasil Tersimpan');
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
        $peg = Pegawai::findorfail($id);
        return view('Pegawai.Edit-pegawai', compact('peg'));
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
        $peg = Pegawai::findorfail($id);
        $peg->update($request->all());
        return redirect('data-pegawai')->with('toast_success', 'Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peg = Pegawai::findorfail($id);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Dihapus');;
    }
}
