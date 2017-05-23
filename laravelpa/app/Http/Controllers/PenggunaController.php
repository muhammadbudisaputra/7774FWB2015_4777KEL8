<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Pengguna;

class PenggunaController extends Controller
{
    //
    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {
        $semuapengguna = pengguna::all();
        return view('pengguna.awal', compact('semuapengguna'));
    }

    public function tambah()
    {
        return view('pengguna.tambah');
    }

    public function simpan(Request $input)
    {
        
            $pengguna = new pengguna;
            $pengguna->username= $input->username;
            $pengguna->password= $input->password;
            $informasi = $pengguna->save() ? 'berhasil simpan data' : 'gagal simpan data';
            return redirect('pengguna')->with(['informasi'=>$informasi]);
    }

    public function edit($id)
    {
        $pengguna = pengguna::find($id);
        return view('pengguna.edit')->with(array('pengguna'=>$pengguna));
    }

    public function lihat($id_pengguna)
    {
        $pengguna = pengguna::find($id_pengguna);
        return view('pengguna.lihat')->with(array('pengguna'=>$pengguna));
    }

    public function update($id,Request $input)
    {
        $pengguna = pengguna::find($id);
        $pengguna->username = $input->username;
        $pengguna->password = $input->password;
        $pengguna->save();
        $informasi = $pengguna->save() ? 'berhasil simpan data' : 'gagal simpan data';
            return redirect('pengguna')->with(['informasi'=>$informasi]);
        
    }
    public function hapus($id)
    {
        $pengguna = pengguna::find($id);
        $informasi = $pengguna->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('pengguna')->with(['informasi'=>$informasi]);
    }
}
