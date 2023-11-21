<?php

namespace App\Http\Controllers;

use App\Models\Falkutas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = Prodi::all();
        // dd($prodi); // untuk melihat isi dari variable prodi
        return view("prodi.index")->with("prodis", $prodi);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $falkutas = Falkutas::all();
        return view('prodi.create')->with("falkutas", $falkutas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //validasi data input
         $validasi = $request->validate([
            "nama" => "required|unique:prodis",
            "falkutas_id" => "required",
        ]);

        //simpan data ke tabel falkutas
        Prodi::create($validasi);

        //redirect ke falkutas/index
        return redirect("prodi")->with("success", "Data Prodi berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        $falkutas = Falkutas::all();
        return view('prodi.edit')->with('prodi', $prodi)->with('falkutas', $falkutas);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        $validasi = $request->validate([
            "nama" => "required",
            "falkutas_id" => "required"
    ]);
    $prodi->update($validasi);
    // atau pakai cara di bawahini
    // Prodi::where('id', $prodi->id)->update($validasi);
    return redirect("prodi")-> with("success", "Data prodi berhasil diubah");
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $prodi = Prodi::find($id);
        // dd($prodi);
        $prodi -> delete();
        return redirect("prodi")->with("success", "Data prodi berhasil dihapus");


    }
}
