<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kapten;

class KaptenController extends Controller
{
    //
    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {
        $semuaKapten = kapten::all();
        return view('kapten.awal', compact('semuaKapten'));
    }

    public function tambah()
    {
        return view('kapten.tambah');
    }

    public function simpan(Request $input)
    {
        
            $kapten = new kapten;
            $kapten->nama_kapten= $input->nama;
            $kapten->nip= $input->nip;
            $kapten->alamat= $input->alamat;
            if($pengguna->kapten()->save($kapten)) $informasi = 'berhasil simpan data';
        return redirect('kapten')->with(['informasi' =>$informasi]);
    }

    public function edit($id)
    {
        $kapten = kapten::find($id);
        return view('kapten.edit')->with(array('kapten'=>$kapten));
    }

    public function lihat($id_kapten)
    {
        $kapten = kapten::find($id_kapten);
        return view('kapten.lihat')->with(array('kapten'=>$kapten));
    }

    public function update($id,Request $input)
    {
        $kapten = kapten::find($id);
        $kapten->nama = $input->nama;
        $kapten->nip = $input->nip;
        $kapten->alamat= $input->alamat;
        $kapten->save();
        if(!is_null($input->username))
        {
            $pengguna = $kapten->pengguna->fill($input->only('username'));
            if(!empty($input->password))
                $pengguna->password = $input->password;
                if($pengguna->save())
                    $this->informasi = 'berhasil simpan data';
        }
        else
        {
            $this->informasi = 'berhasil simpan data';
        }
        return redirect('kapten')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $kapten = kapten::find($id);
        if($kapten->pengguna()->delete())
        {
            if($kapten->delete())
                $this->informasi = 'berhasil hapus data';
        }
        return redirect('kapten')->with(['informasi' => $this->informasi]);
    }
}