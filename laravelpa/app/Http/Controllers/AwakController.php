<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Awak;

class AwakController extends Controller
{
    //
    protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {
        $semuaAwak = awak::all();
        return view('awak.awal', compact('semuaAwak'));
    }

    public function tambah()
    {
        return view('awak.tambah');
    }

    public function simpan(Request $input)
    {
        
            $awak = new awak;
            $awak->nama_awak= $input->nama;
            $awak->nip= $input->nip;
            $awak->alamat= $input->alamat;
            if($pengguna->awak()->save($awak)) $informasi = 'berhasil simpan data';
        return redirect('awak')->with(['informasi' =>$informasi]);
    }

    public function edit($id)
    {
        $awak = awak::find($id);
        return view('awak.edit')->with(array('awak'=>$awak));
    }

    public function lihat($id_awak)
    {
        $awak = awak::find($id_awak);
        return view('awak.lihat')->with(array('awak'=>$awak));
    }

    public function update($id,Request $input)
    {
        $awak = awak::find($id);
        $awak->nama = $input->nama;
        $awak->nip = $input->nip;
        $awak->alamat= $input->alamat;
        $awak->save();
        if(!is_null($input->username))
        {
            $pengguna = $awak->pengguna->fill($input->only('username'));
            if(!empty($input->password))
                $pengguna->password = $input->password;
                if($pengguna->save())
                    $this->informasi = 'berhasil simpan data';
        }
        else
        {
            $this->informasi = 'berhasil simpan data';
        }
        return redirect('awak')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $awak = awak::find($id);
        if($awak->pengguna()->delete())
        {
            if($awak->delete())
                $this->informasi = 'berhasil hapus data';
        }
        return redirect('awak')->with(['informasi' => $this->informasi]);
    }
}
