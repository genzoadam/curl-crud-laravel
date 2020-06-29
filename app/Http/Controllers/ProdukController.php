<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();        

        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $username = "tes";
        $password = md5("tes123");
        //curl
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL,"https://tesfp123.000webhostapp.com/");
        curl_setopt($curl, CURLOPT_USERPWD, "$username:$password");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $out = curl_exec ($curl);
        curl_close ($curl);

        //mengubah json ke array
        $output = json_decode($out, TRUE);

        //menambahkan data produk ke dtabase
        foreach ($output as $value) {
            Produk::insert([
            'kode_produk' => $value['kode_produk'],
            'judul_produk' => $value['judul_produk'],
            'harga' => $value['harga'],
            'link_produk' => $value['link_produk'],
            'kategori' => $value['kategori']
        ]);
        }

        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        $produk = Produk::find($id);
        // print_r($produk);
        return view('produk.edit', compact('produk'));
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
        //menerima request dan update databbse
        $produk = Produk::find($id);
        $produk->kode_produk = $request->kode_produk;
        $produk->judul_produk = $request->judul_produk;
        $produk->harga = $request->harga;
        $produk->link_produk = $request->link_produk;
        $produk->kategori = $request->kategori;
        $produk->save();

        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produk::find($id)->delete();
        return back();
    }
}
