<?php

namespace App\Http\Controllers;
use App\Models\DetailPenjualan;
use App\Models\Penjualan;
use App\Models\User;
use App\Models\Pelanggan;
use App\Models\Produk;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = Penjualan::orderBy('created_at','DESC')->get();
        return view('pages.penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $PB = Pelanggan::orderBy('created_at','DESC')->get();
        $produk = Produk::all();
        $user = User::all();
        return view('pages.penjualan.tambah', compact('user','PB'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Penjualan::create([
            'taggal_penjualan' => now(),
            'total_harga' => 0,
            'id_pelanggan' => $request->id_pelanggan,
            'id_user' => 1
        ]);

        return redirect('/penjualan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
