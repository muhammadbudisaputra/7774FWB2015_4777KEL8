<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\kategori;

class kategoriController extends Controller
{
    //
    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {
        $semuakategori = kategori::all();
        return view('kategori.awal', compact('semuakategori'));
    }

    public function tambah()
    {
        return view('kategori.tambah');
    }

    public function simpan(Request $input)
    {
        
            $kategori = new kategori;
            $kategori->nama_kategori= $input->nama;
            $kategori->nip= $input->nip;
            $kategori->alamat= $input->alamat;
            if($pengguna->kategori()->save($kategori)) $informasi = 'berhasil simpan data';
        return redirect('kategori')->with(['informasi' =>$informasi]);
    }

    public function edit($id)
    {
        $kategori = kategori::find($id);
        return view('kategori.edit')->with(array('kategori'=>$kategori));
    }

    public function lihat($id_kategori)
    {
        $kategori = kategori::find($id_kategori);
        return view('kategori.lihat')->with(array('kategori'=>$kategori));
    }

    public function update($id,Request $input)
    {
        $kategori = kategori::find($id);
        $kategori->nama = $input->nama;
        $kategori->nip = $input->nip;
        $kategori->alamat= $input->alamat;
        $kategori->save();
        if(!is_null($input->username))
        {
            $pengguna = $kategori->pengguna->fill($input->only('username'));
            if(!empty($input->password))
                $pengguna->password = $input->password;
                if($pengguna->save())
                    $this->informasi = 'berhasil simpan data';
        }
        else
        {
            $this->informasi = 'berhasil simpan data';
        }
        return redirect('kategori')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $kategori = kategori::find($id);
        if($kategori->pengguna()->delete())
        {
            if($kategori->delete())
                $this->informasi = 'berhasil hapus data';
        }
        return redirect('kategori')->with(['informasi' => $this->informasi]);
    }
}