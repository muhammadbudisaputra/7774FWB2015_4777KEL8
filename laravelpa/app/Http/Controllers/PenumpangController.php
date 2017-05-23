<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Penumpang;
use App\Tiket;
use App\relasi_tpt;
use App\Tujuan;
class PenumpangController extends Controller
{
    //
    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {
        return view('penumpang.awal', ['data'=>relasi_tpt::all()]);
    }

    public function tambah()
    {
        return view('penumpang.tambah');
    }

    public function simpan(Request $input)
    {
        
            $penumpang = new penumpang;
            $penumpang->nama_penumpang= $input->nama;
            $penumpang->nip= $input->nip;
            $penumpang->alamat= $input->alamat;
            if($pengguna->penumpang()->save($penumpang)) $informasi = 'berhasil simpan data';
        return redirect('penumpang')->with(['informasi' =>$informasi]);
    }

    public function edit($id)
    {
        $penumpang = penumpang::find($id);
        return view('penumpang.edit')->with(array('penumpang'=>$penumpang));
    }

    public function lihat($id_penumpang)
    {
        $penumpang = penumpang::find($id_penumpang);
        return view('penumpang.lihat')->with(array('penumpang'=>$penumpang));
    }

    public function update($id,Request $input)
    {
        $penumpang = penumpang::find($id);
        $penumpang->nama = $input->nama;
        $penumpang->nip = $input->nip;
        $penumpang->alamat= $input->alamat;
        $penumpang->save();
        if(!is_null($input->username))
        {
            $pengguna = $penumpang->pengguna->fill($input->only('username'));
            if(!empty($input->password))
                $pengguna->password = $input->password;
                if($pengguna->save())
                    $this->informasi = 'berhasil simpan data';
        }
        else
        {
            $this->informasi = 'berhasil simpan data';
        }
        return redirect('penumpang')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $penumpang = penumpang::find($id);
        if($penumpang->pengguna()->delete())
        {
            if($penumpang->delete())
                $this->informasi = 'berhasil hapus data';
        }
        return redirect('penumpang')->with(['informasi' => $this->informasi]);
    }
}
