<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tiket;
use App\relasi_tpt;
use App\penumpang;
use App\tujuan;
use App\kategori;

class TiketController extends Controller
{
    //
    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {
        return view('tiket.awal', ['data'=>relasi_tpt::all()]);
    }

    public function tambah()
    {
        $kategori = new  kategori;
        return view('tiket.tambah',compact('kategori'));
    }

    public function simpan(Request $input)
    {
        
            $tiket = new tiket;
            $tiket->tanggal_keberangkatan= $input->tanggal_keberangkatan;
            $tiket->jam_keberangkatan= $input->jam_keberangkatan;
            $tiket->id_kategori = $input->id_kategori;
            $tiket->save();
        return redirect('tiket');
    }

    public function edit($id)
    {
        $tiket = tiket::find($id);
        return view('tiket.edit')->with(array('tiket'=>$tiket));
    }

    public function lihat($id_tiket)
    {
        $tiket = tiket::find($id_tiket);
        return view('tiket.lihat')->with(array('tiket'=>$tiket));
    }

    public function update($id_tiket,Request $input)
    {
        $tiket = tiket::find($id_tiket);
        $tiket->nama = $input->nama;
        $tiket->nip = $input->nip;
        $tiket->alamat= $input->alamat;
        $tiket->save();
        if(!is_null($input->username))
        {
            $pengguna = $tiket->pengguna->fill($input->only('username'));
            if(!empty($input->password))
                $pengguna->password = $input->password;
                if($pengguna->save())
                    $this->informasi = 'berhasil simpan data';
        }
        else
        {
            $this->informasi = 'berhasil simpan data';
        }
        return redirect('tiket')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $tiket = tiket::find($id);
        if($tiket->pengguna()->delete())
        {
            if($tiket->delete())
                $this->informasi = 'berhasil hapus data';
        }
        return redirect('tiket')->with(['informasi' => $this->informasi]);
    }
}
