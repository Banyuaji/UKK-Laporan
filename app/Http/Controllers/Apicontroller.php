<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class Apicontroller extends Controller
{
    // kategori
    public function index()
    {
        return Kategori::all();
    }
    public function create(Request $req)
    {
        $kat = new Kategori;
        $kat->nama_kategori = $req->nama;
        $kat->save();

        return "Data berhasil masuk";
    }
    public function update(Request $req, $id)
    {
        $nama = $req->nama;

        $kat = Kategori::find($id);
        $kat->nama_kategori = $nama;
        $kat->save();

        return "Data berhasil diupdate";
    }
    public function delete($id)
    {
        $kat = Kategori::find($id);
        $kat->delete();

        return "Data berhasil dihapus";
    }

    public function lindex()
    {
        return Kategori::all();
    }
    public function lcreate(Request $req)
    {
        $kat = new Kategori;
        $kat->nama_kategori = $req->nama;
        $kat->save();

        return "Data berhasil masuk";
    }
}
