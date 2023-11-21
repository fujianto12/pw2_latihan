<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        // dd($mahasiswa); // untuk melihat isi dari variable prodi
        return view("mahasiswa.index")->with("mahasiswas", $mahasiswa);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all();
        return view('mahasiswa.create')->with("prodi", $prodi);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "npm" => "required|unique:mahasiswas",
            "nama" => "required",
            "tempat_lahir" => "required",
            "tanggal_lahir" => "required",
            "prodi_id" => "required",
            "foto" => "required|image"
        ]);

        // Ambil extensi file foto
        $ext = $request->foto->getClientOriginalExtension();
        // rename file foto menjadi npm.extensi (Contoh : 2125250001.jpg)
        $validasi['foto']= $request->npm.".".$ext;
        // upload file foto ke dalam folder public/foto
        $request->foto->move(public_path('foto'), $validasi["foto"]);
        // simpan data mahasiswa ke tabel mahasiswa
        Mahasiswa::create($validasi);
        return redirect("mahasiswa")->with("success","Data mahasiswa berhasil");

    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        $prodi = Prodi::all();
        return view("mahasiswa.edit")->with("mahasiswa", $mahasiswa)->with("prodi", $prodi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa -> delete();
        return redirect()->route("mahasiswa.index")->with("success","Berhasil Di hapus");

        // return response("Data berhasil dihapus", 200);
    }
}
