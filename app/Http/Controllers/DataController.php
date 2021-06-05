<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPelanggan = DB::table("transaksi")
        -> join("pelanggan","transaksi.id_pelanggan","=","pelanggan.id")
        -> join("barang","transaksi.id_barang","=","barang.id")
        -> select("transaksi.id as nomor","pelanggan.nama as nama","pelanggan.alamat as alamat","barang.nama as barang","barang.harga as harga")
        ->get();
        return view('home0249',['data' => $dataPelanggan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tambah_data0249");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->nama;
        $alamat = $request->alamat;
        $barang = $request->barang;
        if($barang == "sepatu"){
            $idBarang = 1;
        }
        else{
            $idBarang = 2;
        }
        $data = DB::table("pelanggan")->insert([
            "nama" => $nama,
            "alamat" => $alamat
        ]);
        $id_pel = DB::table("pelanggan")->where('nama',$nama)->first();
        $id = $id_pel->id;
        $data = DB::table("transaksi")->insert([
            "id_pelanggan" => $id,
            "id_barang" => $idBarang
        ]);
            return redirect("/home");
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
        $data = DB::table("pelanggan") ->where("id",$id) -> get();
        return view("edit0249",['id' => $data]);

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
        $data = DB::table("pelanggan") -> where("id",$id) -> update([
            "id" => $request -> id,
            "nama" => $request -> nama
        ]);
        return redirect('/home');
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
