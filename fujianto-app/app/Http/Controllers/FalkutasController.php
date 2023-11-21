<?php

namespace App\Http\Controllers;

use App\Models\Falkutas;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Illuminate\View\ViewName;

class FalkutasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $falkutas = Falkutas::all(); // select * from falkutas
        return view("falkutas.index")->with("falkutas", $falkutas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('falkutas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);

        //validasi data input
        $validasi = $request->validate([
            "nama" => "required|unique:falkutas",
        ]);

        //simpan data ke tabel falkutas
        Falkutas::create($validasi);

        //redirect ke falkutas/index
        return redirect("falkutas")->with("success", "Data Falkutas berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Falkutas $falkutas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Falkutas $falkutas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Falkutas $falkutas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Falkutas $falkutas)
    {
        //
    }
}
