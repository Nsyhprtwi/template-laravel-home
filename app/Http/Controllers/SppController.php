<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // fetching data dari tabel genres
        $spps = DB::table('spps')->get();
        // return ke view dan kirirmkan data $genres
        return view('spp.index', compact('spps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('spp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data inputan data wajib diisi dan minimal 5 karakter
        $request->validate([
            'tahun'  => 'required',
            'nominal'=> 'required',
        ]);

        // Query Untuk menyimpan data
        $query = DB::table('spps')->insert([
            'tahun'  => $request['tahun'],
            'nominal'=> $request['nominal'],
        ]);
        // Jika data disimpan maka di redirect ke halaman index
        return redirect()->route('spp.index')->with(['success' => 'Data Berhasil ditambahkan']);;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $sppShow = DB::table('spps')->where('id_spp', $id)->first();
        return view('spp.show', compact('sppShow'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Mengambil data dari database
        $spps = DB::table('spps')->where('id_spp', $id)->first();
        // menampilkan view edit data
        return view('spp.edit', compact('spps'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validasi data inputan data wajib diisi dan minimal 5 karakter
        $request->validate([
            'tahun'  => 'required',
            'nominal'=> 'required',
        ]);

        // Query Untuk menyimpan data
        $query = DB::table('spps')
        ->where('id_spp', $id)
        ->update([
            'tahun'  => $request['tahun'],
            'nominal' => $request['nominal'],
        ]);
        // Jika data disimpan maka di redirect ke halaman index
        return redirect()->route('spp.index')->with(['success' => 'Data Berhasil diupdate']);;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $spps = DB::table('spps')->where('id_spp', $id)->delete();
        return redirect()->route('spp.index')->with('success', 'Data berhasil dihapus');
    }
}
