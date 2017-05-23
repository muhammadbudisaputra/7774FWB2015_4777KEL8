<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kapal;

class KapalController extends Controller
{
    //
	protected $informasi = 'Gagal melakukan aksi';
    public function awal()
    {
        $semuakapal = kapal::all();
        return view('kapal.awal', compact('semuakapal'));
    }

    public function tambah()
    {
        return view('kapal.tambah');
    }

    public function simpan(Request $input)
    {
        
            $kapal = new kapal;
            $kapal->nama_kapal= $input->nama;
            $kapal->nip= $input->nip;
            $kapal->alamat= $input->alamat;
            if($pengguna->kapal()->save($kapal)) $informasi = 'berhasil simpan data';
        return redirect('kapal')->with(['informasi' =>$informasi]);
    }

    public function edit($id)
    {
        $kapal = kapal::find($id);
        return view('kapal.edit')->with(array('kapal'=>$kapal));
    }

    public function lihat($id_kapal)
    {
        $kapal = kapal::find($id_kapal);
        return view('kapal.lihat')->with(array('kapal'=>$kapal));
    }

    public function update($id,Request $input)
    {
        $kapal = kapal::find($id);
        $kapal->nama = $input->nama;
        $kapal->nip = $input->nip;
        $kapal->alamat= $input->alamat;
        $kapal->save();
        if(!is_null($input->username))
        {
            $pengguna = $kapal->pengguna->fill($input->only('username'));
            if(!empty($input->password))
                $pengguna->password = $input->password;
                if($pengguna->save())
                    $this->informasi = 'berhasil simpan data';
        }
        else
        {
            $this->informasi = 'berhasil simpan data';
        }
        return redirect('kapal')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $kapal = kapal::find($id);
        if($kapal->pengguna()->delete())
        {
            if($kapal->delete())
                $this->informasi = 'berhasil hapus data';
        }
        return redirect('kapal')->with(['informasi' => $this->informasi]);
    }
}