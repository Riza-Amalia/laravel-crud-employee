<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuti;

class CutiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtCuti = Cuti::paginate(1);
        return view('Cuti.Data-cuti', compact('dtCuti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cuti.Create-cuti');
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
        Cuti::create([
            'tgl_cuti' => $request->tgl_cuti,
            'lama_cuti' => $request->lama_cuti,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('data-cuti')->with('toast_success', 'Data Berhasil Tersimpan');
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
        $peg = Cuti::findorfail($id);
        return view('Cuti.Edit-cuti', compact('peg'));
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
        $peg = Cuti::findorfail($id);
        $peg->update($request->all());
        return redirect('data-cuti')->with('toast_success', 'Data Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peg = Cuti::findorfail($id);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Dihapus');;
    }
}
