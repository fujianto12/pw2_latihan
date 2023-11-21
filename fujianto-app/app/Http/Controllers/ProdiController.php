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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        //
    }
}
