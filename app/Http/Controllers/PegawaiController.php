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
        // SELECT FROM pegawai
        $data = Pegawai::all(); // SELECT * FROM pegawai

        return view('pegawai.index', compact(
            "data"
        ),[
            "title" => "Table"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // INSERT INTO pegawai(name, born,jabatan,...) VALUES (....)
        $newPegawai = new Pegawai;
        return view('pegawai.create', compact(
            "newPegawai"
        ), [
            "title" => "Tambah Data"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPegawai = new Pegawai;
        $newPegawai->name = $request->name;
        $newPegawai->born = $request->born;
        $newPegawai->jabatan = $request->jabatan;
        $newPegawai->save();

        return redirect('pegawai');
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
        $updatePegawai = Pegawai::find($id);
        return view('pegawai.edit', compact(
            "updatePegawai"
        ),[
            "title" => "Edit"
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
        $newPegawai = Pegawai::find($id);
        $newPegawai->name = $request->name;
        $newPegawai->born = $request->born;
        $newPegawai->jabatan = $request->jabatan;
        $newPegawai->save();

        return redirect('pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Pegawai::find($id);
        $delete->delete();

        return redirect('pegawai');
    }
}
